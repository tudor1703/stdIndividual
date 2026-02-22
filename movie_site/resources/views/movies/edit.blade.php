@extends('movies.app')

@section('content')
<h1>Edit Movie</h1>

<form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Metoda PUT pentru update -->

    <!-- Preview imagine curentă -->
    <div class="mb-3">
        <label>Current Image</label><br>
        @if($movie->image)
            <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image" width="150">
        @else
            <img src="https://via.placeholder.com/150x200?text=No+Image" alt="No Image">
        @endif
    </div>

    <!-- Input nouă imagine -->
    <div class="mb-3">
        <label>Change Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $movie->title }}">
    </div>

    <div class="mb-3">
        <label>Director</label>
        <input type="text" name="director" class="form-control" value="{{ $movie->director }}">
    </div>

    <div class="mb-3">
        <label>Genre</label>
        <input type="text" name="genre" class="form-control" value="{{ $movie->genre }}">
    </div>

    <div class="mb-3">
        <label>Release Year</label>
        <input type="number" name="release_year" class="form-control" value="{{ $movie->release_year }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $movie->description }}</textarea>
    </div>

    <button class="btn btn-primary">Update Movie</button>
</form>
@endsection