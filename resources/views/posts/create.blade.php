@extends('layouts.app')

@section('content')
<div class="col-sm-8 blog-main">
    <h2>Create A Beer Review</h2>
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

            <div class="form-group">
                {!! Form::label('beerName', 'Beer name') !!}
                {!! Form::text('beerName', null, ['class' => 'form-control']) !!}
            </div>
 
            <div class="form-group">
                {!! Form::label('brand', 'Brand') !!}
                {!! Form::text('brand', null, ['class' => 'form-control']) !!}
            </div>
 
            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                {!! Form::text('image', null, ['class' => 'form-controll']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('rating', 'Rating (1-5)') !!}
                {!! Form::number('rating', '') !!}
            </div>

            <div class="form-group">
              {!! Form::label('body', 'Body') !!}
              {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Add review']) !!}
            </div>
            {!! Form::submit('Add this Beer Review', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
    </div>
@endsection