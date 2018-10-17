@extends('layouts.app')

@section('content')

<nav class="main-nav">
    <a href="{{ url('/home') }}"><h3>Hem</h3></a>
</nav>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="posts-container">
                       @foreach($posts as $post)
                       
                       <div id="post-img">
                            <img src="{{$post->img}}">
                        </div>  

                       <div id="post-name">
                          <h3>{{ $post->name }}</h3>
                        </div>

                    <div id="post-body">
                          <small>{{ $post->body }}</small>
                        </div>

                    <div id="post-date">
                          <small>{{ $post->created_at }}</small>
                        </div>
                      
                        </hr>
                       @endforeach
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
