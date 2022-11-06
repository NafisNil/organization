@if (session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <p style="color: black">  {{ session('success') }}</p>
                  
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
             @endif
             @if (session('message'))
             <div class="col-sm-12">
                 <div class="alert  alert-info alert-dismissible fade show" role="alert">
                    <p style="color: black">  {{ session('message') }}</p>
                  
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>
             </div>
              @endif

              @if (session('status'))
             <div class="col-sm-12">
                 <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                    <p style="color: black">  {{ session('status') }}</p>
                
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>
             </div>
              @endif

             @if (session('error'))
             <div class="col-sm-12">
                 <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    
                     {   <p style="color: rgb(186, 12, 12)">  {{ session('error') }}</p>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>
             </div>
              @endif

             @if ($errors->any())
            <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <span><p>{{ $error }}</p></span>
                    @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
            @endif