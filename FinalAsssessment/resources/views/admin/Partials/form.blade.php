<!-- A form partials which works for both edit and create view
Here old values for all firlds/validation errors and required data is also present in edit mode -->
@csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Enter name" 
                    value="{{old('name')}} @isset($user){{$user -> name}} @endisset">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror
                    
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" 
                    value="{{old('email')}} @isset($user){{$user -> email}} @endisset">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror

                   
                  </div>
                  @isset($create)
                  <!-- Only show password in create mode not edit-->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                    id="exampleInputPassword1" placeholder="Password" 
                    value="{{old('password')}}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      {{$message}}
                    </span>
                    @enderror
                    
                  </div>
                  @endisset
                  <div class="form-group">
                  <label>Role</label>
                  @foreach($roles as $role)
                  <div class="form-check">
                      <input class="form-check-input" name="roles[]"
                      type="checkbox" value="{{$role->id}}" id="{{$role->name}}"
                      @isset($user)
                      @if(in_array($role->id, $user->roles->pluck('id')->toArray()))
                      checked
                      @endif
                      @endisset>
                      <label class="form-check-label" for="{{$role->name}}">
                          {{$role->name}}
                      </label>

                  </div>
                  @endforeach

                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>