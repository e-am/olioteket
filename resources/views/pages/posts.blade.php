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

                    <small>posts will go here.. WIP!</small>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
