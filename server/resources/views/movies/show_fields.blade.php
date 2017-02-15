<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $movies->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $movies->title !!}</p>
</div>

<!-- Language Field -->
<div class="form-group">
    {!! Form::label('language', 'Language:') !!}
    <p>{!! $movies->language->lang_name !!}</p>
</div>

<!-- Running Time Field -->
<div class="form-group">
    {!! Form::label('running_time', 'Running Time:') !!}
    <p>{!! $movies->running_time !!}</p>
</div>

<!-- Release Date Field -->
<div class="form-group">
    {!! Form::label('release_date', 'Release Date:') !!}
    <p>{!! $movies->release_date !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
	@if($movies->image_file!=null || $movies->image_file!='')
    {{ Html::image($movies->image_file, $movies->title, array('width' => '300', 'height' => '200')) }}
	@else
	{{ Html::image('/images/default.jpg', $movies->title, array('width' => '300', 'height' => '200')) }}
	@endif
</div>

<!-- Movie Description Field -->
<div class="form-group">
    {!! Form::label('movie_description', 'Movie Description:') !!}
    <p>{!! $movies->movie_description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $movies->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $movies->updated_at !!}</p>
</div>

