<!-- Movie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('movie_id', 'Movie Name:') !!}
    {!! Form::select('movie_id', $moviesListing, null, ['placeholder' => 'Please select movie', 'class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Name:') !!}
    {!! Form::select('user_id', $usersListing, null, ['placeholder' => 'Please select user', 'class' => 'form-control']) !!}
</div>

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::select('rating', ['0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['placeholder' => 'Please select rating', 'class' => 'form-control']) !!}
</div>

<!-- Rating Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('rating_description', 'Rating Description:') !!}
    {!! Form::textarea('rating_description', null, ['placeholder' => 'Please enter description', 'class' => 'form-control']) !!}
</div>

<!-- Helpful Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('helpful_count', 'Helpful Count:') !!}
    {!! Form::text('helpful_count', null, ['placeholder' => 'Please enter helpful count', 'class' => 'form-control']) !!}
</div>

<!-- Unhelpful Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unhelpful_count', 'Unhelpful Count:') !!}
    {!! Form::text('unhelpful_count', null, ['placeholder' => 'Please enter unhelpful count', 'class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('movieReviews.index') !!}" class="btn btn-default">Cancel</a>
</div>
