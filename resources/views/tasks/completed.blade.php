@extends('layouts.master')


@section('content')



    @foreach($categories as $category)
        @if(count($category->tasks))
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
                                            <div data-category="{{ $category->id }}" class="task-item">
                                                <div class="task-item__checkbox">
                                                    <div class="checkbox">
                                                        <label style="font-size: 2.2em">
                                                            @if ($task->completed)
                                                                <input data-id="{{ $task->id }}" class="checkboxInput" type="checkbox" value="{{ $task->completed }}" checked>
                                                            @else
                                                                <input data-id="{{ $task->id }}" class="checkboxInput" type="checkbox" value="{{ $task->completed }}">
                                                            @endif
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div data-priority="{{ $task->priority }}" class="task-item__priority task-item__priority--{{ $task->priority }}">
                                                    {{ $task->priorityTypes[$task->priority] }}
                                                </div>

                                                <div class="{{ $task->completed ? 'task-item__lineThrough': '' }}">
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
                                        </a>
                                    </div>
                                    @endforeach


                            </div>

                </div>
            </div>
            @endif
            @endforeach

            <script src="{{ asset('js/modules/changeCompletedStatus.js') }}"></script>
@endsection


