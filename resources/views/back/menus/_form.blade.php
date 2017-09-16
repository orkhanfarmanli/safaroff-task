<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('title') }}</small>
</div>
<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
  {!! Form::label('url', 'Menu url') !!}
  {!! Form::text('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('url') }}</small>
</div>
<div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
  {!! Form::label('desc', 'Description') !!}
  {!! Form::text('desc', null, ['class' => 'form-control', 'required' => 'required']) !!}
  <small class="text-danger">{{ $errors->first('desc') }}</small>
</div>
<div class="form-group{{ $errors->has('menu_order') ? ' has-error' : '' }}">
    {!! Form::label('menu_order', 'Menu order') !!}
    {!! Form::number('menu_order', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('menu_order') }}</small>
</div>
<div class="btn-group">
  {!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
</div>
