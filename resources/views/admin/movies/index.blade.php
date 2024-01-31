@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Movies') }}
    </h2>
    <a class="btn btn-primary mb-3" href="{{route("admin.movies.create")}}" role="button">Add a new movie</a>
    <div class="row justify-content-space-between">
        @foreach ($movies as $film)
            <div class="col-md-4">
                <a class="card text-decoration-none" href="{{route("admin.movies.show", $film->id)}}">
                    <img class="card-img-top" src="{{$film->poster_image}}" alt="{{$film->title}}">
                    <div class="card-header">{{ $film->title }}</div>
                    <div class="card-body">{{ $film->description }}</div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection