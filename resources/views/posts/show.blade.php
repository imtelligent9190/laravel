@extends('layouts.app')

@section('content')
    <button onclick="history.back()" class="btn btn-dark btn-dg">Go Back</button>
    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'DELETE','class'=>'float-right']) !!}
    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection
