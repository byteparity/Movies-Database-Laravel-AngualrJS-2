<!-- Genre Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genre_type', 'Genre Type:') !!}
    {!! Form::text('genre_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Genre Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('genre_description', 'Genre Description:') !!}
    {!! Form::textarea('genre_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('genres.index') !!}" class="btn btn-default">Cancel</a>
</div>
