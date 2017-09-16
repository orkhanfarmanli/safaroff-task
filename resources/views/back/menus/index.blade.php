@extends('layouts.admin')
@section('title')
<div><a  class="list-title" href="{{ route('menus.create') }}"><span>Create Menu</span>&nbsp;<i class="fa fa-plus"></i></a></div>
@endsection
@section('content')
<div class="col-lg-12">
  <div class="articles card">
    <div class="card-header d-flex align-items-center">
      <h3>Menus - {{ $menu_count }}</h3>
    </div>
    <div class="card-body">
      @foreach ($menus as $menu)
      <div class="item d-flex justify-content-between">
        <div class="d-flex justify-content-between">
          <div class="text">
            <a href="#"><h3 class="h5">#{{ $menu->menu_order }} {{ $menu->title }}</h3></a><small>{{ str_limit($menu->desc, 200) }}</small>
          </div>
        </div>
        <div class="d-flex justify-content-around">
          <div><a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-deafult btn-sm"><i class="fa fa-pencil"></i></a></div>
          <form method="POST" action="{{ route('menus.destroy', $menu->id) }}">
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
    {{ $menus->links() }}
  </div>
</div>
<div style="padding-bottom: 30px;"></div>
@endsection
