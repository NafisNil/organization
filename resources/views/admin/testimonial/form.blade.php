
                @include('admin.sessionMsg')
                <div class="card-body">


                <div class="form-group">
                  <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>
                 
                  <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Designation </label>
                 
                  <input type="text" class="form-control" name="designation" value="{!!old('designation',@$edit->designation)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Speech </label>
                 
              
                 <textarea name="speech"  class="form-control"  id="" cols="30" rows="10">{!!old('speech',@$edit->speech)!!}</textarea>
                </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
      