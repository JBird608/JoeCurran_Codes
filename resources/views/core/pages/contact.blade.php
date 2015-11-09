@extends('core.full')

@section('body')
    <div id="core_contact">
        <div class="row">
            <div class="small-12 columns">
                <div id="core_contact_head">
                    <h1>Get in Touch</h1>

                    <p>Howdy, want to say hello? Want to ask a question? Send me a message...</p>
                </div>
            </div>
            <div class="small-12 columns form">
                @if (count($errors) > 0)
                    <div class="error"><strong>Whoops!</strong> There were some problems with your input.</div> @endif
                @if (session()->has('success'))
                    <div class="success"><strong>Thanks!</strong> Your message has been sent, you should fine a copy in
                        your own inbox.
                    </div> @endif

                {!! Form::open() !!}
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <!-- Your Name Form Input -->
                        <div class="form-group">
                            @if ($errors->has('name')) <label class="error" for="name"> @endif
                                {!! Form::text('name', null, array('placeholder' => 'Your Name (Required)')) !!}
                                @if ($errors->has('name')) </label>
                            <small class="error">{{ $errors->first('name') }}</small> @endif
                        </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <!-- Email Address Form Input -->
                        <div class="form-group">
                            @if ($errors->has('emails')) <label class="error" for=email""> @endif
                                {!! Form::text('email', null, array('placeholder' => 'Your E-Mail Address (Required)')) !!}
                                @if ($errors->has('emails')) </label>
                            <small class="error">{{ $errors->first('email') }}</small> @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <!-- Phone Number Form Input -->
                        <div class="form-group">
                            @if ($errors->has('phone')) <label class="error" for="phone"> @endif
                                {!! Form::text('phone', null, array('placeholder' => 'Phone Number')) !!}
                                @if ($errors->has('phone')) </label>
                            <small class="error">{{ $errors->first('phone') }}</small> @endif
                        </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <!-- Intrested Form Input -->
                        <div class="form-group">
                            @if ($errors->has('topic')) <label class="error" for="intrested"> @endif
                                {!! Form::text('topic', null, array('id' => 'topic', 'placeholder' => 'Twitter Username i.e @JBird608') ) !!}
                                @if ($errors->has('topic')) </label>
                            <small class="error">{{ $errors->first('topic') }}</small> @endif
                        </div>
                    </div>
                </div>

                <!-- Subject Form Input -->
                <div class="form-group">
                    @if ($errors->has('subject')) <label class="error" for="subject"> @endif
                        {!! Form::text('subject', null, array('placeholder' => 'Message Subject (Required)')) !!}
                        @if ($errors->has('subject')) </label>
                    <small class="error">{{ $errors->first('subject') }}</small> @endif
                </div>
                <!-- Message Form Input -->
                <div class="form-group">
                    @if ($errors->has('message')) <label class="error" for="message"> @endif
                        {!! Form::textarea('message', null, array('placeholder' => 'Your Message? (Required)')) !!}
                        @if ($errors->has('message')) </label>
                    <small class="error">{{ $errors->first('message') }}</small> @endif
                </div>
                <div class="form-group small">
                    {!! Form::checkbox('newsletter', 'true') !!}
                    {!! Form::label('newsletter', 'I would like to receive future correspondences such as Newsletters and promotional martial.') !!}
                </div>
                <!-- Send Message Form Input -->
                <div class="form-group">
                    {!! Form::submit('Send Message', ['class' => 'btn outline']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
@section('full-width')
    <div id="core_footer_before">
        <div class="row">
            <div class="small-12 medium-4 columns">
                <h3>Contact by Twitter</h3>

                <p>If you fancy a quick chat or have a short questions, why not sent it by Twitter?</p>

                <p>Tweet and follow me <a
                            href="http://www.twitter.com/JBird608">@JBird608</a>.</p>
            </div>
            <div class="small-12 medium-4 columns">
                <h3>Contact by Email</h3>

                <p>Want to have a detailed exchange or want to send me something? Send it by email.</p>

                <p class="bold"><a
                            href="mailto:hello@joecurran.codes?subject=Joe Curran Codes :: I have a question...&body=Hi Joe, My question is:">hello@joecurran
                        .codes</a></p>
            </div>
            <div class="small-12 medium-4 columns">
                <h3>Contact by Phone</h3>

                <p>Want to have a chat over the Phone? Give me a call or leave me a message.</p>

                <p class="bold">01253 804244</p>

                <p class="small">General Office Hours: 10 am. till 6pm.</p>
            </div>

        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function () {

            $("#topic").focus(function () {
                $("#topic").val("@");
            });
            $("#topic").blur(function () {
                var val = $("#topic").val();
                if(val == "@") {
                    $("#topic").val('');
                }
            });
        });
    </script>
@stop