<script type="text/javascript">
/*$(document).ready(function(){
    $('#release_date').datepicker({  
        format: 'yyyy-mm-dd'  
    });  
});*/     
</script>


<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter movie name']) !!}
</div>

<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', 'Language :') !!}
    {!! Form::select('language_id', $languageListing, null, ['placeholder' => 'Please select Language', 'class' => 'form-control']) !!}
</div>

<!-- Running Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('running_time', 'Running Time:') !!}
    {!! Form::text('running_time', null, ['class' => 'form-control', 'placeholder' => 'Enter movie running time']) !!}
</div>

<!-- Release Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('release_date', 'Release Date:') !!}
    {!! Form::date('release_date', null, ['class' => 'form-control', 'placeholder' => 'Enter movie release date']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_file', 'Image:') !!}
    {!! Form::file('image_file') !!}
</div>

@if(isset($movies))
<!-- Image Field -->
<div class="form-group">
    @if($movies->image_file!=null || $movies->image_file!='')
    {{ Html::image($movies->image_file, $movies->title, array('class' => 'img-responsive', 'width' => '250', 'height' => '150')) }}
	@else
	{{ Html::image('/images/default.jpg', $movies->title, array('class' => 'img-responsive', 'width' => '250', 'height' => '150')) }}
	@endif
</div>
@endif

<div class="clearfix"></div>

<!-- Movie Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('movie_description', 'Movie Description:') !!}
    {!! Form::textarea('movie_description', null, ['class' => 'form-control', 'placeholder' => 'Enter movie description']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('movies.index') !!}" class="btn btn-default">Cancel</a>
</div>
