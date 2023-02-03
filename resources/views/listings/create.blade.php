<x-layout>
    <x-card class="max-w-full p-10 mx-auto mt-24 text-white mg">
        <script src="https://cdn.tiny.cloud/1/kidbho6ws2x58esyf7xh63cykfz1g1omfb9ke1ndospglezj/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">Create a Gig</h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        {{-- <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf --}}


        {{-- <div class="mb-6">
                <button class="px-4 py-2 text-white rounded bg-laravel hover:bg-black">
                    Create Gig
                </button>

                <a href="/" class="ml-4 text-black"> Back </a>
            </div> --}}
        <script type="application/javascript">
                        tinymce.init({
                            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                            contextmenu_avoid_overlap: '.mce-spelling-word',
                            image_class_list: [{
                                title: 'img-responsive',
                                value: 'img-responsive'
                            }, ],
                            height: 500,
                            setup: function(editor) {
                                editor.on('init change', function() {
                                    editor.save();
                                });
                            },
                            plugins: 'code table lists image ',
                            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image | toggledark ',
                            skin: (window.matchMedia("(prefers-color-scheme: dark)").matches ? "oxide-dark" : ""),
                            content_css: (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : ""),
                            image_title: true,
                            branding: false,
                            automatic_uploads: true,
                            images_upload_url: '/blogupload',
                            file_picker_types: 'image',
                            file_picker_callback: function(cb, value, meta) {
                                var input = document.createElement('input');
                                input.setAttribute('type', 'file');
                                input.setAttribute('accept', 'image/*');
                                input.onchange = function() {
                                    var file = this.files[0];
                                    var reader = new FileReader();
                                    reader.readAsDataURL(file);
                                    reader.onload = function() {
                                        var id = 'blobid' + (new Date()).getTime();
                                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                        var base64 = reader.result.split(',')[1];
                                        var blobInfo = blobCache.create(id, file, base64);
                                        blobCache.add(blobInfo);
                                        cb(blobInfo.blobUri(), {
                                            title: file.name
                                        });
                                    };
                                };
                                input.click();
                            }
                        });
             </script>
        <div class="z-0 w-4/5 pt-1 m-auto">
            <x-forms.tinymce-editor />
        </div>
        {{-- <div
                class="items-center justify-center pt-10 mx-auto space-y-3 sm:space-x-6 sm:space-y-0 sm:flex lg:justify-start">
                <button type="submit"
                    class="block w-full py-3 text-center text-gray-800 bg-white rounded-md shadow-md hover:underline px-7 sm:w-auto hover:bg-black hover:text-gray-50">
                    Create Gig
                </button>
                <a href="{{ url('home') }}"
                    class="block w-full py-3 text-center text-gray-200 bg-gray-700 rounded-md px-7 sm:w-auto hover:underline hover:bg-blue-600">
                    Back
                </a>
            </div> --}}
        {{-- </form> --}}
    </x-card>
</x-layout>
