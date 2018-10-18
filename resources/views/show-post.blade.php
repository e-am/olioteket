

<link rel="stylesheet" type="text/css" href="{{ asset('css/single-post.css') }}" >

<<<<<<< HEAD
    <nav class="main-nav">
        <a href="{{ url('/posts') }}"><h3>Back</h3></a>
    </nav>

        <!--displays a single post-->
        <div class="single-post-container">
        <div class="single-img-container">
            <div id="single-img">
                <img src="{{$post->img}}">
            </div>
            </div>
            <div class="single-post-desc">  
            <div id="single-title">
                <h2>{{$post->name}}</h2>
            </div>
            <div id="single-brand">
                <h3>{{$post->brand}}</h3>
            </div>
            <div id="single-body">
                <p id="single-body-style">{{$post->body}}</p>
            </div>

            <div id="single-post-date">
            <small>Created at: {{$post->created_at}}</small>     
            </div>
            <div id="single-post-date">
            <strong>Created by: </strong><a id="user_show"  href="/posts/{user_id}">{{$post->user_id}}</a>  
            </div>
            </div>
            

            
        </div>
            @if(Auth::check())
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
            @endif
=======
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
                        <h3>Comments</h3>

                            @if (Auth::check())
                           

                {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
                        <div class="add-comment">
                        <p>{{ Form::textarea('body', old('body')) }}</p>
                            {{ Form::hidden('post_id', $post->id) }}
                        <p>{{ Form::submit('Send') }}</p>
                            {{ Form::close() }}
                            @endif
                        </div>
                            <div class="comment-box">
                            @forelse ($post->comments as $comment)
                        <p>{{ $comment->user->name }} {{$comment->created_at}}</p>
                        <p>{{ $comment->body }}</p>
                        <hr>
                        
                        @empty
                         <p>This post has no comments</p>
                        @endforelse

                        </div>
</div>
>>>>>>> 59646c3772780a8271f004e36a2a2a9eed7e7e64
