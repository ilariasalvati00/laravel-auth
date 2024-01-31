@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __($movie->title) }}
    </h2>
    <div class="d-flex flex-row align-items-center justify-content-space-between">
        <a class="btn btn-primary mb-3" href="{{route("admin.movies.edit", $movie->id)}}" role="button">Edit this movie</a>
        <a class="btn btn-danger mb-3   " href="{{route("admin.movies.destroy", $movie->id)}}">Delete this movie</a>
    </div>
    <div class="row justify-content-space-between flex-row">
        <img class="col-3" src="{{$movie->poster_image}}" alt="">
        <ul class="list-group col-9">
            <li class="list-group-item"><i>Description</i>: {{$movie->description}}</li>
            <li class="list-group-item"><i>Exit date</i>: {{$movie->date}}</li>
            <li class="list-group-item"><i>Duration (min)</i>: {{$movie->duration}}</li>
          </ul>
    </div>
</div>
@endsection