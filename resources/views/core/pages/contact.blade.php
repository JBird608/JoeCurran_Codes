@extends('core.full')

@section('body')
    <div id="core_contact">
        <div class="row">
            <div class="small-12 medium-6 columns">
                <h1>Get Intouch...</h1>
                <p>See something you like?</p>
                <p>Triggered a Question?</p>
                <p>Drop me a message and I'll get back to you!</p>
            </div>
            <div class="small-12 medium-6 columns form">
                <h2>Send it by E-Mail:</h2>
                {!! Form::open() !!}
                    <!-- Your Name Form Input -->
                    <div class="form-group">
                        {!! Form::label('name', 'Your Name:') !!}
                        {!! Form::text('name') !!}
                    </div>
                
                    <!-- Email Address Form Input -->
                    <div class="form-group">
                        {!! Form::label('email', 'Email Address:') !!}
                        {!! Form::text('email') !!}
                    </div>

                    <!-- Subject Form Input -->
                    <div class="form-group">
                        {!! Form::label('subject', 'Subject:') !!}
                        {!! Form::text('subject') !!}
                    </div>
                    <!-- Message Form Input -->
                    <div class="form-group">
                        {!! Form::label('body', 'Your message:') !!}
                        {!! Form::textarea('body') !!}
                    </div>
                
                    <!-- Send Message Form Input -->
                    <div class="form-group">
                        {!! Form::submit('Send Message', ['class' => 'btn outline']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
