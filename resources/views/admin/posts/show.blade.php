@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

        <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-secondary my-5">Torna alla home</button></a>
    </div>
@endsection