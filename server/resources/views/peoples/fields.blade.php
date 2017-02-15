<script type="text/javascript">
/*$(document).ready(function(){
    $('#born_date').datepicker({  
        format: 'yyyy-mm-dd'  
    });  
});*/     
</script>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter first name']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter last name']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <label class="radio-inline">
        {!! Form::radio('gender', "1", null) !!} Male
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', "2", null) !!} Female
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', "3", null) !!} Other
    </label>

</div>

<!-- Born Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('born_date', 'Born Date:') !!}
    {!! Form::date('born_date', null, ['class' => 'form-control', 'placeholder' => 'Enter born date']) !!}
</div>

<!-- People Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('people_image', 'People Image:') !!}
    {!! Form::file('people_image') !!}
</div>

@if(isset($peoples))
<!-- Image Field -->
<div class="form-group">
    @if($peoples->people_image!=null || $peoples->people_image!='')
    {{ Html::image($peoples->people_image, $peoples->first_name, array('class' => 'img-responsive', 'width' => '250', 'height' => '150')) }}
	@else
	{{ Html::image('/images/default.jpg', $peoples->first_name, array('class' => 'img-responsive', 'width' => '250', 'height' => '150')) }}
	@endif
</div>
@endif
<div class="clearfix"></div>

<!-- People Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('people_description', 'People Description:') !!}
    {!! Form::textarea('people_description', null, ['class' => 'form-control', 'placeholder' => 'Enter description about people     ']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('peoples.index') !!}" class="btn btn-default">Cancel</a>
</div>
