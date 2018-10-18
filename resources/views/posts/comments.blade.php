{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Add review']) !!}
    </div>
    {!! Form::submit('Add this Beer Review', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}