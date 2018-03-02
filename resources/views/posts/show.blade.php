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
              Show Posts Posts
            </h3>

                <h1>{{ $post->title}}</h1>

                <p>{{ $post->body}}</p>
          </div><!--End of col-md-8 -->

          @include('layouts._sidebar')
        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection