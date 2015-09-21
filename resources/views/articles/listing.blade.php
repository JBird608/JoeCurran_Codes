@extends('index')

@section('core_title')
    Once in a Blue Moon :: Joe Curran Codes
@stop

@section('core_content')
    <h1>My Posts</h1>

    @foreach($articles as $article)
    <article>
        <a href=" {{ action('BlogController@article', [$article->slug]) }}"><h2>{{ $article->title }}</h2></a>
        <p>
            {{ $article->extract }}

        <p>{{ $article->published }}</p>
    </article>
    @endforeach
@stop