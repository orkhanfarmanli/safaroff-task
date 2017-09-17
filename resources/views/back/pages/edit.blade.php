@extends('layouts.admin')
@section('title', 'Edit page info')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Form details</h3>
    </div>
    <div class="card-body">
      {!! Form::model($page, ['method' => 'PUT', 'route' => ['pages.update', $page->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
        @include('back.pages._form', ['button' => 'Update'])
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
