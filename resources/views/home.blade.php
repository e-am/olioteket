@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                        
                    <div class="create-post">
                      <button>Create A Post</button>

                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="logged_in-posts">
                        <h2>Posts</h2>
                        <!-- Display all the posts -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
