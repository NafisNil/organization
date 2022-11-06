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