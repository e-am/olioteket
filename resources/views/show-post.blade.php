
<link rel="stylesheet" type="text/css" href="{{ asset('css/single-post.css') }}" >

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
                                <h4>Brand: </h4><h3>{{$post->brand}}</h3>
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

    
