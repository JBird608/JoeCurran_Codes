<!-- Add Document Head, Meta Data & Top Body Tag -->
@include('core._meta.doc_open')
<div id="index">
    <div id="index_background">
        <div id="core_navigation" class="navigation-clear">
            <div class="row">
                <div class="small-12 columns">
                    <ul>
                        <li><a href="{{ url('/') }}">Joe Curran Codes</a> <a href="#"><i class="fa fa-graduation-cap"></i></a></li>
                        <li><a href="{{ action('BlogController@index') }}">Blog</a></li>
                        <li><a href="{{ action('PagesController@projects') }}">Projects</a></li>
                        <li><a href="{{ action('PagesController@about') }}">About</a></li>
                        <li><a href="{{ action('PagesController@contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="index_greeting">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Wesite Designer & Developer</h1>
                    <p>Hi there, my name is Joe Curran a 21 year old website developer based in the UK.</p>
                    <div class="index_btn"><a href="{{ action('BlogController@index') }}" class="btn outline">Read my Blog</a><a href="{{ action('PagesController@projects') }}" class="btn outline">Check out my Work</a></div>
                    <div id="index_social">
                        <a href="https://twitter.com/jbird608/" title="Follow @JBird608 on Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://uk.linkedin.com/in/joecurrancodes" title="Find me on LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="https://uk.pinterest.com/jbird608/inspiration-board/" title="See you Pintrest Inspiration Board"><i class="fa fa-pinterest-p"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="index_body">
        <div class="row border-bottom">
            <div class="small-12 columns">
                <h2>Latest Posts & Thoughts</h2>
            </div>
        </div>
        <div class="row border-bottom">

            @foreach($articles as $article)
                <div class="large-4 medium-12 columns post">
                    <a href="{{ action('BlogController@show', [$article->slug]) }}">
                    <article>
                        <div class="date">
                            <div class="month">{{ $article->published->format('F') }}</div>
                            <div class="day">{{ $article->published->format('jS') }}</div>
                        </div>
                        <img src="{{ asset($article->imgsml) }}" alt="">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ $article->extract }}</p>

                    </article>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div id="index_twitter">
        <div class="row">
            <div class="small-12 columns">
                <h2>What am I talking about?</h2>
            </div>
        </div>
        <div class="row">
            <div class="medium-8 small-12 columns">
                <div class="tweet">
                    <p>{!! $tweet[0]->text !!}</p>
                    <p class="date">{{ Twitter::ago($tweet[0]->created_at) }}</p>
                </div>
                <a href="http://twitter.com/jbird608"><img src="https://pbs.twimg.com/profile_images/449334730220003328/fTCX5ycQ_400x400.jpeg" alt="" class="twitter-profile"></a>
            </div>
            <div id="tweet_me" class="medium-4 small-12 columns">
                <h4>Fancy a Chat?</h4>
                <p>Then why not send me a tweet?</p>
                <div class="index_btn"><a href="http://twitter.com/jbird608" class="btn outline">@JBird608 on Twitter</a></div>
            </div>
        </div>
    </div>
</div>
@include('core._elements._footer')
        <!-- Add Document Closing Body & JavaScript -->
@include('core._meta.doc_close')