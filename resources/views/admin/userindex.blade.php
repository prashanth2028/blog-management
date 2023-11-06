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
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <strong>User Login List</strong>
                            <a href=" {{route('user.create')}}" class="btn btn-primary btn-xs float-end py-0">Create User</a>

                            <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usermodels as $key => $usermodel )
                                    <tr>
                                        <td>{{$key+1}} </td>
                                        <td>{{$usermodel->name}} </td>
                                        <td>{{$usermodel->email}} </td>
                                        <td >*********</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('user.edit',$usermodel->id)}} " class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                                <form action=" {{route('user.delete',$usermodel->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>


                        </div>
                    </div>
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





