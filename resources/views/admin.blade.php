@extends('layouts.app')

@section('content')

<nav class="main-nav">
    <a href="{{ url('/posts') }}"><h3>Öl</h3></a>
</nav>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                  <!--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  -->
                    <div class="panel-heading">ADMIN Dashboard
                      <div class="panel-body">
                        <h1>Du är inloggad som Admin</h1>

                      </div>
                    </div>


                    <div class="welcome">
                        <h1>ÖLIOTEKET</h1>
                        <section class="welcome text">
                        <h2>Välkommen till Ölioteket!</br>Öl-forumet som ingen behöver<h2>
                        <section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
