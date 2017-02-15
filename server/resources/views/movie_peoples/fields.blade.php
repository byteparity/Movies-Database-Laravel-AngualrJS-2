<!-- Movie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('movie_id', 'Movie :') !!}
    {!! Form::select('movie_id', $moviesListing, null, ['placeholder' => 'Please select movie', 'class' => 'form-control']) !!}
</div>

<!-- People Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('people_id', 'People :') !!}
    {!! Form::select('people_id', $peoplesListing, null, ['placeholder' => 'Please select people', 'class' => 'form-control']) !!}
</div>

<!-- Proffession Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proffession_id', 'Proffession :') !!}
    {!! Form::select('proffession_id', $proffessionListing, null, ['placeholder' => 'Please select proffession', 'class' => 'form-control']) !!}
</div>

<!-- Name In Movie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_in_movie', 'Name In Movie:') !!}
    {!! Form::text('name_in_movie', null, ['placeholder' => 'Enter name of character in movie', 'class' => 'form-control']) !!}
</div>

<!-- Character In Movie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('character_in_movie', 'Character In Movie:') !!}
    {!! Form::text('character_in_movie', null, ['placeholder' => 'Enter character in movie', 'class' => 'form-control']) !!}
</div>

<!-- Movie People Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('movie_people_description', 'Movie People Description:') !!}
    {!! Form::textarea('movie_people_description', null, ['placeholder' => 'Enter description about people in movie', 'class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('moviePeoples.index') !!}" class="btn btn-default">Cancel</a>
</div>
