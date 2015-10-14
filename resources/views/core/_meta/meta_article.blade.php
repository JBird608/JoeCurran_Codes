<title>{{ $article->title }} :: Joe Curran Codes</title>
<meta name="description" content="Page description. No longer than 155 characters." />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $article->title }}">
<meta itemprop="description" content="This is the page description">
<meta itemprop="image" content="http://www.example.com/image.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@joecurrancodes">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image:src" content="http://www.example.com/image.html">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $article->title }} :: Joe Curran Codes" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ Request::path() }}" />
<meta property="og:image" content="http://example.com/image.jpg" />
<meta property="og:description" content="Description Here" />
<meta property="og:site_name" content="Joe Curran Codes" />
<meta property="article:published_time" content="{{ $article->published }}" />
<meta property="article:modified_time" content="{{ $article->updated_at }}" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="Facebook numberic ID" />

<!-- TODO: Add Pintrest Meta Data -->
<!--TODO:: Add Icons Support -->