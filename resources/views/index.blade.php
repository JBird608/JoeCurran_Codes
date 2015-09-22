<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('core_title')</title>

    <!-- Core Website Styles -->
    <link rel="stylesheet" href="http://joecurrancodes.dev/css/core_eagle.css" />
    @yield('bolt_css')

</head>
<body id="top">
    <div id="core_linelink">
        <div class="row">
            <div class="large-12 columns">
                <ul>
                    <li><a href="#" alt="">Client Login</a></li>
                    <li><a href="#" alt="">Access Webmail</a></li>
                    <li><a href="#" alt="">Project Access</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="core_content">

        @yield('core_riser')

        <div class="row">
            <div class="small- 12 large-8 columns">
                @yield('core_content')
            </div>

            <div class="small-12 large-4 columns">
                @yield('core_aside')
            </div>
        </div>
    </div>

    <div id="core_follow">
        <div class="row">
            <div class="large-12 columns">
                <p>&copy; 2015 <a href="#">Joe Curran</a>. Made in the UK.</p>
                <p>Well, that's it. Why not check me out else where?</p>
                <ul class="social">
                    <li class="social-twitter"><a href="https://twitter.com/jbird608" alt="">Twitter</a></li>
                    <li class="social-pinterest"><a href="https://www.pinterest.com/jbird608/" alt="">Pinterest</a></li>
                    <li class="social-linkedin"><a href="https://uk.linkedin.com/in/joecurrancodes" alt="">LinkedIn</a></li>
                    <li class="social-behance"><a href="https://www.behance.net/JBird608" alt="">Behance</a></li>
                    <li class="social-skype"><a href="skype:JBird608?chat" alt="">Skype</a></li>
                    <li class="social-email"><a href="mailto:hello@joecurran.codes?subject=Hello, Joe!" alt="">E-Mail</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="core_end">
        <div class="row">
            <div class="large-12 columns">
                <p>// That's it, you've hit the bottom. <a href="#top" class="magic">Fast Travel Magic!</a> //</p>
            </div>
        </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>