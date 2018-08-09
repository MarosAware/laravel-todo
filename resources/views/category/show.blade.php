@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Category details:</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="category-item" style="border:4px solid {{ $category->colors[$category->color] }}">
                        <div class="category-item--name">
                            {{ $category->name }}
                        </div>
                    </div>
                </div>
                @include('category.partials.buttons')
            </div>
        </div>
    </div>

@endsection