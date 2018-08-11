@extends('layouts.master')


@section('content')



    @foreach($categories as $category)
        <div class="row">
            <div class="col-md-12">

                <div class="category-item" style="border:4px solid {{ $category->colors[$category->color] }}">
                    <div class="category-item__name">
                        {{ $category->name }}
                    </div>



                    @foreach($category->tasks as $task)
                        @if($task->completed)
                                <div class="category-item__task category-item__task--completed">
                            @else
                                <div class="category-item__task">
                            @endif
                                    <a href="{{ route('task.show', $task) }}">
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

                                            <div class="task-item__priority task-item__priority--{{ $task->priority }}">
                                                {{ $task->priorityTypes[$task->priority] }}
                                            </div>
                                            @if($task->completed)
                                                <del>
                                                    <div class="task-item__deadline">
                                                        {{ $task->deadline }}
                                                    </div>
                                                    <div class="task-item__name">
                                                        {{ $task->name }}
                                                    </div>
                                                    <div class="task-item__body">
                                                        {{ $task->body }}
                                                    </div>
                                                </del>
                                            @else
                                                <div class="task-item__deadline">
                                                    {{ $task->deadline }}
                                                </div>
                                                <div class="task-item__name">
                                                    {{ $task->name }}
                                                </div>
                                                <div class="task-item__body">
                                                    {{ $task->body }}
                                                </div>

                                            @endif
                                        </div>
                                    </a>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>

    @endforeach
@endsection
