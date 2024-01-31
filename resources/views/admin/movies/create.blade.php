@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Create a new Movie') }}
    </h2>
    <div class="row justify-content-center">
        <form action="{{route("admin.movies.store")}}", method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Movie Title">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea rows="5" class="form-control" id="description" name="description" placeholder="Movie description"></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Duration (min)</label>
                <input type="number" class="form-control" id="duration" name="duration" placeholder="Movie duration">
            </div>
            <div class="form-group">
                <label for="image">Poster Image URL</label>
                <input type="text" class="form-control" id="poster_image" name="poster_image" placeholder="Poster Image URL">
            </div>
            <div class="form-group">
                <label for="date">Exit Date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Movie exit date">
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Add movie</button>
          </form>
    </div>
</div>
@endsection