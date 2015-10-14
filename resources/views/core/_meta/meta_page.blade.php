@if (isset($meta->title))
    <title>{{ $meta->title }} :: Joe Curran Codes</title>
@else
    <title>Joe Curran Codes</title>
@endif
<meta name="description" content="{{ $meta->description }}" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@joecurrancodes">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image:src" content="http://www.example.com/image.html">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $meta->title }} :: Joe Curran Codes" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::path() }}" />
<meta property="og:image" content="http://example.com/image.jpg" />
<meta property="og:description" content="Description Here" />
<meta property="og:site_name" content="Joe Curran Codes" />
<meta property="fb:admins" content="Facebook numberic ID" />

<!--TODO:: Add Icons Support -->