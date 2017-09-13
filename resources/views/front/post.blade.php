@extends('layouts.app')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset($post->main_img) }}')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1>{{ $post->title }}</h1>
          <h2 class="subheading">{{ $post->short_desc }}</h2>
          <span class="meta">Posted by
            <a href="#">Start Bootstrap</a>
          {{ date("F d, Y", strtotime($post->post_date)) }}</span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        {!! $post->body !!}
      </div>
    </div>
  </div>
</article>
@endsection
