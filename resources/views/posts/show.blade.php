@extends('layouts.master')

@section('title', 'Posts')

@section('content')
<main role="main" class="container">


      <!-- This is the blog header-->
      <div class=" clo-md-12 jumbotron">

          <h1>Welcome to our Blog</h1>

      </div>



        <div class="row">

          <div class="col-md-8 blog-main">

            <h3 class="pb-3 mb-4 font-italic border-bottom">

              Show Posts Posts

            </h3>

                <!-- This the Post title-->
                <h1>{{ $post->title}}</h1>

                <!-- This is the Body of the post -->
                <p>{{ $post->body}}</p>

                <hr>

                <div class="comments">

                  <ul class="list-group">

                      @foreach ($post->comments as $comment)

                          <li class="list-group-item">

                      
                              <strong>

                                  {{ $comment->created_at->diffForHumans() }}: &nbsp

                              </strong>

                                  {{ $comment->body }}

                          </li>

                  @endforeach

                  </ul>

                </div>

                <hr>

                <div class="card">

                  <div class="card-block">

                      <form class="" action="/posts/{{ $post->id }}/comments" method="post">

                        {{ csrf_field() }}

                          <div class="form-group">

                              <textarea class="form-control" name="body" placeholder="Your Comments here" rows="8" cols="80"></textarea>

                          </div>

                          <div class="form-group">

                              <button type="submit" class="btn btn-primary">Add Comment</button>

                          </div>

                      </form>

                      @include('layouts._errors')

                  </div>

                </div>
          </div><!--End of col-md-8 -->

          @include('layouts._sidebar')
        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection
