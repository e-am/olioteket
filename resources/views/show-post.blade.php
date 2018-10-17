@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/single-post.css') }}" >
@section('content')

<nav class="main-nav">
    <a href="{{ url('/home') }}"><h3>Hem</h3></a>
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

                
@endsection
