@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h2>Edit task:</h2>

        {!! Form::model($task, array('route' => array('task.update', $task), 'method' => 'PUT')) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Assigned category:') !!}
            {!! Form::select('category_id', $categories, $task->category_id, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Task description:') !!}
            {!! Form::textarea('body', $task->body, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('priority', 'Priority:') !!}
            {!! Form::select('priority', $task->priorityTypes, $task->priority, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('deadline', 'Task deadline:') !!}
            {!! Form::date('deadline', $task->deadline, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

        @include('layouts.error')
        {!! Form::close() !!}
    </div>
</div>


@endsection