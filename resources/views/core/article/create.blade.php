@extends('core.standard')
@section('cover')
    <h1>Add a new Article</h1>

    @include('errors.errors')
@stop

@section('body')
    {!! Form::open(array('action' => 'BlogController@store', 'files' => true)) !!}
    @include('core.article._form.main')
@stop

@section('sidebar')
    @include('core.article._form.sidebar')
    {!! Form::close() !!}
@stop

@section('js')
    @include('core._elements._textarea')
@stop