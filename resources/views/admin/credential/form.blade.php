
                @include('admin.sessionMsg')
                <div class="card-body">


                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook <span style="color:red" >*</span></label>
                 
                  <input type="url" class="form-control" name="facebook" value="{!!old('facebook',@$edit->facebook)!!}">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter </label>
                 
                  <input type="url" class="form-control" name="twitter" value="{!!old('twitter',@$edit->twitter)!!}" placeholder="">
                 
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram </label>
                  <input type="url" class="form-control" name="instagram" value="{!!old('instagram',@$edit->instagram)!!}" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Youtube </label>
                  <input type="url" class="form-control" name="youtube" value="{!!old('youtube',@$edit->youtube)!!}" placeholder="">
                </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
      