@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <p>{{ $categoryName }}</p>
            <div class="task-item">
                <div class="task-item__checkbox">
                    <div class="checkbox">
                        <label style="font-size: 2.2em">
                            @if ($task->completed)
                                <input type="checkbox" value="{{ $task->completed }}" checked>
                            @else
                                <input type="checkbox" value="{{ $task->completed }}">
                            @endif
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>

                <div class="task-item__btn">
                    @include('tasks.partials.buttons')
                </div>

                <div class="task-item__priority task-item__priority--{{ $task->priority }}">
                    {{ $task->priorityTypes[$task->priority] }}
                </div>

                <div class="task-item__deadline">
                    {{ $task->deadline }}
                </div>
                <div class="task-item__name">
                    {{ $task->name }}
                </div>
                <div class="task-item__body">
                    {{ $task->body }}
                </div>
            </div>

        </div>
    </div>

@endsection