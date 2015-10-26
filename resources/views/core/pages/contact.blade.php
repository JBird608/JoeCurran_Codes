@extends('core.full')

@section('body')
    <div id="core_contact">
        <div class="row">
            <div class="small-12 medium-6 columns">
                <div id="core_contact_head" class="border-bottom">
                    <h1>Get in Touch</h1>
                    <p>Want to know more about my services or projects?</p>
                    <p class="text-uppercase">Get in contact</p>
                </div>
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
