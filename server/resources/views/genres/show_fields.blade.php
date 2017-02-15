<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $genres->id !!}</p>
</div>

<!-- Genre Type Field -->
<div class="form-group">
    {!! Form::label('genre_type', 'Genre Type:') !!}
    <p>{!! $genres->genre_type !!}</p>
</div>

<!-- Genre Description Field -->
<div class="form-group">
    {!! Form::label('genre_description', 'Genre Description:') !!}
    <p>{!! $genres->genre_description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $genres->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $genres->updated_at !!}</p>
</div>

