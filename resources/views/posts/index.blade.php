@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $item)
            <div class="card p-3 mb-1">
                <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                <small>Written on {{$item->created_at}}</small>
            </div>
        @endforeach
        <div id="pag">{{$posts->links()}}</div>
    @else
        <p>No posts found</p>
    @endif
@endsection
