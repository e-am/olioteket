@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <h3>Admin Resources</h3>
                </div>

                <div class="panel-body">
                    Confidential Information

                <div class="card">
                
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="posts-container">
                            {{ $users->all() }}
                    </div>

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection