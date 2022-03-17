@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Ciao {{Auth::user()->name}}! <br>
                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="text-center">
                <a href="{{route("admin.posts.index")}}"><button type="button" class="btn btn-secondary my-3">Vai alla home</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
