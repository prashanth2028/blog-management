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
        <a class="text-light" href="{{route('user.index')}} ">Back to List</a>
<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Update user</p>

        <form action="{{route('user.update',$user->id)}} " class="was-validated" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group has-validation">
                <label for="name"> user Name</label>
                <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{$user->name}}" required>
                @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="email">user Email</label>
                <input type="email" name="email" id="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" value="{{$user->email}}" required>
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="password">User password</label>
                <input type="password" name="password" id="password" class="form-control " value="{{$user->password}}" required>
                {{-- @if($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif --}}
            </div>
            <div class="form-group has-validation   ">
                <label for="password_confirmation">User Confirmpassword</label>
                <input type="password" name="password" id="password" class="form-control " value="{{$user->password}}" required>
                {{-- @if($errors->has('website_link'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('website_link')}}</strong>
                    </span>
                @endif --}}
            </div>
            <button type="submit" class="btn btn-primary">Update user</button>
        </form>
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
