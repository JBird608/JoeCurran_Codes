@extends('index')

@section('core_title')
    {{ $article->title }} :: Joe Curran Codes
@stop

@section('core_content')
   <article>
       <h2>{{ $article->title }}</h2>
       <p>
           {{ $article->body }}
       </p>
   </article>
@stop