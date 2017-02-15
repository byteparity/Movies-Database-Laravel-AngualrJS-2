{!! Form::open(['route' => ['movies.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('movies.show', $id) }}" class='btn btn-primary'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>&nbsp;
    <a href="{{ route('movies.edit', $id) }}" class='btn btn-info'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>&nbsp;
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
