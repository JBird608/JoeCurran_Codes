@if(!isset($backend))
<h4>Search</h4>
    {!! Form::open() !!}
        <!-- Search Form Input -->
        <div class="form-group">
            {!! Form::text('search', null, array('placeholder' => 'Search')) !!}
        </div>

        <!-- Search Form Input -->
        <div class="form-group">
            {!! Form::submit('Search') !!}
        </div>

    {!! Form::close() !!}
@endif