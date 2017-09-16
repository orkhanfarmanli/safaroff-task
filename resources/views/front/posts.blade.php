@extends('layouts.app')
@section('title', 'Posts')
@section('content')
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
      on {{ date("F d, Y", strtotime($post->created_at)) }}</p>
    </div>
    @endforeach
    @endsection
