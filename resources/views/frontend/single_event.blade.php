@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Event Details
@endsection

@section('content')

<div class="section">
    <div class="container">
      <div class="row">
        <main id="main" class="col-md-9">
          <div class="article">
            <div class="article-img">
              <img src="{{(!empty($eventsingle->logo))?URL::to('storage/'.$eventsingle->logo):URL::to('image/no_image.png')}}" alt="" data-pagespeed-url-hash="958483839" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </div>
            <div class="article-content">
              <h2 class="article-title">{{$eventsingle->title}}</h2>
              <ul class="article-meta">
                <li>{{$eventsingle->created_at->format('d M, Y')}}</li>
             
              </ul>
              <p>{!!$eventsingle->body!!}</p>
            </div>
            <div class="article-tags-share">
              <ul class="tags">
                <li>TAGS:</li>

                @foreach ($tag as $item)
               
                @php
                    $tag_Arr =explode (",", $item->tag); 
                 
                @endphp
                <li>
                    @foreach ($tag_Arr as $datas)
                    <a href="{{route('event.tag',$datas)}}">{{$datas}}
                    </a>
                    @endforeach
                
                </li>
        
                @endforeach
           
              </ul>

            </div>

          </div>
        </main>
        <aside id="aside" class="col-md-3">
          
          <div class="widget">
            <h3 class="widget-title">Latest Events</h3>
            @foreach ($event as $item)
        
            <div class="widget-post">
              <a href="{{route('event.single',$item->id)}}">
                <div class="widget-img">
                  <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" data-pagespeed-url-hash="3307554513" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="widget-content"> {{$item->title}} </div>
              </a>
              <ul class="article-meta">
           
                <li>{{$item->created_at->format('d M, Y')}}</li>
              </ul>
            </div>
         
            @endforeach
          </div>
       
        </aside>
      </div>
    </div>
  </div>
@endsection