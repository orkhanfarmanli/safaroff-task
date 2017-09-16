<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
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
</div>
<small class="text-danger">{{ $errors->first('main_img') }}</small>
<br>
<img id="holder" style="margin-top:15px;max-height:100px;">
<div class="form-group{{ $errors->has('short_desc') ? ' has-error' : '' }}">
  {!! Form::label('short_desc', 'Short description') !!}
  {!! Form::text('short_desc', null, ['class' => 'form-control', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('short_desc') }}</small>
</div>
<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
  {!! Form::label('body', 'Body') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control my-editor', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('body') }}</small>
</div>
<div class="btn-group">
  {!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
</div>
@section('customscripts')
@include('back.posts._tinymce')
@endsection
