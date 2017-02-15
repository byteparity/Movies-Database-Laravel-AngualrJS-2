<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $proffessions->id !!}</p>
</div>

<!-- Proffession Type Field -->
<div class="form-group">
    {!! Form::label('proffession_type', 'Proffession Type:') !!}
    <p>{!! $proffessions->proffession_type !!}</p>
</div>

<!-- Proffession Description Field -->
<div class="form-group">
    {!! Form::label('proffession_description', 'Proffession Description:') !!}
    <p>{!! $proffessions->proffession_description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $proffessions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $proffessions->updated_at !!}</p>
</div>

