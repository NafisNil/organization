@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Events
@endsection

@section('content')
<div class="row">
    <main id="main" class="col-md-9">
       <div class="row">
        @foreach ($event as $item)
    
          <div class="col-md-6">
             <div class="article">
                <div class="article-img">
                   <a href="{{route('event.single',$item->id)}}">
                      <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" data-pagespeed-url-hash="3178000265" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                   </a>
                </div>
                <div class="article-content">
                   <h3 class="article-title">
                      <a href="{{route('event.single',$item->id)}}">{{$item->title}}</a>
                   </h3>
                   <ul class="article-meta">
                      <li>{{$item->created_at->format('d M, Y')}}</li>
                    
                   </ul>
                   <p>{!!substr($item->body, 0 ,400)!!}...</p>
                </div>
             </div>
          </div>
        
          @endforeach
          <div class="col-md-12">
             <ul class="article-pagination">
              {{$event->links()}}
             </ul>
          </div>
       </div>
    </main>
    <aside id="aside" class="col-md-3">
       <div class="widget">
          <h3 class="widget-title">Tags</h3>
          <div class="widget-category">
             <ul>


                @foreach ($tag as $item)
               
                @php
                    $tag_Arr =explode (",", $item->tag); 
                 
                @endphp
                <li>
                    @foreach ($tag_Arr as $datas)
                    <a href="{{route('event.tag',$datas)}}">#{{$datas}}
                    </a>
                    @endforeach
                
                </li>
        
                @endforeach
             </ul>
          </div>
       </div>

    </aside>
 </div>
@endsection