
                @include('admin.sessionMsg')
                <div class="card-body">


                <div class="form-group">
                  <label for="exampleInputEmail1">Email <span style="color:red" >*</span></label>
                 
                  <input type="email" class="form-control" name="email" value="{!!old('email',@$edit->email)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Phone </label>
                 
                  <input type="text" class="form-control" name="mobile" value="{!!old('mobile',@$edit->mobile)!!}" placeholder="01XXX-XXXXXX">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Address </label>
                 
              
                 <textarea name="address"  class="form-control"  id="" cols="30" rows="10">{!!old('address',@$edit->address)!!}</textarea>
                </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
      