<!-- Movie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('movie_id', 'Movie Name:') !!}
    {!! Form::select('movie_id', $moviesListing, null, ['placeholder' => 'Please select movie', 'class' => 'form-control']) !!}
</div>

<!-- Genre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genre_id', 'Genre Type:') !!}
    {!! Form::select('genre_id', $genresListing, null, ['placeholder' => 'Please select genre type', 'class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('movieGenres.index') !!}" class="btn btn-default">Cancel</a>
</div>
