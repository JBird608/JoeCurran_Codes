<!doctype html>
<html class="no-js" lang="en">
<head itemscope itemtype="http://schema.org/Article">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- // STYLESHEETS // -->
    <link rel="stylesheet" href=" {{ elixir('css/final.css') }}" />
    <!-- TODO: Add metadate output for extra stylesheets if any. -->

    <!-- // META TAGS // -->
    <title></title>
    <!-- TODO: Add Meta Check for Page or Article, then load correct meta view. -->

    @if(isset($article))
        @include('core._meta.meta_article')
    @endif

</head>
<body id="top">
