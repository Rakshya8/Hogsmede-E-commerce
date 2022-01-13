<!-- A form partials which works for both edit and create view
Here old values for all firlds/validation errors and required data is also present in edit mode -->
@csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Enter name" 
                    value="{{old('name')}} @isset($product){{$product -> name}} @endisset">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror
                    
                    
                  </div>
                  <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" 
                    value="{{old('image')}} @isset($product){{$product -> image}} @endisset">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror

                   </div>
                  
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" 
                    id="price" placeholder="Price" 
                    value="{{old('price')}}  @isset($product){{$product -> price}} @endisset">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror
                </div>

                    <div class="form-group">
                    <label for="price">Category</label>
                    <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Book</option>
                    <option>CD</option>
                    <option>Game</option>
                  </select>
                  </div>

                  <div class="form-group">
                  <label for="Unique">Page/Rating/Playlength</label>
                    <input type="text" name="uniqueField" class="form-control @error('$uniqueFieldValue') is-invalid @enderror" 
                    id="unique" placeholder="Page/Rating/Playlength" 
                    value="{{old('$uniqueFieldValue')}}  @isset($product){{$uniqueFieldValue}} @endisset">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror
                  </div>


                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>