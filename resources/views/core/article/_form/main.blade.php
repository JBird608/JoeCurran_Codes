<fieldset>
    <legend>Article Body</legend>

    <!-- Title Form Input -->
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}

            <!-- Slug Form Input -->
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}

            <!-- Extract Form Input -->
    {!! Form::label('extract', 'Extract:') !!}
    {!! Form::textarea('extract') !!}

            <!-- Body Form Input -->
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body') !!}

</fieldset>
