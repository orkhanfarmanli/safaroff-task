@extends('layouts.admin')
@section('title')
<div><a  class="list-title" href="{{ route('posts.create') }}"><span>Create Post</span>&nbsp;<i class="fa fa-plus"></i></a></div>
@endsection
@section('content')
<div class="col-lg-12">
  <div class="articles card">
    <div class="card-header d-flex align-items-center">
      <h3>Posts - {{ $post_count }}</h3>
    </div>
    <div class="card-body">
      @foreach ($posts as $post)
      <div class="item d-flex justify-content-between">
        <div class="d-flex justify-content-between">
          <div class="text">
            <a href="#"><h3 class="h5">{{ $post->title }}</h3></a><small>{{ str_limit($post->desc, 200) }}</small>
          </div>
        </div>
        <div class="d-flex justify-content-around">
          <div><a href="#" class="btn btn-deafult btn-sm"><i class="fa fa-eye"></i></a></div>
          <div><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-deafult btn-sm"><i class="fa fa-pencil"></i></a></div>
          <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-deafult btn-sm" name="Delete" type="submit" class="text-white"><i class="fa fa-times"></i></button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="text-xs-center">
    {{ $posts->links() }}
  </div>
</div>
<div style="padding-bottom: 30px;"></div>
@endsection
