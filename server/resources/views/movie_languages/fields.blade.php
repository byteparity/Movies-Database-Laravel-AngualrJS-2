<!-- Lang Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lang_name', 'Lang Name:') !!}
    {!! Form::text('lang_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('movieLanguages.index') !!}" class="btn btn-default">Cancel</a>
</div>
