@extends('layouts.master')

@section('content')
    {{--TODO: Make laravel form model binging --}}
    <div class="row">
        <div class="col-md-12">
            <h2>Create category:</h2>
            <form action="{{ route('category.update', [$category]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name for category..." name="name"
                           value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <label for="color">Select color:</label>
                    <select class="form-control" name="color" id="color">
                        <option value="null" disabled selected>Choose your color...</option>

                        @foreach($colors as $key => $value )
                            <option value="{{ $key }}">{{ ucfirst($value) }}</option>
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                @include('layouts.error')
            </form>
        </div>
    </div>


@endsection