<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Gallery
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Welcome To gallery
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input-label for="album" :value="__('Album')" />
                    <x-text-input id="album" class="block mt-1 w-full" type="text" name="album" :value="old('album')" required autofocus autocomplete="album" />
                    <x-input-error :messages="$errors->get('album')" class="mt-2" />
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input-label for="editor" :value="__('Editor')" />
                    <textarea id="editor" name="editor" style="min-width:500px; max-width:100%; min-height:50px; height:400px; width:100%;"></textarea>
                    <script>
                        // Initialize CKEditor
                        ClassicEditor
                            .create(document.querySelector('textarea'))
                            .then(editor => {
                                console.log('Editor was initialized', editor);
                                editor.ui.view.editable.element.style.height = '500px';
                            })
                            .catch(error => {
                                console.error('Error during initialization of the editor', error);
                            });
                    </script>

                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                    @csrf
                        <div>
                            <h4>Upload Multiple Image By Click On Box</h4>
                        </div>
                    </form>
                    <button id="uploadFile" class="btn btn-success mt-1">Upload Images</button>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        Dropzone.autoDiscover = false;
                        var images = {{ Js::from($images) }};
                        var myDropzone = new Dropzone(".dropzone", { 
                            init: function() { 
                                myDropzone = this;
                                $.each(images, function(key,value) {
                                    var mockFile = { name: value.name, size: value.filesize};
                    
                                    myDropzone.emit("addedfile", mockFile);
                                    myDropzone.emit("thumbnail", mockFile, value.path);
                                    myDropzone.emit("complete", mockFile);
                        
                                });
                            },
                        autoProcessQueue: true,
                        paramName: "files",
                        uploadMultiple: true,
                        maxFilesize: 5,
                        acceptedFiles: ".jpeg,.jpg,.png,.gif"
                        });

                        myDropzone.on("success", function(file, response) {
                            console.log(response);
                        });
                    
                        $('#uploadFile').click(function(){
                        myDropzone.processQueue();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
