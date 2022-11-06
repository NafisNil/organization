@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Events
@endsection

@section('content')
<div class="row">
    <main id="main" class="col-md-6">
       <div class="row">
        
            <h3 class="widget-title">Contact Us</h3>
            <br>
            <div class="widget-category">
                <ul>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg> {!!$contact->address!!} 
                </ul>
                <br>
                <ul>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
                      </svg> <br><a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a>
                </ul>
                <br>
                <ul>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                        <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
                      </svg> <br>
                      <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                </ul>
             </div>
       </div>
    </main>
    <aside id="aside" class="col-md-3">
       <div class="widget">
          <h3 class="widget-title">Find Us</h3>
          <div class="widget-category">
             <ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1211144989174!2d90.41113235071629!3d23.743060084517364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9e55c31b9cf%3A0x9f4850eedc4a4a7d!2sWEB%20foundation!5e0!3m2!1sen!2sbd!4v1667664732975!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </ul>
          </div>
       </div>

    </aside>
 </div>
@endsection