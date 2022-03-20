@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center my-5">Scrivi un nuovo articolo</h3>

        <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Titolo" id="title" name="title">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>            

            <div class="form-group d-none">
                <label for="slug">Slug</label>
                <input class="form-control" type="text" placeholder="Titolo" id="slug" name="slug">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="30" placeholder="Testo articolo"></textarea>

                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input @error('image') is-invalid @enderror type="file" class="form-control-file" name="image">
              </div>

            <select class="form-select" aria-label="Default select example" name="category_id">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                    <option value="{{$category["id"]}}">
                        {{$category["name"]}}
                    </option>
                @endforeach
            </select>

            <div class="text-center">
                <button type="submit" class="btn btn-secondary my-5 text-center">Salva</button>
            </div>

            <div class="text-center">
                <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-secondary">Torna alla home</button></a>
            </div>
        </form>
    </div>
@endsection