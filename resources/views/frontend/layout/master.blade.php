<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/css/style_one.css" />
    <!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
					<![endif]-->
  </head>
  @php
  $prefix = Request::route()->getPrefix();
  $route = Request::route()->getName();
  @endphp
  <body>
    <header id="home">
        @include('frontend.layout.header')
        @if ($route == 'index')
            @include('frontend.layout.slider')
        @endif
      </header>
      @yield('content')
      @include('frontend.layout.footer')
    <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.min.js_owl.carousel.min.js.pagespeed.jc.6INv6TP5LI.js"></script>
    <script>
      eval(mod_pagespeed_o3ddRsRvMY);
    </script>
    <script>
      eval(mod_pagespeed_hws1mPg42b);
    </script>
    <script src="{{asset('frontend')}}/js/jquery.stellar.min.js_main.js.pagespeed.jc.TaD_OS7Wkn.js"></script>
    <script>
      eval(mod_pagespeed_Ki5OopftaL);
    </script>
    <script>
      eval(mod_pagespeed_JMZFdOFuYW);
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="{{asset('frontend')}}/js/beacon.min.js" data-cf-beacon='{"rayId":"750aebecffe48c35","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}'></script>
    <center>
      <font size="2">This is the free demo result. For a full version of this website, please go to <a href="https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">Website Downloader</a>
      </font>
    </center>
  </body>
</html>