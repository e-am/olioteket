@extends('layouts.app')

@section('content')

<div class="col-sm-8 blog-main">
    <h2>Create A Beer Review</h2>
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

    {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('name', 'Beer name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
 
            <div class="form-group">
                {!! Form::label('brand', 'Brand') !!}
                {!! Form::text('brand', null, ['class' => 'form-control']) !!}
            </div>
 
            <div class="form-group">
                {!! Form::label('img', 'Image') !!}
                {!! Form::text('img', null, ['class' => 'form-controll']) !!}
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