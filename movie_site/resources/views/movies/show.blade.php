@extends('movies.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg border-0">
                <div class="card-body">

                    <!-- Imaginea mare -->
                    @if($movie->image)
                        <img src="{{ asset('storage/' . $movie->image) }}"
                             alt="{{ $movie->title }}"
                             class="img-fluid mb-4 rounded">
                    @else
                        <img src="https://via.placeholder.com/300x450?text=No+Image"
                             alt="No Image"
                             class="img-fluid mb-4 rounded">
                    @endif

                    <!-- Detalii -->
                    <h2 class="fw-bold">{{ $movie->title }}</h2>
                    <p class="text-muted mb-1">
                        Director: <strong>{{ $movie->director }}</strong>
                    </p>
                    <p class="text-muted mb-1">
                        Genre: <strong>{{ $movie->genre }}</strong>
                    </p>
                    <p class="text-muted mb-3">
                        Release Year: <strong>{{ $movie->release_year }}</strong>
                    </p>

                    <hr>

                    <!-- Descriere -->
                    <h5 class="fw-semibold">Description</h5>
                    <p>{{ $movie->description }}</p>

                    <!-- Buton de întoarcere -->
                    <a href="{{ route('movies.index') }}" class="btn btn-secondary mt-3">
                        ← Back to Movies
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection