@extends('core.standard')

@section('cover')
    <div class="row article_pre">
        <div id="cover">
            <img src="{{ asset('img/cover_placeholder.png') }}" alt="Random"/>
        </div>

        <div class="large-12 columns article_title">
            <h1>{{ $article->title }}</h1>
        </div>
    </div>
@stop

@section('body')
    <article>
        <ul class="meta">
            <li><i class="fa fa-calendar-o"></i>{{ Carbon\Carbon::parse($article->published)->format('d F Y') }}</li>
            <li><a href="#" title="More Random Articles"><i class="fa fa-user"></i>{{ $article->author }}</a></li>
            <li><a href="#" title="More Random Articles"><i class="fa fa-archive"></i>Random</a></li>
        </ul>

        {!! $article->body !!}

    </article>
@stop

@section('sidebar')

@stop