@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{FORM::label('title','Title')}}
            {{FORM::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{FORM::label('body','Body')}}
            {{FORM::textarea('body','',['class'=>'form-control','placeholder'=>'Post Text'])}}
        </div>
        {!! Form::submit('submit', ['class'=>'btn btn-dark btn-dg']) !!}
    {!! Form::close() !!}
@endsection