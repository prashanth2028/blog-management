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
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    <p style="font-size:20px; font-weight:bold;">Blogs</p>
                    <div class="form-group">


                        <label for="name">Title</label>
                        <input type="text" class="form-control" value="{{$posts->title}} " readonly>
                    </div>

                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" value="{{$posts->description}} " readonly>
                    </div>





                    <div class="form-group">
                        <label for="tags">Tags</label>
                        {{-- @dd($posts); --}}
                        @foreach ($posts->tags as $tag)
                        <li>{{$tag->name}} </li>

                        @endforeach

                    </div>


                    <div class="form-group">
                        <label for="create">Created by</label>
                        <input type="text" class="form-control" value="{{$posts->user->name}} " readonly>
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
