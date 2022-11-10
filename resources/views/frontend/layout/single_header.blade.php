<header>
  <nav id="main-navbar" style="background: #f9eef8">
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-brand">
          <a class="logo" href="{{route('index')}}">
            <img src="{{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}}" alt="logo">
    
          </a>
        </div>
        <button class="navbar-toggle-btn">
          <i class="fa fa-bars"></i>
        </button>
        <button class="search-toggle-btn">
          <i class="fa fa-search"></i>
        </button>
      </div>

      <ul class="navbar-menu nav navbar-nav navbar-right">
        <li>
          <a href="{{route('index')}}">Home</a>
        </li>
        <li>
          <a href="{{route('about.us')}}">About</a>
        </li>
        <li >
          <a href="{{route('event.all')}}">Events</a>

        </li>
        <li class="">
          <a href="{{route('team.all')}}">Team</a>
        </li>
        <li class="">
          <a href="{{route('news.all')}}">News</a>
        </li>
        <li class="">
          <a href="{{route('gallery.cat')}}">Gallery</a>
        </li>
        <li class="">
          <a href="{{route('contact.us')}}">Contact Us</a>
        </li>

      </ul>
    </div>
  </nav>
  @php
  $prefix = Request::route()->getPrefix();
  $route = Request::route()->getName();

  if ($route == 'about.us') {
    $title = "About Us";
  }else if($route == 'event.all'){
    $title = "Events";
  }else if($route == 'news.all' || $route == 'news.tag'){
    $title = "News and Blog";
  }else if($route == 'gallery.cat'){
    $title = "Gallery Category";
  }else if($route == 'gallery.all'){
    $title = "Gallery";
  }else if($route == 'event.single'){
    $title = "Event Details";
  }else if($route == 'event.tag'){
    $title = "Events";
  }else if($route == 'news.single'){
    $title = "News Details";
  }else if($route == 'application.create'){
    $title = "Member Application";
  }else if($route == "contact.us"){
    $title = "Contact Us";
  }else if($route == "team.all"){
    $title = "Our Team";
  }
  @endphp
  <div id="page-header">
    <div class="section-bg" style="background-image:url({{asset('frontend')}}/img/background-2.jpg)"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-content">
            
            <h1>{{$title}}</h1>
            <ul class="breadcrumb">
              <li>
                <a href="{{route('index')}}">Home</a>
              </li>
              <li>
                <a href="#">{{$title}}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>