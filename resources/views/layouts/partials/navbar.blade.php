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
    <li class="active"> <a href="{{ route('dashboard') }}"><i class="icon-home"></i>Home</a></li>
    {{--  <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Dropdown </a>
    <ul id="dashvariants" class="collapse list-unstyled">
      <li><a href="#">Page</a></li>
      <li><a href="#">Page</a></li>
      <li><a href="#">Page</a></li>
      <li><a href="#">Page</a></li>
    </ul>
  </li> --}}
  <li> <a href="{{ route('maininfos.index') }}"><i class="icon-padnote"></i>Main Info </a></li>
  <li> <a href="{{ route('posts.index')}}"><i class="icon-grid"></i>Posts </a></li>
  <li> <a href="#"><i class="fa fa-picture-o"></i>Galleries </a></li>
</ul>
</nav>
