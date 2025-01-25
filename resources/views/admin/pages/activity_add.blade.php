@extends('layouts.app', ['page' => __('Add Activities'), 'pageSlug' => 'activity_add'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Bali Actvities</h4>
        
      </div>
      <div class="card-body">

      <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="row">
          <div class="form-group col-lg-6">
              <label>Code</label>
              <input type="hidden" name="id" class="form-control" placeholder="code" value="{{ $activityDetail->id ?? '' }}" >
              <input type="text" name="code" class="form-control" placeholder="code" value="{{ $activityDetail->code ?? '' }}" >
          </div>
          <div class="form-group col-lg-6">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $activityDetail->name ?? '' }}">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
              <label>slug</label>
              <input type="text" name="slug" class="form-control" placeholder="slug" value="{{ $activityDetail->slug ?? '' }}">
          </div>
          <div class="form-group col-lg-6">
              <label>Lang</label>
              <input type="text" name="lang" class="form-control" placeholder="Lang" value="{{ $activityDetail->lang ?? '' }}">
          </div>
          
        </div>
        <div class="row">
          <div class="form-group col-lg-6">
              <label>Type</label>
              <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $activityDetail->type ?? '' }}">
          </div>
          <div class="form-group col-lg-6">
                <label>Area</label>
                <input type="text" name="area" class="form-control" placeholder="Type" value="{{ $activityDetail->area ?? '' }}">
            </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" >{{ $activityDetail->deskripsi ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <div class="needsclick dropzone" id="document-dropzone"></div>
        </div>
        <button type="submit" class="btn btn-fill btn-primary">Simpan</button>
      </form>

      </div>
    </div>
  </div>
  
</div>
          <!-- <textarea class="my-edit form-control" id="my-edit" name="wysiwyg-editor"></textarea> -->
          
  @push('js')
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('deskripsi', options);
    // CKEDITOR.replace('price', options);
    // CKEDITOR.replace('pickup', options);
    // CKEDITOR.replace('payment', options);
    // CKEDITOR.replace('note', options);


    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
      url: '{{ route('activity.storeMedia') }}',
      maxFilesize: 10, // MB
      acceptedFiles: '.png, .jpg',
      addRemoveLinks: true,
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      success: function (file, response) {
        console.log(file);
        $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
        uploadedDocumentMap[file.name] = response.name
      },
      removedfile: function (file) {
        // console.log(file.xhr);
        if(file.xhr === undefined){
          nama = file.name ;
        }else{
          var response = JSON.parse(file.xhr.response);
          nama = response.name ;
          console.log(response.name);
        }
        $.ajax({
            headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
            type:'POST',
            url:'/activity/media/delete',
            data : { "filetodelete" : nama },
            success : function (data) {
              // console.log(data)
              
            }
        }); 
        file.previewElement.remove()
        var name = ''
        if (typeof nama !== 'undefined') {
          name = nama
        } else {
          name = uploadedDocumentMap[nama]
        }
        $('form').find('input[name="document[]"][value="' + name + '"]').remove()     
      
      },
      init: function () {
        // console.log('onload dropzone');

        @if(isset($activityDetail) && $activityDetail->foto)
          var filess = {!! json_encode($activityDetail->foto) !!}
          var filesa = filess.split(';');

          const files = [];
          for (let a = 0; a < filesa.length -1; a++) {
              files.push ({
                  'file_name': filesa[a],
              });
              // console.log(filesa[a])
          }

          // console.log(files);
          for (var i in files) {
            var file = files[i]
            // console.log(this)
            // this.files.push(file);

            // this.options.addedfile.call(this, file)
            // file.previewElement.classList.add('dz-complete')

            // var principal = '@Model.Article.Image'; 
            let mockFile = { name: file.file_name, size: 12345, type: 'image/jpg', accepted: true };
            this.emit("addedfile", mockFile);
            this.emit("thumbnail", mockFile, "/assets/img/activity/" + file.file_name)
            {
                $('[data-dz-thumbnail]').css('height', '120');
                $('[data-dz-thumbnail]').css('width', '120');
                $('[data-dz-thumbnail]').css('object-fit', 'cover');
            };              
            this.emit('complete', mockFile);
            this.files.push(mockFile);

            $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
          }
        @endif
      }
    }
    
  </script>
 
  @endpush
@endsection
