@extends('layouts.app')
@section('title', 'Create post')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Form details</h3>
    </div>
    <div class="card-body">
      <form class="form-horizontal" action="{{route('posts.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Title (az)</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="title_az">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Title (en)</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="title_en">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Title (ru)</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="title_ru">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Body (az)</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="5" name="body_az"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Body (en)</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="5" name="body_en"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Body (ru)</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="5" name="body_ru"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Post date</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="post_date">
          </div>
        </div>
        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
