@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - About Us
@endsection

@section('content')
<div class="row">
  <main id="main" class="col-md-12">
    <div class="article">
      <div class="article-img">
        <img src="{{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}" alt="" >
      </div>
      <div class="article-content">
        <h2 class="article-title">About Web Foundation</h2>
       
        <p>{!! $about->desc !!}</p>
      </div>

    </div>
  </main>

</div>
@endsection