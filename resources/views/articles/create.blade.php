@extends('full')

@section('core_title')
    Create New Article :: Joe Curran Codes
@stop

@section('core_riser')
    <div class="row article_pre">
        <h1>Create a new Article</h1>
    </div>
@stop

@section('core_content')
    {!! Form::open() !!}
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}
    
    <!-- Submit Article Form Input -->

        {!! Form::submit('Submit Article') !!}


    {!! Form::close() !!}
@stop

@section('core_aside')
    <p>Hello there side bar! Your here!</p>
@stop

<!--// Field Name, Default, Class ['class' => 'class names']-->