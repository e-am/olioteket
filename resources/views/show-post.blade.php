
<link rel="stylesheet" type="text/css" href="{{ asset('css/single-post.css') }}" >

<nav class="main-nav">
    <a href="{{ url('/posts') }}"><h3>Back</h3></a>
</nav>

                        <!--displays a single post-->
                        <div class="single-post-container">
                          <div class="single-post-desc">  
                            <div id="single-title">
                                <h3>{{$post->name}}</h3>
                            </div>

                            <div id="single-body">
                                <p id="single-body-style">{{$post->body}}</p>
                            </div>

                            <div id="single-post-date">
                            <small>Created at: {{$post->created_at}}</small>     
                          </div>
                          </div>
                          <div class="single-img-container">
                            <div id="single-img">
                                <img src="{{$post->img}}">
                            </div>
                          </div>

                           
                        </div>

                    <div class="comments">
                        @foreach ($post->comments as $comment)

                        <section class="comment-box"> 
                        <hr>
                            
                           <h3>{{ $comment->body }}</h3>
                           <small>{{$comment->created_at}}</small>

                        </section>

                        
                        @endforeach

                        <form method="POST" action="{{url('/posts')}}/{{$post->id}}/comments">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea name="body" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Comment</button>
                        </div>
                    </div>
