<!doctype html>
<html class="no-js" lang="en">
<head itemscope itemtype="http://schema.org/Article">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- // STYLESHEETS // -->
    <link rel="stylesheet" href=" {{ elixir('css/final.css') }}"/>
    <!-- TODO: Add metadate output for extra stylesheets if any. -->
    @yield('extra_stylesheets')
    <!-- // META TAGS // -->
    @if(isset($article) && !isset($page))
        @include('core._meta.meta_article')
    @else
        @include('core._meta.meta_page')
    @endif

</head>
<body id="top">
