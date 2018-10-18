@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
        <a id="create-button" href="posts/create"><input type="submit" value="Create Beer Review" class="btn btn-primary"></a>
        </div>
        
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
                            <img id="img_post"src="{{$post->img}}">
                        </div>

                       <div id="post-name">
                          <a href="{{ url('/posts') }}/{{$post->id}}"><h3>{{ $post->name }}</h3></a>
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
