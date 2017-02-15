
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $moviePeoples->id !!}</p>
</div>

<!-- Movie Id Field -->
<div class="form-group">
    {!! Form::label('movie_id', 'Movie Name:') !!}
    <p>{!! $moviePeoples->movie->title !!}</p>
</div>

<!-- People Id Field -->
<div class="form-group">
    {!! Form::label('people_id', 'People Name:') !!}
    <p>{!! $moviePeoples->people->full_name !!}</p>
</div>

<!-- Proffession Id Field -->
<div class="form-group">
    {!! Form::label('proffession_id', 'Proffession Name:') !!}
    <p>{!! $moviePeoples->proffession->proffession_type !!}</p>
</div>

<!-- Name In Movie Field -->
<div class="form-group">
    {!! Form::label('name_in_movie', 'Name In Movie:') !!}
    <p>{!! $moviePeoples->name_in_movie !!}</p>
</div>

<!-- Character In Movie Field -->
<div class="form-group">
    {!! Form::label('character_in_movie', 'Character In Movie:') !!}
    <p>{!! $moviePeoples->character_in_movie !!}</p>
</div>

<!-- Movie People Description Field -->
<div class="form-group">
    {!! Form::label('movie_people_description', 'Movie People Description:') !!}
    <p>{!! $moviePeoples->movie_people_description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $moviePeoples->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $moviePeoples->updated_at !!}</p>
</div>

