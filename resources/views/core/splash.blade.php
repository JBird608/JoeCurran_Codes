<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Joe Curran Codes</title>

    <!-- // STYLESHEETS // -->
    <link rel="stylesheet" href=" {{ elixir('css/final.css') }}"/>

    <style>
        body {
            background: -webkit-linear-gradient(135deg, #673AB7 10%, #3b217a 60%); /* Chrome 10+, Saf5.1+ */
            background: -moz-linear-gradient(135deg, #673AB7 10%, #3b217a 60%); /* FF3.6+ */
            background: -ms-linear-gradient(135deg, #673AB7 10%, #3b217a 60%); /* IE10 */
            background: -o-linear-gradient(135deg, #673AB7 10%, #3b217a 60%); /* Opera 11.10+ */
            background: linear-gradient(135deg, #673AB7 10%, #3b217a 60%); /* W3C */
            color: white;
            text-align: center;
        }
        #middle {
            position: fixed;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-wrap: avoid;
        }
        h1 {
            font-size: 2.6rem;
            margin: 0;
            color: white;
        }
        h1 .bold {
            font-family: 'CoreBlack';
        }
        p {
            margin: 0;
            font-size: 1.4rem;
        }
        .small {
            font-size: 1rem;
            margin: 1rem 0 0 0;
        }
    </style>
</head>
<body>

<div id="middle">

    <h1><span class="normal">JoeCurran</span><span class="bold">.Codes</span><span class="demo"></span></h1>
    <p>I'm currently working on this site!</p>
    <p class="small">If you're interested in what I'm up too,<span class="small-brake"> check me out on <a href="http://twitter.com/JBird608" class="hvr-buzz-out">Twitter!</a></span></p>
</div>



<!-- // JAVASCRIPT FILES GO HERE // -->
<script src="{{ asset('assets/foundation/js/vendor/modernizr.js') }}"></script>
<script src="{{ asset('assets/foundation/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/foundation/js/foundation.min.js') }}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>