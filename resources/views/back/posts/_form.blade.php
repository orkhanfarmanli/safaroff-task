<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
  <small class="text-danger">{{ $errors->first('title') }}</small>
</div>
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
{!! Form::label('title', 'Image') !!}
<div class="input-group">
  <span class="input-group-btn">
    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color: white">
      <i class="fa fa-picture-o"></i> Choose
    </a>
  </span>
  {!! Form::text('main_img', null, ['class' => 'form-control', 'id' => 'thumbnail']) !!}

  {{-- <input id="thumbnail" class="form-control" type="text" name="main_img"> --}}
</div>
<img id="holder" style="margin-top:15px;max-height:100px;">
<div class="form-group{{ $errors->has('short_desc') ? ' has-error' : '' }}">
  {!! Form::label('short_desc', 'Short description') !!}
  {!! Form::text('short_desc', null, ['class' => 'form-control']) !!}
  <small class="text-danger">{{ $errors->first('short_desc') }}</small>
</div>
<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
  {!! Form::label('body', 'Body') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control my-editor']) !!}
  <small class="text-danger">{{ $errors->first('body') }}</small>
</div>
<div class="btn-group">
  {!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
</div>
@section('customscripts')
<script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script src="{{ asset('admin/js/tinymce/tinymce.min.js')}}"></script>
<script>
$('#lfm').filemanager('image');

var editor_config = {
path_absolute : "/",
selector: "textarea.my-editor",
plugins: [
"advlist autolink lists link image charmap print preview hr anchor pagebreak",
"searchreplace wordcount visualblocks visualchars code fullscreen",
"insertdatetime media nonbreaking save table contextmenu directionality",
"emoticons template paste textcolor colorpicker textpattern"
],
toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
relative_urls: false,
file_browser_callback : function(field_name, url, type, win) {
var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
if (type == 'image') {
cmsURL = cmsURL + "&type=Images";
} else {
cmsURL = cmsURL + "&type=Files";
}
tinyMCE.activeEditor.windowManager.open({
file : cmsURL,
title : 'Filemanager',
width : x * 0.8,
height : y * 0.8,
resizable : "yes",
close_previous : "no"
});
}
};
tinymce.init(editor_config);
</script>
@endsection
