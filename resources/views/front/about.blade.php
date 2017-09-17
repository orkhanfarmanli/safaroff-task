@extends('layouts.app')
@section('title', 'About me')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset($page->cover_img)  }})">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>{{ $page->title }}</h1>
          <span class="subheading">{{ $page->short_desc }}</span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      {!! $page->body !!}
    </div>
  </div>
</div>
@endsection
