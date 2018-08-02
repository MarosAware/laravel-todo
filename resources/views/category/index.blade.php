@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>All categories:</h1>

            @if(count($categories))
                @foreach($categories as $category)
                    <div class="row">

                        <div class="col-md-6">
                            <a href="{{ route('category.show', [$category]) }}">
                            <div class="category-item" style="border:4px solid {{ $category->colors[$category->color] }}">
                                <div class="category-item--name">
                                    {{ $category->name }}
                                </div>
                            </div>
                            </a>
                        </div>
                        <span><a href="{{ route('category.edit', [$category]) }}" class="category-item--btn btn btn-primary">Edit</a></span>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

@endsection