<div id="core_navigation">
    <div class="row">
        <div class="small-12 columns">
            <ul>
                <a href="{{ action('BlogController@index') }}"><li>Blog</li></a>
                <a href="{{ action('PagesController@projects') }}" ><li>Projects</li></a>
                <li class="ribbon"><a href="{{ url('/') }}">Joe Curran Codes</a></li>
                <a href="{{ action('PagesController@about') }}" ><li>About</li></a>
                <a href="{{ action('PagesController@contact') }}" ><li>Contact</li></a>
            </ul>
        </div>
    </div>
</div>