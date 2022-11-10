<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Web Foundation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout </p>
                </a>
              </li>
       
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
              
              </p>
            </a>
          </li>
          <li class="nav-item menu-is-opening menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Options
                <i class="fas fa-angle-left right"></i>
            
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logo.index')}}" class="nav-link {{$route == 'logo.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link {{$route == 'slider.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('message.index')}}" class="nav-link {{$route == 'message.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Message</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('data.index')}}" class="nav-link  {{$route == 'data.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('event.index')}}" class="nav-link {{$route == 'event.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('news.index')}}" class="nav-link  {{$route == 'news.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('galcat.index')}}" class="nav-link {{$route == 'galcat.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('gallery.index')}}" class="nav-link  {{$route == 'gallery.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('testimonial.index')}}" class="nav-link  {{$route == 'testimonial.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Contact Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link {{$route == 'contact.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('credential.index')}}" class="nav-link {{$route == 'credential.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Credential</p>
                </a>
              </li>
           
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link {{$route == 'about.index'?'active':''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                About
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('team.index')}}" class="nav-link {{$route == 'team.index'?'active':''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Team
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('application.list')}}" class="nav-link {{$route == 'application.list'?'active':''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Application
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>