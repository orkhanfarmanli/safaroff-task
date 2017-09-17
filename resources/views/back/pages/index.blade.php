@extends('layouts.admin')
@section('title')
<div><a  class="list-title" href="{{ route('pages.create') }}"><span>Create Page Data</span>&nbsp;<i class="fa fa-plus"></i></a></div>
@endsection
@section('content')
<div class="col-lg-12">
  <div class="articles card">
    <div class="card-header d-flex align-items-center">
      <h3>Pages - {{ $page_count }}</h3>
    </div>
    <div class="card-body">
      @foreach ($pages as $page)
      <div class="item d-flex justify-content-between">
        <div class="d-flex justify-content-between">
          <div class="text">
            <a href="#"><h3 class="h5">{{ $page->title }} Page</h3></a><small></small>
          </div>
        </div>
        <div class="d-flex justify-content-around">
          <div><a href="{{ route('pages.edit', $page->id) }}" class="btn btn-deafult btn-sm"><i class="fa fa-pencil"></i></a></div>
          <form method="POST" action="{{ route('pages.destroy', $page->id) }}">
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
    {{ $pages->links() }}
  </div>
</div>
<div style="padding-bottom: 30px;"></div>
@endsection
