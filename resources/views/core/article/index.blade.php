@extends('core.standard')

@section('cover')
    <div id="core_blog_cover" class="border-bottom">
        <h1>Latest Posts & Thoughts</h1>

        <p>All the latest news from the Company with great information about <span class="line"> </span>Webdesign,
            Development, SEO and Social Media.</p>
    </div>
@stop

@section('body')
    <div id="core_blog">
        @foreach($articles as $item)
            <a href=" {{ action('BlogController@show', [$item->slug]) }}">
                <article>
                    <div class="date">
                        <div class="month">{{ $item->published->format('F') }}</div>
                        <div class="day">{{ $item->published->format('jS') }}</div>
                    </div>
                    <img src="{{ $item->imgsml }}" alt="">

                    <h2>{{ $item->title }}</h2>

                    <p>{{ $item->extract }}</p>

                    <p class="posted">Posted by {{$item->author }} on the {{ $item->published->format('jS F Y') }}</p>
                </article>
            </a>
        @endforeach
        <div id="pagination">
            {!! $articles->render() !!}
        </div>
    </div>
@stop

@section('sidebar')

@stop