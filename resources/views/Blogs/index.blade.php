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

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <strong>Blogs List</strong>
                            <a href="{{route('blog.create')}} " class="btn btn-primary btn-xs float-end py-0">Create Blogs</a>

                            <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th> tags</th>
                                        <th>view count</th>
                                        <th>like count</th>
                                        <th>posted user</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <li>{{ $tag->name }}</li>
                                            @endforeach
                                        </td>
                                        <td>{{ $post->view_count }}</td>
                                        <td>{{ $post->like_count }}</td>
                                        <td>{{$post->user->name}} </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('blog.show',$post->id)}} " class="btn btn-success btn-xs py-0 mx-1">View Blogs</a>
                                                <form action=" " method="POST">
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

       <!-- end body-->
        <!-- footer-->
       @include('admin.footer')
     <!-- footer end-->
    <!-- JavaScript files-->

  </body>
</html>
