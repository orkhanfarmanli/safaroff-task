@extends('layouts.admin')
@section('title', 'Create post')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Form details</h3>
    </div>
    <div class="card-body">
      {!! Form::open(['method' => 'POST', 'route' => 'menus.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
        @include('back.menus._form', ['button' => 'Submit'])
      {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection
