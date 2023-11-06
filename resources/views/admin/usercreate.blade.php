<!DOCTYPE html>
<html>
  <head>
   @include('admin.adminstyle')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.navbar')
      <!-- Sidebar Navigation end-->
       <!-- body-->
       <div class="page-content">
       <div class="container">
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Create New User</p>
                <form action=" {{route('user.store')}}" id="companyform" class="was-validated" method="POST"  novalidate>
                    @csrf
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" required value="{{old('name')}}">
                        @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control  {{$errors->has('email')?'is-invalid':''}}" required value="{{old('email')}}">
                        @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="password" class="form-control  " required value="{{old('password')}}">
                        @if($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control  {{$errors->has('password_confirmation')?'is-invalid':''}}" required value="{{old('confirmpassword')}}">
                        @if($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('password_confirmation')}}</strong>
                        </span>
                    @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Create User</button>
                    {{-- <a href="{{route('company.index')}}" class="btn btn-primary">GO Back</a> --}}

                </form>
            </div>
        </div>
    </div>
       </div>
          <!-- end body-->
        <!-- footer-->
       @include('admin.footer')
     <!-- footer end-->
    <!-- JavaScript files-->

  </body>
</html>

