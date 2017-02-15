<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $movieReviews->id !!}</p>
</div>

<!-- Movie Id Field -->
<div class="form-group">
    {!! Form::label('movie_id', 'Movie Name:') !!}
    <p>{!! $movieReviews->movie->title !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Name:') !!}
    <p>{!! $movieReviews->user->name !!}</p>
</div>

<!-- Rating Field -->
<div class="form-group">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{!! $movieReviews->rating !!}</p>
</div>

<!-- Rating Description Field -->
<div class="form-group">
    {!! Form::label('rating_description', 'Rating Description:') !!}
    <p>{!! $movieReviews->rating_description !!}</p>
</div>

<!-- Helpful Count Field -->
<div class="form-group">
    {!! Form::label('helpful_count', 'Helpful Count:') !!}
    <p>{!! $movieReviews->helpful_count !!}</p>
</div>

<!-- Unhelpful Count Field -->
<div class="form-group">
    {!! Form::label('unhelpful_count', 'Unhelpful Count:') !!}
    <p>{!! $movieReviews->unhelpful_count !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $movieReviews->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $movieReviews->updated_at !!}</p>
</div>

