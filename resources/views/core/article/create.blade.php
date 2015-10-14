@extends('core.standard')



@section('cover')
    <h1>Add a new Article</h1>

    @include('errors.errors')
@stop

@section('body')
    {!! Form::open(array('action' => 'BlogController@store', 'files' => true)) !!}

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
@stop

@section('sidebar')
    <div class="article_create">
        <div class="ready">
            <h3>Publish Article</h3>
            <!--  Form Input -->
                {!! Form::label('publish', 'Publish On:') !!}
                {!! Form::input('date', 'publish', date('Y-m-d')) !!}

            <!--  Form Input -->
                {!! Form::submit('Publish Article', ['class' => 'button radius']) !!}
        </div>
        <div class="outline">
                <!-- Category Dropdown Form Input -->
                {!! Form::label('category', 'Category:') !!}
                {!! Form::select('category', $catergories, null, ['placeholder' => '']) !!}

                <!-- File Upload For  -->
                {!! Form::label('cover-image', 'Cover Image:') !!}
                {!! Form::file('cover-image') !!}
                <p>Image need to be size: 1000 by 300 px.</p>

                {!! Form::label('listing-image', 'Listing Image:') !!}
                {!! Form::file('listing-image') !!}
                <p>Image need to be size: 300 by 160 px.</p>
                
                <!-- Tags Form Input -->
                {!! Form::label('tags', 'Tags:') !!}
                {!! Form::text('tags') !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('js')
    <script>
        $("textarea").keydown(function(e) {
            if(e.keyCode === 9) { // tab was pressed
                // get caret position/selection
                var start = this.selectionStart;
                end = this.selectionEnd;

                var $this = $(this);

                // set textarea value to: text before caret + tab + text after caret
                $this.val($this.val().substring(0, start)
                        + "\t"
                        + $this.val().substring(end));

                // put caret at right position again
                this.selectionStart = this.selectionEnd = start + 1;

                // prevent the focus lose
                return false;
            }
        });
    </script>
@stop