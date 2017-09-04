@extends('layouts.app')
@section('title', "Posts ($article_count)  ")
@section('content')
<div class="col-lg-12">
  <div class="articles card">
    <div class="card-header d-flex align-items-center">
      <div><a  class="list-title" href="{{ route('posts.create') }}"><span>Create Post</span>&nbsp;<i class="fa fa-plus"></i></a></div>
    </div>
    <div class="card-body">
      <div class="item d-flex align-items-center">
        <div class="image"><img src="{{ asset('admin/img/avatar-1.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="text">
          <a href="#"><h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Aria Smith.   </small>
        </div>
        <div>
          <div class="badge badge-rounded bg-green"><i class="fa fa-pencil"></i> Edit</div>
          <div class="badge badge-rounded bg-red"><i class="fa fa-times"></i> Delete</div>
        </div>
      </div>
      <div class="item d-flex align-items-center">
        <div class="image"><img src="{{ asset('admin/img/avatar-2.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="text"><a href="#">
        <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Frank Williams.   </small></div>
        <div>
          <div class="badge badge-rounded bg-green"><i class="fa fa-pencil"></i> Edit</div>
          <div class="badge badge-rounded bg-red"><i class="fa fa-times"></i> Delete</div>
        </div>
      </div>
      <div class="item d-flex align-items-center">
        <div class="image"><img src="{{ asset('admin/img/avatar-3.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="text"><a href="#">
        <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Ashley Wood.   </small></div>
        <div>
          <div class="badge badge-rounded bg-green"><i class="fa fa-pencil"></i> Edit</div>
          <div class="badge badge-rounded bg-red"><i class="fa fa-times"></i> Delete</div>
        </div>
      </div>
      <div class="item d-flex align-items-center">
        <div class="image"><img src="{{ asset('admin/img/avatar-4.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="text"><a href="#">
        <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Jason Doe.   </small></div>
        <div>
          <div class="badge badge-rounded bg-green"><i class="fa fa-pencil"></i> Edit</div>
          <div class="badge badge-rounded bg-red"><i class="fa fa-times"></i> Delete</div>
        </div>
      </div>
      <div class="item d-flex align-items-center">
        <div class="image"><img src="{{ asset('admin/img/avatar-5.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="text"><a href="#">
        <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Sam Martinez.   </small></div>
        <div>
          <div class="badge badge-rounded bg-green"><i class="fa fa-pencil"></i> Edit</div>
          <div class="badge badge-rounded bg-red"><i class="fa fa-times"></i> Delete</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
