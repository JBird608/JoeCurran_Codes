@extends('core.standard')

@section('body')
    <h2>Articles Go Here!</h2>

    @foreach($articles as $item)
        <!-- TODO: Need to format the article listing proberly, also need to deside on the formating for the extract. -->
        <article>
            <a href=" {{ action('BlogController@show', [$item->slug]) }}">
                <h2>{{ $item->title }}</h2>
            </a>
            {{ $item->extract }}
            <p>{{ $item->published }}</p>
        </article>
    @endforeach

@stop

@section('sidebar')

@stop