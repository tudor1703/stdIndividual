@extends('movies.app')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">About Movie Hub</h1>
        <p class="text-muted">
            Your personal movie collection manager
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card bg-dark text-white shadow-lg border-0">
                <div class="card-body p-4">

                    <h4 class="mb-3">🎬 What is Movie Hub?</h4>
                    <p>
                        <strong>Movie Hub</strong> is a web application built with
                        <span class="text-info">Laravel</span> that allows users to
                        manage a personal collection of movies.
                        You can add, edit, delete, and organize movies with ease.
                    </p>

                    <hr class="border-secondary">

                    <h4 class="mb-3">🚀 Features</h4>
                    <ul>
                        <li>CRUD operations for movies</li>
                        <li>Image upload for each movie</li>
                        <li>Modern responsive UI using Bootstrap</li>
                        <li>Clean and intuitive layout</li>
                    </ul>

                    <hr class="border-secondary">

                    <h4 class="mb-3">🛠 Technologies Used</h4>
                    <ul>
                        <li>Laravel (PHP Framework)</li>
                        <li>MySQL Database</li>
                        <li>Blade Templates</li>
                        <li>Bootstrap 5</li>
                    </ul>

                    <hr class="border-secondary">

                    <h4 class="mb-3">🔍 Search any movie you like</h4>

                    <form action="{{ route('movies.index') }}" method="GET" class="d-flex gap-2">
                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Search movies by title..."
                        >
                        <button class="btn btn-outline-info">
                            Search
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection