@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$key}}</h1>
        <p>I hope it works</p>
        <p><a class="btn btn-dark btn-dg" href="/login" role="button"> Login </a> <a class="btn btn-secondary btn-dg" href="/register" role="button"> Register </a></p>
    </div>
@endsection

