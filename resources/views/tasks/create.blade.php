@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Create task:</h2>
            <form action="{{ route('task.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Task name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name for task..." name="name">
                </div>

                <div class="form-group">
                    <label for="category">Assigned category:</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)

                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Task description:</label>
                    <textarea class="form-control" name="body" id="description" cols="30" rows="10" placeholder="Task description..."></textarea>
                </div>

                <div class="form-group">
                    <label for="priority">Priority:</label>
                    <select class="form-control" name="priority" id="priority">
                        @foreach($priorityTypes as $key => $priorityType)
                            <option value="{{ $key }}">{{ $priorityType }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Task deadline:</label>
                    <input class="form-control" type="date"
                           value="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                           min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                @include('layouts.error')
            </form>
        </div>
    </div>


@endsection