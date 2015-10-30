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
                {!! Form::open() !!}
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <!-- Your Name Form Input -->
                        <div class="form-group">
                            {!! Form::text('name', null, array('placeholder' => 'Your Name (Required)')) !!}
                        </div>
                        <!-- Phone Number Form Input -->
                        <div class="form-group">
                            {!! Form::text('Number', null, array('placeholder' => 'Phone Number')) !!}
                        </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <!-- Email Address Form Input -->
                        <div class="form-group">
                            {!! Form::text('email', null, array('placeholder' => 'Your E-Mail Address (Required)')) !!}
                        </div>
                        <!-- Intrested Form Input -->
                        <div class="form-group">
                            {!! Form::text('intrested', null, array('placeholder' => 'Message Topic') ) !!}
                        </div>
                    </div>
                </div>

                <!-- Subject Form Input -->
                <div class="form-group">
                    {!! Form::text('subject', null, array('placeholder' => 'Message Subject (Required)')) !!}
                </div>
                <!-- Message Form Input -->
                <div class="form-group">
                    {!! Form::textarea('body', null, array('placeholder' => 'Your Message? (Required)')) !!}
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
                <p class="bold"><a href="mailto:hello@joecurran.codes?subject=Joe Curran Codes :: I have a question...&body=Hi Joe, My question is:">hello@joecurran.codes</a></p>
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
