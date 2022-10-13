@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Gallery
@endsection

@section('content')
<div class="row">
    <main id="main" class="col-md-12">
       <div class="row">
        @foreach ($galleryall as $item)
    
          <div class="col-md-6">
             <div class="article">
                <div class="article-img">
                   <a href="">
                      <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" data-pagespeed-url-hash="3178000265" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                   </a>
                </div>
                <div class="article-content">
                   <h3 class="article-title">
                      <a href="">{{$item->title}}</a>
                   </h3>
                   <ul class="article-meta">
                      <li>{{$item->created_at->format('d M, Y')}}</li>
                    
                   </ul>
                   <p>{!!$item->Galcat->category!!}...</p>
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