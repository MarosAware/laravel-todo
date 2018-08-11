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
                        <div class="category-item__task">

                            <div class="task-item" >
                                <div class="task-item__checkbox">
                                    <div class="checkbox">
                                        <label style="font-size: 2.2em">
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="task-item__name">
                                    {{ $task->name }}
                                </div>
                                <div class="task-item__body">
                                    {{ $task->body }}
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>

    @endforeach
@endsection
