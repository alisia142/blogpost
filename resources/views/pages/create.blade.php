@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/blog" class="btn btn-dark">Go Back</a><br><br>
        <h4>Add A New Post</h4>


        {{--Add new Post--}}
        <div class="col-sm6">
            {!! Form::open(['method'=>'POST', 'action'=>'BlogController@store']) !!}
            @csrf
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null, ['class'=>'form-control', 'autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image', 'File:') !!}
                {!! Form::file('image', ['required'=>'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Add Post', ['class'=>'btn btn-dark']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection