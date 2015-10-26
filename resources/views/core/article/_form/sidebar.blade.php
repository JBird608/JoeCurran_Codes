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
        <p>Image need to be size: 650 by 300 px.</p>

        <!-- Tags Form Input -->
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::text('tags') !!}
    </div>
</div>
