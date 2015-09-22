@extends('index')

@section('core_title')
    {{ $article->title }} :: Joe Curran Codes
@stop

@section('core_riser')
    <div class="row article_pre">
        <div id="cover">
            <img src="http://joecurrancodes.dev/img/cover_placeholder.png" alt=""/>
        </div>

        <div class="large-12 columns article_title">
            <h1>{{ $article->title }}</h1>
        </div>
    </div>
@stop

@section('core_content')
           <article>
               <ul class="meta">
                   <li><i class="fa fa-calendar-o"></i>{{  $published }}</li>
                   <li><a href="#" title="More Random Articles"><i class="fa fa-user"></i>{{ $author }}</a></li>
                   <li><a href="#" title="More Random Articles"><i class="fa fa-archive"></i>Random</a></li>
               </ul>

              {!! $article->body !!}
           </article>
@stop

@section('core_aside')
    <p>Hello there side bar! Your here!</p>
@stop