@extends('core.standard')



@section('cover')
    <h1>Add a new Article</h1>

    @include('errors.errors')
@stop

@section('body')
    {!! Form::open(['action' => 'BlogController@store']) !!}

        <fieldset>
        <legend>Article Body</legend>

        <!-- Title Form Input -->
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}

        <!-- Slug Form Input -->
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug') !!}

        <!-- Extract Form Input -->
        {!! Form::label('extract', 'Extract:') !!}
        {!! Form::textarea('extract') !!}

        <!-- Body Form Input -->
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body') !!}

        </fieldset>
@stop

@section('sidebar')
    <div class="article_create">
        <div class="ready">
            <h3>Publish Article</h3>
            <!--  Form Input -->
                {!! Form::label('publish', 'Publish On:') !!}
                {!! Form::input('date', 'publish', date('Y-m-d')) !!}

            <!--  Form Input -->
                {!! Form::submit('Publish Article', ['class' => 'button radius']) !!}
        </div>
        <div class="outline">
                <!-- Category Dropdown Form Input -->
                {!! Form::label('category', 'Category:') !!}
                {!! Form::select('category', $catergories, null, ['placeholder' => '']) !!}
                
                <!-- Tags Form Input -->
                {!! Form::label('tags', 'Tags:') !!}
                {!! Form::text('tags') !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop