@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Edit category:</h2>
            {!! Form::model($category, array('route' => array('category.update', $category), 'method' => 'PATCH'))  !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('color', 'Selected color:') !!}
                {!! Form::select('color', $category->colors, null, array('class' => 'form-control')) !!}
            </div>

            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

            @include('layouts.error')
            {!! Form::close() !!}
        </div>
    </div>

@endsection