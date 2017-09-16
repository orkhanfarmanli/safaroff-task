<!-- Side Navbar -->
<nav class="side-navbar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{ asset('admin/img/avatar-1.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h4">{{ Auth::user()->name }}</h1>
      {{-- <p>Web Designer</p> --}}
    </div>
  </div>
  <!-- Sidebar Navidation Menus-->
  <span class="heading">Main</span>
  <ul class="list-unstyled">
    {{--  <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Dropdown </a>
    <ul id="dashvariants" class="collapse list-unstyled">
      <li><a href="#">Page</a></li>
      <li><a href="#">Page</a></li>
      <li><a href="#">Page</a></li>
      <li><a href="#">Page</a></li>
    </ul>
  </li> --}}
  <li> <a href="{{ route('maininfos.index') }}"><i class="fa fa-home"></i>Main Info </a></li>
  <li> <a href="{{ route('posts.index')}}"><i class="fa fa-th"></i>Blog Posts </a></li>
  <li> <a href="{{ route('menus.index')}}"><i class="fa fa-bars"></i>Menus </a></li>
</ul>
</nav>
