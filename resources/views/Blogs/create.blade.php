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
                <p style="font-size:20px; font-weight:bold;">Create New Blog</p>
                <form action="{{route('blog.store')}} " id="companyform" class="was-validated" method="POST"  novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags (comma-separated)</label>
                        <input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

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

