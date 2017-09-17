<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  {!! Form::label('title', 'Page Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('title') }}</small>
</div>
<div class="form-group{{ $errors->has('identifier') ? ' has-error' : '' }}">
  {!! Form::label('identifier', 'Identifier') !!}
  {!! Form::text('identifier', null, ['class' => 'form-control', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('identifier') }}</small>
</div>
{!! Form::label('title', 'Image') !!}
<div class="input-group">
  <span class="input-group-btn">
    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color: white">
      <i class="fa fa-picture-o"></i> Choose
    </a>
  </span>
  {!! Form::text('cover_img', null, ['class' => 'form-control', 'id' => 'thumbnail']) !!}
</div>
<small class="text-danger">{{ $errors->first('cover_img') }}</small>
<br>
<div class="form-group{{ $errors->has('short_desc') ? ' has-error' : '' }}">
  {!! Form::label('short_desc', 'Description') !!}
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
@include('back.partials._tinymce')
@endsection
