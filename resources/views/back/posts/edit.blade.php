@extends('layouts.admin')
@section('title', 'Edit post')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Form details</h3>
    </div>
    <div class="card-body">
      {!! Form::model($post, ['method' => 'PUT', 'route' => ['posts.update', $post->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
        @include('back.posts._form', ['button' => 'Submit'])
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
