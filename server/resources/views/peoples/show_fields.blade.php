<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $peoples->id !!}</p>
</div>

<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{!! $peoples->first_name !!}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{!! $peoples->last_name !!}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{!! $peoples->gender !!}</p>
</div>

<!-- Born Date Field -->
<div class="form-group">
    {!! Form::label('born_date', 'Born Date:') !!}
    <p>{!! $peoples->born_date !!}</p>
</div>

<!-- People Image Field -->
<div class="form-group">
    {!! Form::label('people_image', 'People Image:') !!}
    @if($peoples->people_image!=null || $peoples->people_image!='')
    {{ Html::image($peoples->people_image, $peoples->first_name, array('width' => '300', 'height' => '200')) }}
	@else
	{{ Html::image('/images/default.jpg', $peoples->first_name, array('width' => '300', 'height' => '200')) }}
	@endif
</div>

<!-- People Description Field -->
<div class="form-group">
    {!! Form::label('people_description', 'People Description:') !!}
    <p>{!! $peoples->people_description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $peoples->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $peoples->updated_at !!}</p>
</div>

