@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Create category:</h2>
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" id="name" placeholder="Enter name for category..." name="name">
                </div>

                <div class="form-group">
                    <label for="color">Select color:</label>
                    <select class="form-control" name="color" id="color">
                        @if (!old('color'))
                            <option value="null" disabled selected>Choose your color...</option>
                        @endif

                            @foreach($colors as $key => $value )
                                @if(old('color') && old('color') == $key)
                                    <option value="{{ $key }}" selected>{{ ucfirst($value) }}</option>
                                @else
                                    <option value="{{ $key }}">{{ ucfirst($value) }}</option>
                                @endif
                            @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                @include('layouts.error')
            </form>
        </div>
    </div>


@endsection