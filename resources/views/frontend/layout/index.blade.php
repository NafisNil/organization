@extends('frontend.layout.master')
@section('title')
    Web Foundation - Index
@endsection

@section('content')
<div id="about" class="section" style="background: #fbedf9">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="section-title">
            <h2 class="title">{{@$message->title}}</h2>
          
          </div>
          <div class="about-content">
            <p>{!!@$message->desc!!}</p>
           
          </div>
        </div>
        <div class="col-md-offset-1 col-md-6">
          <a href="#" class="about-video">
           
            <img src="{{(!empty($message->logo))?URL::to('storage/'.$message->logo):URL::to('image/no_image.png')}}" alt="">
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
            <h3>{{$data[0]->amount}}</h3>
            <span>{{$data[0]->name}}</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-heartbeat"></i>
            <h3>{{$data[1]->amount}}</h3>
            <span>{{$data[1]->name}}</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-money"></i>
            <h3>{{$data[2]->amount}}</h3>
            <span>{{$data[2]->name}}</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="number">
            <i class="fa fa-handshake-o"></i>
            <h3>{{$data[3]->amount}}</h3>
            <span>{{$data[3]->name}}</span>
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
            <h2 class="title">Upcoming Events</h2>
            <p class="sub-title">Check our upcoming events</p>
          </div>
        </div>

        @foreach ($event as $item)
            
        <div class="col-md-4">
          <div class="causes">
            <div class="causes-img">
              <a href="{{route('event.single',$item->id)}}">
                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="">
              </a>
            </div>
            <div class="causes-progress">

              <div>
                @php
                    $tag_Arr =explode (",", $item->tag); 
                @endphp
                <span class="causes-raised">Tag: <strong>
                     @foreach ($tag_Arr as $tags)
                     <a href="{{route('event.tag',$tags)}}">#{{$tags}}</a> &nbsp 
                         
                     @endforeach
                </strong>
                </span>
              
              </div>
            </div>
            <div class="causes-content">
              <h3>
                <a href="{{route('event.single',$item->id)}}">{{$item->title}}</a>
              </h3>
              <p>{!!substr($item->body, 0,400)!!}</p>
              <a href="{{route('event.single',$item->id)}}" class="primary-button causes-donate">Details</a>
            </div>
          </div>
        </div>
        @endforeach

      
      </div>
    </div>
  </div>
  <div id="cta" class="section">
    <div class="section-bg" style="background-image:url({{asset('frontend')}}/img/xbackground-1.jpg.pagespeed.ic.UbKyHbfmqD.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="cta-content text-center">
            <h1>Become A Member</h1>
       
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
            <h2 class="title">News and Blogs</h2>
           
          </div>
        </div>
        @foreach ($news as $item)
        <div class="col-md-6">
          <div class="event">
            <div class="event-img">
              <a href="{{route('news.single',$item->id)}}">
                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="">
              </a>
            </div>
            <div class="event-content">
              <h3>
                <a href="{{route('news.single',$item->id)}}">{{$item->title}}</a>
              </h3>
              <ul class="event-meta">
                <li>
                  <i class="fa fa-clock-o"></i> {{$item->created_at->format('Y-m-d')}} | {{$item->created_at->format('h:i A')}}
                </li>
              
              </ul>
              <p>{!!substr($item->body, 0,400)!!}</p>
            </div>
          </div>
        </div>
        @endforeach



      </div>
    </div>
  </div>
  <div id="testimonial" class="section">
    <div class="section-bg" style="background-image:url({{asset('frontend')}}/img/background-2.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-owl" class="owl-carousel owl-theme">
            @foreach ($testimonial as $item)
                
          
            <div class="testimonial">
              <div class="testimonial-meta">
               
                <h3>{{$item->name}}</h3>
                <span>{{$item->designation}}</span>
              </div>
              <div class="testimonial-quote">
                <blockquote>
                  <p>{!!$item->speech!!}</p>
                </blockquote>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection