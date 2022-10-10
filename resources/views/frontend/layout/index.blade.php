@extends('frontend.layout.master')
@section('title')
    Web Foundation - Index
@endsection

@section('content')
<div id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="section-title">
            <h2 class="title">Welcome to Charity</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="primary-button">Read More</a>
          </div>
        </div>
        <div class="col-md-offset-1 col-md-6">
          <a href="#" class="about-video">
            <i class="play-icon fa fa-play"></i>
            <img src="{{asset('frontend')}}/img/xabout.jpg.pagespeed.ic.WbARw_8d5G.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="numbers" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-smile-o"></i>
            <h3>47k</h3>
            <span>Donors</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-heartbeat"></i>
            <h3>154K</h3>
            <span>Children Saved</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-money"></i>
            <h3>785K</h3>
            <span>Donated</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-handshake-o"></i>
            <h3>357</h3>
            <span>Volunteers</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="causes" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="section-title text-center">
            <h2 class="title">Our Causes</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{asset('frontend')}}/single-cause.html">
                <img src="{{asset('frontend')}}/img/xpost-1.jpg.pagespeed.ic.vrRgc_3PjI.jpg" alt="">
              </a>
            </div>
            <div class="causes-progress">
              <div class="causes-progress-bar">
                <div style="width: 87%;">
                  <span>87%</span>
                </div>
              </div>
              <div>
                <span class="causes-raised">Raised: <strong>52.000$</strong>
                </span>
                <span class="causes-goal">Goal: <strong>90.000$</strong>
                </span>
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{asset('frontend')}}/single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="{{asset('frontend')}}/single-cause.html" class="primary-button causes-donate">Donate Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{asset('frontend')}}/single-cause.html">
                <img src="{{asset('frontend')}}/img/xpost-2.jpg.pagespeed.ic.xh7_NMuawU.jpg" alt="">
              </a>
            </div>
            <div class="causes-progress">
              <div class="causes-progress-bar">
                <div style="width: 53%;">
                  <span>53%</span>
                </div>
              </div>
              <div>
                <span class="causes-raised">Raised: <strong>52.000$</strong>
                </span>
                <span class="causes-goal">Goal: <strong>90.000$</strong>
                </span>
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{asset('frontend')}}/single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="{{asset('frontend')}}/single-cause.html" class="primary-button causes-donate">Donate Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{asset('frontend')}}/single-cause.html">
                <img src="{{asset('frontend')}}/img/xpost-3.jpg.pagespeed.ic.THm-cPziJC.jpg" alt="">
              </a>
            </div>
            <div class="causes-progress">
              <div class="causes-progress-bar">
                <div style="width: 72%;">
                  <span>72%</span>
                </div>
              </div>
              <div>
                <span class="causes-raised">Raised: <strong>52.000$</strong>
                </span>
                <span class="causes-goal">Goal: <strong>90.000$</strong>
                </span>
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{asset('frontend')}}/single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="{{asset('frontend')}}/single-cause.html" class="primary-button causes-donate">Donate Now</a>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md visible-lg"></div>
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{asset('frontend')}}/single-cause.html">
                <img src="{{asset('frontend')}}/img/xpost-4.jpg.pagespeed.ic.GCjGREkb1-.jpg" alt="">
              </a>
            </div>
            <div class="causes-progress">
              <div class="causes-progress-bar">
                <div style="width: 64%;">
                  <span>64%</span>
                </div>
              </div>
              <div>
                <span class="causes-raised">Raised: <strong>52.000$</strong>
                </span>
                <span class="causes-goal">Goal: <strong>90.000$</strong>
                </span>
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{asset('frontend')}}/single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="{{asset('frontend')}}/single-cause.html" class="primary-button causes-donate">Donate Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{asset('frontend')}}/single-cause.html">
                <img src="{{asset('frontend')}}/img/xpost-5.jpg.pagespeed.ic.qvDU9cRyRX.jpg" alt="">
              </a>
            </div>
            <div class="causes-progress">
              <div class="causes-progress-bar">
                <div style="width: 72%;">
                  <span>72%</span>
                </div>
              </div>
              <div>
                <span class="causes-raised">Raised: <strong>52.000$</strong>
                </span>
                <span class="causes-goal">Goal: <strong>90.000$</strong>
                </span>
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{asset('frontend')}}/single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="{{asset('frontend')}}/single-cause.html" class="primary-button causes-donate">Donate Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{asset('frontend')}}/single-cause.html">
                <img src="{{asset('frontend')}}/img/xpost-6.jpg.pagespeed.ic.EY1W5yetOp.jpg" alt="">
              </a>
            </div>
            <div class="causes-progress">
              <div class="causes-progress-bar">
                <div style="width: 53%;">
                  <span>53%</span>
                </div>
              </div>
              <div>
                <span class="causes-raised">Raised: <strong>52.000$</strong>
                </span>
                <span class="causes-goal">Goal: <strong>90.000$</strong>
                </span>
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{asset('frontend')}}/single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="{{asset('frontend')}}/single-cause.html" class="primary-button causes-donate">Donate Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="cta" class="section">
    <div class="section-bg" style="background-image:url({{asset('frontend')}}/img/xbackground-1.jpg.pagespeed.ic.UbKyHbfmqD.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="cta-content text-center">
            <h1>Become A Volunteer</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="primary-button">Join Us Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="events" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="section-title text-center">
            <h2 class="title">Upcoming Events</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="event">
            <div class="event-img">
              <a href="{{asset('frontend')}}/single-event.html">
                <img src="{{asset('frontend')}}/img/xevent-1.jpg.pagespeed.ic.BUcs9mivQy.jpg" alt="">
              </a>
            </div>
            <div class="event-content">
              <h3>
                <a href="{{asset('frontend')}}/single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <ul class="event-meta">
                <li>
                  <i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM
                </li>
                <li>
                  <i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road
                </li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="event">
            <div class="event-img">
              <a href="{{asset('frontend')}}/single-event.html">
                <img src="{{asset('frontend')}}/img/xevent-2.jpg.pagespeed.ic.fO5U31Q42e.jpg" alt="">
              </a>
            </div>
            <div class="event-content">
              <h3>
                <a href="{{asset('frontend')}}/single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a>
              </h3>
              <ul class="event-meta">
                <li>
                  <i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM
                </li>
                <li>
                  <i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road
                </li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md visible-lg"></div>
        <div class="col-md-6">
          <div class="event">
            <div class="event-img">
              <a href="{{asset('frontend')}}/single-event.html">
                <img src="{{asset('frontend')}}/img/xevent-3.jpg.pagespeed.ic.kdOKZGl_DX.jpg" alt="">
              </a>
            </div>
            <div class="event-content">
              <h3>
                <a href="{{asset('frontend')}}/single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <ul class="event-meta">
                <li>
                  <i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM
                </li>
                <li>
                  <i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road
                </li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="event">
            <div class="event-img">
              <a href="{{asset('frontend')}}/single-event.html">
                <img src="{{asset('frontend')}}/img/xevent-4.jpg.pagespeed.ic.5T-WpGrW1J.jpg" alt="">
              </a>
            </div>
            <div class="event-content">
              <h3>
                <a href="{{asset('frontend')}}/single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a>
              </h3>
              <ul class="event-meta">
                <li>
                  <i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM
                </li>
                <li>
                  <i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road
                </li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="testimonial" class="section">
    <div class="section-bg" style="background-image:url({{asset('frontend')}}/img/background-2.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-owl" class="owl-carousel owl-theme">
            <div class="testimonial">
              <div class="testimonial-meta">
                <div class="testimonial-img">
                  <img src="{{asset('frontend')}}/img/xavatar-1.jpg.pagespeed.ic.RkR3XY-knB.jpg" alt="">
                </div>
                <h3>John Doe</h3>
                <span>Volunteer</span>
              </div>
              <div class="testimonial-quote">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </blockquote>
              </div>
            </div>
            <div class="testimonial">
              <div class="testimonial-meta">
                <div class="testimonial-img">
                  <img src="{{asset('frontend')}}/img/xavatar-2.jpg.pagespeed.ic.lZk0jiPD8Z.jpg" alt="">
                </div>
                <h3>John Doe</h3>
                <span>Volunteer</span>
              </div>
              <div class="testimonial-quote">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </blockquote>
              </div>
            </div>
            <div class="testimonial">
              <div class="testimonial-meta">
                <div class="testimonial-img">
                  <img src="{{asset('frontend')}}/img/xavatar-1.jpg.pagespeed.ic.RkR3XY-knB.jpg" alt="">
                </div>
                <h3>John Doe</h3>
                <span>Volunteer</span>
              </div>
              <div class="testimonial-quote">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </blockquote>
              </div>
            </div>
            <div class="testimonial">
              <div class="testimonial-meta">
                <div class="testimonial-img">
                  <img src="{{asset('frontend')}}/img/xavatar-2.jpg.pagespeed.ic.lZk0jiPD8Z.jpg" alt="">
                </div>
                <h3>John Doe</h3>
                <span>Volunteer</span>
              </div>
              <div class="testimonial-quote">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="blog" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="section-title text-center">
            <h2 class="title">Our Blog</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article">
            <div class="article-img">
              <a href="{{asset('frontend')}}/single-blog.html">
                <img src="{{asset('frontend')}}/img/xpost-1.jpg.pagespeed.ic.vrRgc_3PjI.jpg" alt="">
              </a>
            </div>
            <div class="article-content">
              <h3 class="article-title">
                <a href="{{asset('frontend')}}/single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <ul class="article-meta">
                <li>12 November 2018</li>
                <li>By John doe</li>
                <li>0 Comments</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article">
            <div class="article-img">
              <a href="{{asset('frontend')}}/single-blog.html">
                <img src="{{asset('frontend')}}/img/xpost-2.jpg.pagespeed.ic.xh7_NMuawU.jpg" alt="">
              </a>
            </div>
            <div class="article-content">
              <h3 class="article-title">
                <a href="{{asset('frontend')}}/single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a>
              </h3>
              <ul class="article-meta">
                <li>12 November 2018</li>
                <li>By John doe</li>
                <li>0 Comments</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article">
            <div class="article-img">
              <a href="{{asset('frontend')}}/single-blog.html">
                <img src="{{asset('frontend')}}/img/xpost-3.jpg.pagespeed.ic.THm-cPziJC.jpg" alt="">
              </a>
            </div>
            <div class="article-content">
              <h3 class="article-title">
                <a href="{{asset('frontend')}}/single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a>
              </h3>
              <ul class="article-meta">
                <li>12 November 2018</li>
                <li>By John doe</li>
                <li>0 Comments</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection