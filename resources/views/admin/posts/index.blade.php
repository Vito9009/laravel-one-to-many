@extends('layouts.app')

@section('content')
<table class="table table-bordered table-white">
    <thead>
      <tr>
        <th class="align-middle text-center" scope="col">ID</th>
        <th class="align-middle text-center" scope="col">Title</th>
        <th class="align-middle text-center" scope="col">Content</th>
        <th class="align-middle text-center" scope="col">Category</th>
        <th class="align-middle text-center" scope="col">Image</th>
        <th class="align-middle text-center" scope="col">Option</th>
        <th class="align-middle text-center" scope="col">Edit</th>
        <th class="align-middle text-center" scope="col">Delete</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th class="align-middle text-center" scope="row">{{$post["id"]}}</th>
                <td class="align-middle text-center">{{$post["title"]}}</td>
                <td class="align-middle text-center">{{$post["content"]}}</td>
                <td class="align-middle text-center">{{$post["category"] ? $post["category"]["name"] : '-'}}</td>
                <td class="align-middle text-center">
                  @if (isset($post["image"]))
                    <img width="100" src="{{asset("storage/{$post->image}")}}" alt="{{$post->title}}">
                  @else
                    {{'-'}}
                  @endif
                </td>
                <td class="align-middle text-center"><a href="{{route("admin.posts.show", $post->id)}}"><button type="button" class="btn btn-secondary">Read</button></a></td>
                <td class="align-middle text-center"><a href="{{route("admin.posts.edit", $post->id)}}"><button type="button" class="btn btn-secondary">Edit</button></a></td>
                <td class="align-middle text-center">
                  <form action="{{route("admin.posts.destroy", $post->id)}}" method="post">

                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-secondary" onclick="return confirm('Sei sicuro? Il prodotto verrà eliminato definitivamente')">Delete</button>

                  </form>
                </td>
             </tr>
        @endforeach
    </tbody>
  </table>

  <div class="text-center my-5">
    <a href="{{route("admin.posts.create")}}"><button type="button" class="btn btn-secondary">Scrivi un nuovo articolo</button></a>
  </div>
@endsection