@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Member Application Show</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Member Application Show</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Application Details</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <div class="form-group">
                    <label for="email">নং:  {{$application->form_serial}}</label>
                   
                  </div>
                  <!-- field -->
    
                <div class="form-group">
                  <label for="email"><span style="color: crimson">*</span> ১। সদস্যের নাম: <b>{{$application->name_bn}}</b></label>
               
                </div>
                <div class="form-group">
                    <label for="email"><span style="color: crimson">*</span> সদস্যের নাম (ইংরেজিতে বড় অক্ষর): <b>{{$application->name_en}}</b></label>
                 
                  </div>
                  <div class="form-group">
                    <label for="email">২। স্বামী/স্ত্রীর নাম: <b>{{@$application->spouse}}</b></label>
             
    
                    <label for="email" class="ml-5">&nbsp; পদবী: <b>{{$application->spouse_designation}}</b></label>
                    
                  </div>
    
                    <div class="form-group">
                        <label for="email"><span style="color: crimson">*</span>৩। পিতার নাম: <b>{{$application->father}}</b></label>
                 
                        <label for="email"><span style="color: crimson">*</span> &nbsp;পদবী: <b>{{$application->father_designation}}</b></label>
                 
                      </div>
    
                        <div class="form-group">
                            <label for="email"><span style="color: crimson">*</span>৪। মাতার নাম: <b>{{$application->mother}}</b></label>

    
                            <label for="email"><span style="color: crimson">*</span> &nbsp;পদবী: <b>{{$application->mother_designation}}</b></label>
                         
                          </div>
    
                            <div class="form-group">
                                <label for="email"><span style="color: crimson">*</span>৫। বর্তমান ঠিকানা: <b>{!!$application->present_address!!}</b></label>
                              
                              </div>
                              <div class="form-group">
                                <label for="email"><span style="color: crimson">*</span>৬। স্থায়ী ঠিকানা: <b>{!!$application->permanent_address!!}</b></label>
                          
                              </div>
                                <div class="form-group">
                                    <label for="email"><span style="color: crimson">*</span>৭। মোবাইল: <b>{{$application->mobile}}</b></label>
                                  
                                  </div>
                                  <div class="form-group">
                                      <label for="email">৮। ই-মেইল: <b>{{@$application->email}}</b></label>
                                   
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><span style="color: crimson">*</span>৯।  জন্ম তারিখ: <b>{{$application->birthdate}}</b></label>
                                     
                                      </div>
                                      <div class="form-group">
                                          <label for="email"> <span style="color: crimson">*</span>১০। পেশা: <b>{!!@$application->occupation!!}</b></label>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><span style="color: crimson">*</span>১১। শিক্ষাগত যোগ্যতা: <b>{!!@$application->education!!}</b></label>
                                           
                                          </div>
                                          <div class="form-group">
                                            <label for="email">১২। সমাজসেবামূলক কর্মকাণ্ডের অভিজ্ঞতা (যদি  থাকে): <b>{!!@$application->csrf!!}</b></label>
                                        
                                          </div>
                                          <div class="form-group row">
                                            <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                                            <div class="col-md-6">
                                            
                                            <img id="showImage" src="{{(!empty($application->logo))?URL::to('storage/'.$application->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                                          </div>
                                        </div>
                         
                                            
                                              <div class="form-group row">
                                                <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
                                                <div class="col-md-6">
                                                
                                                <img id="showImage2" src="{{(!empty($application->logo_signature))?URL::to('storage/'.$application->logo_signature):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
                                              </div>
                                            </div>
                      
    
                  {{--end field--}}
    <div class="form-group">
        আমি এই মর্মে অঙ্গীকার করিতেছি যে,  আমি স্বেচ্ছায়, সজ্ঞানে, নারী উদ্যোক্তা বাংলাদেশ (WEB) কর্মনির্দেশিকার প্রতি আস্থা ও আনুগত্য প্রকাশ করে একজন সদস্য হিসেবে সম্মতি জ্ঞাপন করিলাম। আমি দেশ-রাস্ট ও প্রতিষ্ঠানের বিরুদ্ধে কোন কর্মকাণ্ডে নিজেকে প্রত্যক্ষ বা পরোক্ষ ভাবে সম্পৃক্ত করবো না । সামাজিক যোগাযোগের মাধ্যমে (ফেইসবুক, হটসঅ্যাপ, টুইটার) আমি কোন প্রকার উসকানিমূলক তথ্য প্রচার থেকে বিরত থাকব। <br>
        কোন প্রকার দোষী প্রমাণিত হলে কর্তৃপক্ষ যেকোনো সময় সদস্যপদ বাতিল করতে পারিবে । 
    
        <br>
        <br>
        তারিখঃ {{$application->created_at->format('d M,Y')}}
    </div>


              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection