<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/css/style_two.css" />
    <!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
					<![endif]-->
  </head>
  <body>
<!-- header -->

@include('frontend.layout.single_header')
<!-- header -->
    <div class="section">
      <div class="container">
        @yield('content')
      </div>
    </div>
<!-- footer -->
@include('frontend.layout.single_footer')
<!-- footer -->
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
    <script type="text/javascript">
      $(document).ready(function(){
        $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
            $('#showImage').attr('src', e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
        })
      })
    </script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#image2').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage2').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    })
  })
</script>
    <script defer src="{{asset('frontend')}}/beacon.min.js" data-cf-beacon='{"rayId":"750aebf188028c1d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}'></script>
  </body>
</html>