<script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var tokenMeta = document.querySelector('meta[name="csrf-token"]');
    var token = tokenMeta ? tokenMeta.getAttribute('content') : '';
    var uploadUrl = @json(route('editor.image', [], false));

    function shrinkImage(file) {
        return new Promise(function (resolve, reject) {
            if (file.size <= 1500000 && /^image\/(jpeg|png|gif|webp)$/.test(file.type || '')) {
                resolve(file);
                return;
            }

            var image = new Image();
            var objectUrl = URL.createObjectURL(file);
            image.onload = function () {
                var maxEdge = 1600;
                var scale = Math.min(1, maxEdge / Math.max(image.width, image.height));
                var canvas = document.createElement('canvas');
                canvas.width = Math.max(1, Math.round(image.width * scale));
                canvas.height = Math.max(1, Math.round(image.height * scale));
                var context = canvas.getContext('2d');
                context.fillStyle = '#ffffff';
                context.fillRect(0, 0, canvas.width, canvas.height);
                context.drawImage(image, 0, 0, canvas.width, canvas.height);
                URL.revokeObjectURL(objectUrl);

                var quality = 0.86;
                (function exportBlob() {
                    canvas.toBlob(function (blob) {
                        if (!blob) {
                            reject('Image upload failed.');
                            return;
                        }
                        if (blob.size > 1600000 && quality > 0.45) {
                            quality -= 0.12;
                            exportBlob();
                            return;
                        }
                        resolve(new File([blob], 'image.jpg', { type: 'image/jpeg' }));
                    }, 'image/jpeg', quality);
                })();
            };
            image.onerror = function () {
                URL.revokeObjectURL(objectUrl);
                reject('Upload a JPG, PNG, GIF, or WebP image.');
            };
            image.src = objectUrl;
        });
    }

    function UploadAdapter(loader) {
        this.loader = loader;
    }

    function readAsDataUrl(file) {
        return new Promise(function (resolve, reject) {
            var reader = new FileReader();
            reader.onload = function () { resolve(reader.result); };
            reader.onerror = function () { reject('Image upload failed.'); };
            reader.readAsDataURL(file);
        });
    }

    UploadAdapter.prototype.upload = function () {
        var loader = this.loader;
        return loader.file.then(function (file) {
            return shrinkImage(file).then(function (readyFile) {
                return readAsDataUrl(readyFile).then(function (dataUrl) {
                    return new Promise(function (resolve, reject) {
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', uploadUrl);
                        xhr.setRequestHeader('Content-Type', 'application/json');
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        xhr.setRequestHeader('Accept', 'application/json');
                        xhr.onload = function () {
                            var text = xhr.responseText || '';
                            var start = text.indexOf('{');
                            var json = {};
                            try {
                                json = JSON.parse(start >= 0 ? text.slice(start) : '{}');
                            } catch (error) {}
                            if (xhr.status >= 200 && xhr.status < 300 && json.url) {
                                var url = json.url;
                                if (url.charAt(0) === '/') {
                                    url = window.location.origin + url;
                                }
                                resolve({ default: url });
                                return;
                            }
                            var message = json.message || 'Image upload failed.';
                            if (json.errors && json.errors.file && json.errors.file[0]) {
                                message = json.errors.file[0];
                            }
                            reject(message);
                        };
                        xhr.onerror = function () {
                            reject('Image upload failed.');
                        };
                        xhr.send(JSON.stringify({ image: dataUrl, _token: token }));
                    });
                });
            });
        });
    };

    UploadAdapter.prototype.abort = function () {};

    function EditorUploadPlugin(editor) {
        editor.plugins.get('FileRepository').createUploadAdapter = function (loader) {
            return new UploadAdapter(loader);
        };
    }

    document.querySelectorAll('textarea.rich-editor').forEach(function (element) {
        ClassicEditor.create(element, {
            extraPlugins: [EditorUploadPlugin],
            toolbar: {
                items: [
                    'undo', 'redo', '|',
                    'heading', '|',
                    'bold', 'italic', '|',
                    'link', 'uploadImage', 'insertTable', 'blockQuote', 'mediaEmbed', '|',
                    'bulletedList', 'numberedList', 'outdent', 'indent'
                ]
            },
            image: {
                toolbar: ['imageStyle:inline', 'imageStyle:block', 'imageStyle:side', '|', 'toggleImageCaption', 'imageTextAlternative']
            }
        }).then(function (editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = function (loader) {
                return new UploadAdapter(loader);
            };
            editor.ui.view.editable.element.style.minHeight = '420px';
        }).catch(function (error) {
            console.error(error);
        });
    });
});
</script>
