@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Gallery
@endsection

@section('content')
<div class="row">
    <main id="main" class="col-md-12">
       <div class="row">
        @foreach ($gallerycat as $item)
    
          <div class="col-md-6">
             <div class="article">
                <div class="article-img">
                   <a href="{{route('gallery.all',$item->id)}}">
                      <img src="{{asset('frontend')}}/img/gallery.png" alt="" data-pagespeed-url-hash="3178000265" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="max-height: 300px;max-width:350px">
                   </a>
                </div>
                <div class="article-content">
                   <h3 class="article-title">
                      <a href="{{route('gallery.all',$item->id)}}">{{$item->name}}</a>
                   </h3>
                   <ul class="article-meta">
                      <li>{{$item->created_at->format('d M, Y')}}</li>
                    
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