@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@update',$post->id],'method'=>'PUT']) !!}
        <div class="form-group">
            {{FORM::label('title','Title')}}
            {{FORM::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{FORM::label('body','Body')}}
            {{FORM::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Post Text'])}}
        </div>
        {!! Form::submit('submit', ['class'=>'btn btn-dark btn-dg']) !!}
    {!! Form::close() !!}
@endsection