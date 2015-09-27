@extends('core.standard')

@section('body')
    <h2>Articles Go Here!</h2>

    @foreach($articles as $article)
        <!-- TODO: Need to format the article listing proberly, also need to deside on the formating for the extract. -->
        <article>
            <a href=" {{ action('BlogController@show', [$article->slug]) }}">
                <h2>{{ $article->title }}</h2>
            </a>
            {{ $article->extract }}
            <p>{{ $article->published }}</p>
        </article>
    @endforeach

@stop

@section('sidebar')

@stop