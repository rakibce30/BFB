<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="{{'/'}}admin-assets/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{'/'}}admin-assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    {{-- Dashboad Menu --}}
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('page.dashboard')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    {{-- Post Menu --}}
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
        <span class="menu-icon">
          <i class="mdi mdi-file-document"></i>
        </span>
        <span class="menu-title">Posts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="post">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('post.create')}}">Add Post</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('post.index')}}">All Posts</a></li>
        </ul>
      </div>
    </li>
    {{-- Category Menu --}}
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
        <span class="menu-icon">
          <i class="mdi mdi-checkerboard"></i>
        </span>
        <span class="menu-title">Categories</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="categories">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Add Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">All Categories</a></li>
        </ul>
      </div>
    </li>
    {{-- Users Menu --}}
    @if (Auth::user()->user_role === 1) {{-- 1 for Super Admin and 2 for Admin --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple"></i>
          </span>
          <span class="menu-title">All Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}">All User</a></li>
          </ul>
        </div>
      </li>     
    @endif
    {{-- Profile Menu --}}
    <li class="nav-item menu-items">
      @php
       

      @endphp
      <a class="nav-link" href="{{route('UserDetail.show', $_id = Hashids::encode(Auth::user()->id))}}">
        <span class="menu-icon">
          <i class="mdi mdi-account "></i>
        </span>
        <span class="menu-title">Profile</span>
      </a>
    </li>
    {{-- Password Change Menu --}}
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('settings.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-settings "></i>
        </span>
        <span class="menu-title">Settings</span>
      </a>
    </li>
    
  </ul>
</nav>