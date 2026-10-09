#!/usr/bin/env python3
"""Compress public images over 100KB to WebP. Originals are kept."""

import os
import struct
import subprocess
import tempfile
from concurrent.futures import ThreadPoolExecutor, as_completed

ROOT = os.path.abspath(os.path.join(os.path.dirname(__file__), "..", "public"))
CWEBP = "/Applications/XAMPP/xamppfiles/bin/cwebp"
DWEBP = "/Applications/XAMPP/xamppfiles/bin/dwebp"
LIMIT = 100 * 1024
EXTS = {".jpg", ".jpeg", ".png", ".gif", ".webp"}
RASTER = {".jpg", ".jpeg", ".png", ".gif"}


def image_size(path):
    ext = os.path.splitext(path)[1].lower()
    with open(path, "rb") as handle:
        head = handle.read(32)
        if ext in {".jpg", ".jpeg"} and head[:2] == b"\xff\xd8":
            handle.seek(0)
            data = handle.read()
            index = 2
            while index + 9 < len(data):
                if data[index] != 0xFF:
                    index += 1
                    continue
                marker = data[index + 1]
                if marker in (0xC0, 0xC1, 0xC2):
                    height, width = struct.unpack(">HH", data[index + 5:index + 9])
                    return width, height
                if marker == 0xD8 or marker == 0xD9:
                    index += 2
                    continue
                if index + 4 > len(data):
                    break
                length = struct.unpack(">H", data[index + 2:index + 4])[0]
                index += 2 + length
        if ext == ".png" and head[:8] == b"\x89PNG\r\n\x1a\n":
            width, height = struct.unpack(">II", head[16:24])
            return width, height
        if ext == ".gif" and head[:6] in (b"GIF87a", b"GIF89a"):
            width, height = struct.unpack("<HH", head[6:10])
            return width, height
        if ext == ".webp" and head[:4] == b"RIFF" and head[8:12] == b"WEBP":
            handle.seek(12)
            chunk = handle.read(4)
            size = struct.unpack("<I", handle.read(4))[0]
            body = handle.read(size)
            if chunk == b"VP8X" and len(body) >= 10:
                width = 1 + int.from_bytes(body[4:7], "little")
                height = 1 + int.from_bytes(body[7:10], "little")
                return width, height
            if chunk == b"VP8 " and len(body) >= 10:
                width, height = struct.unpack("<HH", body[6:10])
                return width & 0x3FFF, height & 0x3FFF
            if chunk == b"VP8L" and len(body) >= 5:
                bits = int.from_bytes(body[1:5], "little")
                return (bits & 0x3FFF) + 1, ((bits >> 14) & 0x3FFF) + 1
    return None


def animated_gif(path):
    count = 0
    with open(path, "rb") as handle:
        data = handle.read()
    index = 0
    while True:
        found = data.find(b"\x21\xf9", index)
        if found < 0:
            break
        count += 1
        if count > 1:
            return True
        index = found + 2
    return False


def encode(source, destination, quality, max_edge):
    command = [CWEBP, "-q", str(quality), "-quiet"]
    size = image_size(source)
    if size and max(size) > max_edge:
        width, height = size
        if width >= height:
            command += ["-resize", str(max_edge), "0"]
        else:
            command += ["-resize", "0", str(max_edge)]
    command += [source, "-o", destination]
    result = subprocess.run(command, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
    if result.returncode == 0 and os.path.isfile(destination) and os.path.getsize(destination) > 0:
        return True
    png = destination + ".fallback.png"
    converted = subprocess.run(
        ["sips", "-s", "format", "png", source, "--out", png],
        stdout=subprocess.PIPE,
        stderr=subprocess.PIPE,
    )
    if converted.returncode != 0 or not os.path.isfile(png):
        return False
    retry = command[:-3] + [png, "-o", destination]
    result = subprocess.run(retry, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
    if os.path.isfile(png):
        os.remove(png)
    return result.returncode == 0 and os.path.isfile(destination) and os.path.getsize(destination) > 0


def compress_to(source, destination):
    passes = ((75, 1600), (60, 1200), (50, 1000), (40, 800))
    for quality, edge in passes:
        if not encode(source, destination, quality, edge):
            return False
        if os.path.getsize(destination) <= LIMIT:
            return True
    return os.path.isfile(destination) and os.path.getsize(destination) > 0


def process(path):
    ext = os.path.splitext(path)[1].lower()
    try:
        original_size = os.path.getsize(path)
    except OSError as error:
        return ("fail", path, str(error))

    if ext in RASTER:
        if ext == ".gif" and animated_gif(path):
            return ("skip-anim", path, original_size)
        destination = os.path.splitext(path)[0] + ".webp"
        if os.path.isfile(destination) and os.path.getsize(destination) <= LIMIT:
            return ("skip", path, os.path.getsize(destination))
        if compress_to(path, destination):
            return ("ok", path, os.path.getsize(destination))
        return ("fail", path, "encode failed")

    if ext == ".webp" and original_size > LIMIT:
        directory = tempfile.mkdtemp(prefix="webp-")
        png = os.path.join(directory, "frame.png")
        decoded = subprocess.run([DWEBP, path, "-o", png], stdout=subprocess.PIPE, stderr=subprocess.PIPE)
        if decoded.returncode != 0:
            return ("fail", path, "dwebp failed")
        temporary = path + ".recompress.webp"
        if not compress_to(png, temporary):
            if os.path.isfile(temporary):
                os.remove(temporary)
            return ("fail", path, "recompress failed")
        new_size = os.path.getsize(temporary)
        if new_size < original_size:
            os.replace(temporary, path)
            return ("ok", path, new_size)
        os.remove(temporary)
        return ("skip", path, original_size)

    return ("skip", path, original_size)


def main():
    jobs = []
    raster_stems = set()
    for dirpath, _, files in os.walk(ROOT):
        for name in files:
            ext = os.path.splitext(name)[1].lower()
            if ext not in EXTS:
                continue
            path = os.path.join(dirpath, name)
            try:
                size = os.path.getsize(path)
            except OSError:
                continue
            if size <= LIMIT:
                continue
            jobs.append(path)
            if ext in RASTER:
                raster_stems.add(os.path.splitext(path)[0].lower())

    selected = []
    for path in jobs:
        ext = os.path.splitext(path)[1].lower()
        if ext == ".webp" and os.path.splitext(path)[0].lower() in raster_stems:
            continue
        selected.append(path)

    counts = {"ok": 0, "skip": 0, "skip-anim": 0, "fail": 0}
    saved = 0
    failures = []
    with ThreadPoolExecutor(max_workers=4) as pool:
        futures = [pool.submit(process, path) for path in selected]
        for future in as_completed(futures):
            status, path, detail = future.result()
            counts[status] = counts.get(status, 0) + 1
            if status == "ok":
                saved += 1
            elif status == "fail":
                failures.append(f"{path}: {detail}")
            if (counts["ok"] + counts["fail"]) and (counts["ok"] + counts["fail"]) % 200 == 0:
                print(f"progress ok={counts['ok']} fail={counts['fail']}", flush=True)

    print(f"DONE selected={len(selected)} ok={counts['ok']} skip={counts['skip']} anim={counts['skip-anim']} fail={counts['fail']}")
    for line in failures[:30]:
        print("FAIL", line)


if __name__ == "__main__":
    main()
