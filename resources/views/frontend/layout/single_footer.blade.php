<footer id="footer" class="section" style="background: #f9eef8">
    <div class="container" >
      <div class="row">
        <div class="col-md-4">
          <div class="footer">
            <div class="footer-logo">
              <a class="logo" href="#">
                <img src="{{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}}" alt="" data-pagespeed-url-hash="463418924" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </a>
            </div>
          
            <ul class="footer-contact">
              <li>
                <i class="fa fa-map-marker"></i> {!!$contact->address!!}
              </li>
              <li>
                <i class="fa fa-phone"></i> <a href="tel:{{$contact->mobile}}">{{$contact->mobile}} </a>
              </li>
              <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{$contact->email}}">
                  {{$contact->email}}
                </a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="footer">
            <h3 class="footer-title">Newsletter</h3>
       
            <form class="footer-newsletter">
              <input class="input" type="email" placeholder="Enter your email">
              <button class="primary-button">Subscribe</button>
            </form>
            <ul class="footer-social">
              <li>
                <a href="{{$credential->facebook}}">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="{{$credential->twitter}}">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="{{$credential->youtube}}">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
              <li>
                <a href="{{$credential->instagram}}">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div id="footer-bottom" class="row">
        <div class="col-md-6 col-md-push-6">
          <ul class="footer-nav">
            <li>
              <a href="{{route('index')}}">Home</a>
            </li>
            <li>
              <a href="{{route('about.us')}}">About</a>
            </li>
            <li>
              <a href="{{route('news.all')}}">News</a>
            </li>
            <li>
              <a href="{{route('event.all')}}">Events</a>
            </li>
            <li>
              <a href="{{route('gallery.cat')}}">Gallery</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <div class="footer-copyright">
            <span> Copyright &copy; <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | Developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://lab-ar.com" target="_blank">Lab AR</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </footer>