@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Team Member
@endsection

@section('content')
<div class="row">
    <main id="main" class="col-md-12">
       <div class="row">
        @foreach ($team as $item)
    
          <div class="col-md-4">
             <div class="article">
                <div class="article-img">
                   <a href="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}">
                      <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" data-pagespeed-url-hash="3178000265" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                   </a>
                </div>
                <div class="article-content">
                   <h3 class="article-title">
                      <a href="">{{$item->name}}</a>
                   </h3>
                   <ul class="article-meta">
                      <li>{!!$item->designation!!}</li>
                    
                   </ul>
                
                </div>
             </div>
          </div>
        
          @endforeach
          <div class="col-md-12">
             <ul class="article-pagination">
          
             </ul>
          </div>
       </div>
    </main>

 </div>
@endsection