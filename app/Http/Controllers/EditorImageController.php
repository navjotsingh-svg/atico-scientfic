<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorImageController extends Controller
{
    public function store(Request $request)
    {
        $binary = $this->imageBytes($request);
        if ($binary === null) {
            return response()->json([
                'message' => 'The image could not be uploaded. Use a JPG, PNG, GIF, or WebP.',
            ], 422);
        }

        $info = @getimagesizefromstring($binary);
        $extensions = [
            IMAGETYPE_JPEG => 'jpg',
            IMAGETYPE_PNG => 'png',
            IMAGETYPE_GIF => 'gif',
            IMAGETYPE_WEBP => 'webp',
        ];
        if ($info === false || ! isset($extensions[$info[2]])) {
            return response()->json([
                'message' => 'Upload a JPG, PNG, GIF, or WebP image.',
            ], 422);
        }

        $directory = public_path('uploads/editor');
        if (! is_dir($directory) && ! mkdir($directory, 0755, true) && ! is_dir($directory)) {
            return response()->json(['message' => 'The image folder could not be created.'], 500);
        }

        $name = time().'_'.bin2hex(random_bytes(6)).'.'.$extensions[$info[2]];
        if (file_put_contents($directory.'/'.$name, $binary) === false) {
            return response()->json(['message' => 'The image could not be saved.'], 500);
        }

        return response()->json([
            'url' => '/uploads/editor/'.$name,
        ]);
    }

    private function imageBytes(Request $request): ?string
    {
        $file = $request->file('file');
        if ($file && $file->isValid()) {
            $binary = file_get_contents($file->getRealPath());

            return $binary === false ? null : $binary;
        }

        $raw = $request->input('image');
        if (! is_string($raw) || $raw === '') {
            return null;
        }

        if (preg_match('#^data:image/[a-zA-Z0-9.+-]+;base64,#', $raw)) {
            $raw = substr($raw, strpos($raw, ',') + 1);
        }

        $raw = preg_replace('/\s+/', '', $raw);
        if ($raw === null || strlen($raw) > 8000000) {
            return null;
        }

        $binary = base64_decode($raw, true);

        return $binary === false || $binary === '' ? null : $binary;
    }
}
