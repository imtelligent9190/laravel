@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-dark">Create New Post</a>
                    <h3>Your Posts:</h3>
                    @if (count($posts)>0)
                        <table  class="table table-dark">
                            @foreach ($posts as $post)
                                <tr>
                                    <th><a href="posts/{{$post->id}}">{{$post->title}}</a></th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a></th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>you have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
