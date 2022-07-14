@extends('layouts.app')

@section('content')
    <button onclick="history.back()" class="btn btn-dark btn-dg">Go Back</button>
    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    @if (!Auth::guest() && Auth::user()->id == $post->user_id)
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
        {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'DELETE','class'=>'float-right']) !!}
        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif
    
@endsection
