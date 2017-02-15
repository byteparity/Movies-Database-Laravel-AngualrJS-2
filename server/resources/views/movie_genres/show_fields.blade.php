<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $movieGenres->id !!}</p>
</div>

<!-- Movie Id Field -->
<div class="form-group">
    {!! Form::label('movie_id', 'Movie Name:') !!}
    <p>{!! $movieGenres->movie->title !!}</p>
</div>

<!-- Genre Id Field -->
<div class="form-group">
    {!! Form::label('genre_id', 'Genre Type:') !!}
    <p>{!! $movieGenres->genre->genre_type !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $movieGenres->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $movieGenres->updated_at !!}</p>
</div>

