

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