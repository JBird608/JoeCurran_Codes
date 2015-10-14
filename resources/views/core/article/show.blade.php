@extends('core.standard')

@section('extra_stylesheets')
    <link href=" {{ asset('assets/code/prism.css') }}" rel="stylesheet"/>
@stop

@section('cover')
    <div class="row article_head">
        <div id="cover">
            <img src="{{ asset($article->imgfull) }}" alt="Random"/>
        </div>

        <div class="large-12 columns article_title">
            <h1><i class="fa fa-arrow-right"></i> {{ $article->title }}</h1>
        </div>
    </div>
@stop

@section('body')
    <article>

        <ul class="inline-list">
            <li><i class="fa fa-calendar-o"></i>{{ Carbon\Carbon::parse($article->published)->format('d F Y') }}
            </li>
            <li><a href="#" title="More Random Articles"><i class="fa fa-user"></i>{{ $article->author }}</a></li>
            <li><a href="#" title="More Random Articles"><i class="fa fa-archive"></i>{{ $article->category }}</a>
            </li>
        </ul>

        {!! Markdown::parse($article->body) !!}

    </article>
@stop

@section('sidebar')

@stop

@section('js')
    <script src=" {{ asset('assets/code/prism.js') }}"></script>
@stop