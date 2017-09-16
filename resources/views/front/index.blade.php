@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach ($posts as $post)
      <div class="post-preview">
        <a href="{{ route('post', $post->id) }}">
          <h2 class="post-title">
          {{$post->title}}
          </h2>
          <h3 class="post-subtitle">
          {{ $post->short_desc }}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{ $post->author['name'] }}</a>
        {{-- {{ date(date("D Y", strtotime($post->post_date))) }}</p> --}}
      on {{ date("F d, Y", strtotime($post->created_at)) }}</p>
    </div>
    <hr>
    @endforeach
    <!-- Pager -->
    <div class="clearfix">
      <a class="btn btn-secondary float-right" href="{{ route('posts') }}">Older Posts &rarr;</a>
    </div>
  </div>
</div>
</div>
@endsection
