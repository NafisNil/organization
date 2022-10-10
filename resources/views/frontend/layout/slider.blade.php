<div id="home-owl" class="owl-carousel owl-theme">
  @foreach ($slider as $item)
      

    <div class="home-item">
      <div class="section-bg" style="background-image:url(storage/{{$item->logo}})"></div>
      <div class="home">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="home-content">
                <h1>{{$item->title}}</h1>
                <p class="lead">{{$item->subtitle}}</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </div>