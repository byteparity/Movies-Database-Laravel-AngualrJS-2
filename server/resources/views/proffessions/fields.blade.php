<!-- Proffession Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proffession_type', 'Proffession Type:') !!}
    {!! Form::text('proffession_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Proffession Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proffession_description', 'Proffession Description:') !!}
    {!! Form::textarea('proffession_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('proffessions.index') !!}" class="btn btn-default">Cancel</a>
</div>
