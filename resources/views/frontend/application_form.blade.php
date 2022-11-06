@extends('frontend.layout.single_master')
@section('title')
    Web Foundation - Member Application
@endsection

@section('content')

<div class="row">
    <main id="main" class="col-md-12">
      <div class="article">
     
        <div class="article-content">
          <h2 class="article-title">Application Form</h2>
         
          <br>
          @php
              $serial = Carbon\Carbon::now()->format('ymd-hms');
          @endphp
          <form action="{{route('application.store')}}" method="post" enctype="multipart/form-data" class="footer-newsletter">
            @csrf
            @if (session('success'))
            <span style="color: rgb(43, 226, 49)"><p>
            {{ session('success') }}
          </p></span>
             @endif

             @if (session('error'))
             {{ session('error') }}
              @endif

              @if ($errors->any())
             
                      @foreach ($errors->all() as $error)
                          <span style="color: blueviolet"><p>{{ $error }}</p></span>
                      @endforeach
                       
              @endif

            <div class="form-group">
                <label for="email">নং:  {{$serial}}</label>
                <input type="hidden" class="form-control" id=""  name="form_serial" value="{{$serial}}">
              </div>
              <!-- field -->

            <div class="form-group">
              <label for="email"><span style="color: crimson">*</span> ১। সদস্যের নাম:</label>
              <input type="text" class="form-control" id="" placeholder="Enter name (bangla)" name="name_bn"  style="min-width: 400px">
            </div>
            <div class="form-group">
                <label for="email"><span style="color: crimson">*</span> সদস্যের নাম (ইংরেজিতে বড় অক্ষর):</label>
                <input type="text" class="form-control" id="" placeholder="Enter name (english)" name="name_en"  style="min-width: 400px">
              </div>
              <div class="form-group">
                <label for="email">২। স্বামী/স্ত্রীর নাম:</label>
                <input type="text" class="form-control" id="" placeholder="Enter name (spouse)" name="spouse"  style="min-width: 400px">

                <label for="email" class="ml-5">&nbsp; পদবী:</label>
                <input type="text" class="form-control" id="" placeholder="Enter designation (spouse)" name="spouse_designation"  style="min-width: 400px">
              </div>

                <div class="form-group">
                    <label for="email"><span style="color: crimson">*</span>৩। পিতার নাম:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter name (father)" name="father"  style="min-width: 400px">

                    <label for="email"><span style="color: crimson">*</span> &nbsp;পদবী:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter designation (father)" name="father_designation"  style="min-width: 400px">
                  </div>

                    <div class="form-group">
                        <label for="email"><span style="color: crimson">*</span>৪। মাতার নাম:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter name (mother)" name="mother"  style="min-width: 400px">

                        <label for="email"><span style="color: crimson">*</span> &nbsp;পদবী:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter designation (father)" name="mother_designation"  style="min-width: 400px">
                      </div>

                        <div class="form-group">
                            <label for="email"><span style="color: crimson">*</span>৫। বর্তমান ঠিকানা:</label>
                            <textarea name="present_address" class="form-control" id="" cols="30" rows="10" style="min-width: 400px"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="email"><span style="color: crimson">*</span>৬। স্থায়ী ঠিকানা:</label>
                            <textarea name="permanent_address" class="form-control" id="" cols="30" rows="10" style="min-width: 400px"></textarea>
                          </div>
                            <div class="form-group">
                                <label for="email"><span style="color: crimson">*</span>৭। মোবাইল:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter mobile (english)" name="mobile"  style="min-width: 400px">
                              </div>
                              <div class="form-group">
                                  <label for="email">৮। ই-মেইল:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email " name="email"  style="min-width: 400px">
                                </div>
                                <div class="form-group">
                                    <label for="email"><span style="color: crimson">*</span>৯।  জন্ম তারিখ:</label>
                                    <input type="date" class="form-control" id="email" placeholder="Enter  birthday" name="birthdate"  style="min-width: 400px">
                                  </div>
                                  <div class="form-group">
                                      <label for="email"> <span style="color: crimson">*</span>১০। পেশা:</label>
                                      <input type="text" class="form-control" id="email" placeholder="Enter occupation" name="occupation"  style="min-width: 400px">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><span style="color: crimson">*</span>১১। শিক্ষাগত যোগ্যতা:</label>
                                        <textarea name="education" class="form-control" id="" cols="30" rows="10" style="min-width: 400px"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label for="email">১২। সমাজসেবামূলক কর্মকাণ্ডের অভিজ্ঞতা (যদি  থাকে):</label>
                                        <textarea name="csrf" class="form-control" id="" cols="30" rows="10" style="min-width: 400px"></textarea>
                                      </div>
                                      <div class="form-group row">
                                        <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                        
                                        <img id="showImage" src=""  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                                      </div>
                                    </div>
                                        <div class="form-group">
                                            <label for="email">১।ছবি (300x400):</label>
                                            <input type="file" class="form-control" id="image" placeholder="Enter name (bangla)" name="logo"  style="min-width: 400px">

                                          </div>
                                        
                                          <div class="form-group row">
                                            <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                                            <div class="col-md-6">
                                            
                                            <img id="showImage2" src=""  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                                          </div>
                                        </div>
                                          <div class="form-group">
                                              <label for="email"> সাক্ষর(120x120):</label>
                                              <input type="file" class="form-control" id="image2" placeholder="Enter name (english)" name="logo_signature"  style="min-width: 400px">

                                            </div>

              {{--end field--}}
<div class="form-group">
    আমি এই মর্মে অঙ্গীকার করিতেছি যে,  আমি স্বেচ্ছায়, সজ্ঞানে, নারী উদ্যোক্তা বাংলাদেশ (WEB) কর্মনির্দেশিকার প্রতি আস্থা ও আনুগত্য প্রকাশ করে একজন সদস্য হিসেবে সম্মতি জ্ঞাপন করিলাম। আমি দেশ-রাস্ট ও প্রতিষ্ঠানের বিরুদ্ধে কোন কর্মকাণ্ডে নিজেকে প্রত্যক্ষ বা পরোক্ষ ভাবে সম্পৃক্ত করবো না । সামাজিক যোগাযোগের মাধ্যমে (ফেইসবুক, হটসঅ্যাপ, টুইটার) আমি কোন প্রকার উসকানিমূলক তথ্য প্রচার থেকে বিরত থাকব। <br>
    কোন প্রকার দোষী প্রমাণিত হলে কর্তৃপক্ষ যেকোনো সময় সদস্যপদ বাতিল করতে পারিবে । 

    <br>
    <br>
    তারিখঃ {{Carbon\Carbon::now()->format('Y-m-d');}}
</div>
            <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
          </form>
        </div>
  
      </div>
    </main>
  
  </div>
  <script>
    CKEDITOR.replace( 'present_address' );
  </script>
      <script>
        CKEDITOR.replace( 'permanent_address' );
      </script>
  <script>
    CKEDITOR.replace( 'education' );
  </script>
      <script>
        CKEDITOR.replace( 'csrf' );
      </script>
@endsection