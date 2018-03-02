@extends('layouts.master')

@section('title', 'Posts')

@section('content')
<main role="main" class="container">

      <div class=" clo-md-12 jumbotron">
          <h1>Welcome to our Blog</h1>
      </div>



        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
              Create Posts
            </h3>

            <!-- Create form to go here-->
            <div>
                <form method="POST" action="/posts">
                  {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title:</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                      <label for="body">Body:</label>
                      <textarea id="body" name="body" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Publish</button>
                  </form>
            </div>
            <!--End of create form-->

          </div><!--End of col-md-8 -->

          @include('layouts._sidebar')
        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection