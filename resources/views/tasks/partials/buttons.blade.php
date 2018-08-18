@if(!$task->completed)
<span><a href="{{ route('task.edit', [$task]) }}" class="btn btn-primary">Edit</a></span>
@endif
<span>
    {{ Form::open(['method' => 'DELETE', 'route' => ['task.destroy', $task->id]]) }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
</span>