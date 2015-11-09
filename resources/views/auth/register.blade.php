<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- // STYLESHEETS // -->
    <link rel="stylesheet" href=" {{ elixir('css/final.css') }}"/>
    <title>Login :: Joe Curran Codes</title>
    <meta name="description" content="Login to Joe Curran Codes to access Memeber Only features and services. Enjoy!"/>
    <!-- TODO:: ADD Correct Data Here -->
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@joecurrancodes">
    <meta name="twitter:creator" content="@JBird608">
    <meta name="twitter:image:src" content="http://www.example.com/image.html">

    <!-- Open Graph data -->
    <meta property="og:title" content="Login :: Joe Curran Codes"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ Request::path() }}"/>
    <meta property="og:image" content="http://example.com/image.jpg"/>
    <meta property="og:description" content="Description Here"/>
    <meta property="og:site_name" content="Joe Curran Codes"/>
    <meta property="fb:admins" content="Facebook numberic ID"/>

    <!--TODO:: Add Icons Support -->
</head>
<body id="login">
<div class="outer">
    <div class="middle">
        <div class="inner">
            <a href="{{ url('/') }}">Joe Curran Codes</a>
            <div id="login_bg">
            <h1>Register New Account</h1>

            <p>Join Today, It's nice and quick.</p>
                @if (count($errors) > 0)<div class="error"><strong>Whoops!</strong> There were some problems with your input.</div> @endif

            {!! Form::open(array('action' => 'Auth\AuthController@getRegister')) !!}

            <!-- Name Form Input -->
            <div class="form-group">
                @if ($errors->has('name')) <label class="error" for="name"> @endif
                {!! Form::text('name', null, array('placeholder' => 'Your Name')) !!}
                    @if ($errors->has('name')) </label><small class="error">{{ $errors->first('name') }}</small> @endif

            </div>

            <!-- E-Mail Form Input -->
            <div class="form-group">
                @if ($errors->has('email')) <label class="error" for="email"> @endif
                {!! Form::text('email', null, array('placeholder' => 'E-Mail Address')) !!}
                    @if ($errors->has('email')) </label><small class="error">{{ $errors->first('email') }}</small> @endif

            </div>
            <!-- Password Form Input -->
            <div class="form-group">
                @if ($errors->has('password')) <label class="error" for="password"> @endif
                {!! Form::password('password', array('placeholder' => 'Your Password')) !!}
                    @if ($errors->has('password')) </label><small class="error">{{ $errors->first('password') }}</small> @endif

            </div>
            <!-- Password Confirm Form Input -->
            <div class="form-group">
                @if ($errors->has('password_confirmation')) <label class="error" for="password_confirmation"> @endif
                {!! Form::password('password_confirmation', array('placeholder' => 'Repeat Password')) !!}
                    @if ($errors->has('password_confirmation')) </label><small class="error">{{ $errors->first('password_confirmation') }}</small> @endif

            </div>

            <!-- Submit Form Input -->
            <div class="form-group">
                {!! Form::submit('Register', ['class' => 'btn outline']) !!}
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- // JAVASCRIPT FILES GO HERE // -->
<script src="{{ asset('assets/foundation/js/vendor/modernizr.js') }}"></script>
<script src="{{ asset('assets/foundation/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/foundation/js/foundation.min.js') }}"></script>
@yield('js')
<script>
    $(document).foundation();
</script>
</body>
</html>