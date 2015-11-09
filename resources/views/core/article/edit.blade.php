@extends('core.standard')

@section('cover')
    <h1>Edit {!! $article->title !!}</h1>

    @include('errors.errors')
@stop

@section('body')
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['BlogController@update', $article->slug], 'files' => true]) !!}

    @include('core.article._form.main')
@stop

@section('sidebar')
    @include('core.article._form.sidebar')
    {!! Form::close() !!}
@stop

@section('js')
    @include('core._elements._textarea')
@stop