@if(isset($role) && $role==1)
{!! Form::open(['route' => ['users.destroy', $id], 'method' => 'delete']) !!}
@endif
<div class='btn-group'>
    <a href="{{ route('users.show', $id) }}" class='btn btn-primary'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('users.edit', $id) }}" class='btn btn-info'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @if(isset($role) && $role==1)
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    @endif
</div>
@if(isset($role) && $role==1)
{!! Form::close() !!}
@endif