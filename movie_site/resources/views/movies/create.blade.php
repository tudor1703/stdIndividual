@extends('movies.app')

@section('content')
<h1>Add New Movie</h1>

<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label>Director</label>
        <input type="text" name="director" class="form-control">
    </div>

    <div class="mb-3">
        <label>Genre</label>
        <input type="text" name="genre" class="form-control">
    </div>

    <div class="mb-3">
        <label>Release Year</label>
        <input type="number" name="release_year" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Add Movie</button>
</form>
@endsection