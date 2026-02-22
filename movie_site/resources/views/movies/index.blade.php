@extends('movies.app')

@section('content')
<h1 class="mb-4">Movies</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- 🔍 SEARCH + SORT FILTER -->
<form method="GET" action="{{ route('movies.index') }}" class="row g-2 mb-4 align-items-end">

    <!-- Search -->
    <div class="col-md-4">
        <label class="form-label fw-semibold">Search by title</label>
        <input type="text"
               name="search"
               value="{{ request('search') }}"
               class="form-control"
               placeholder="Type movie title...">
    </div>

    <!-- Sort -->
    <div class="col-md-4">
        <label class="form-label fw-semibold">Sort by</label>
        <select name="sort" class="form-select">
            <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>Movie title</option>
            <option value="director" {{ request('sort') == 'director' ? 'selected' : '' }}>Director</option>
            <option value="release_year" {{ request('sort') == 'release_year' ? 'selected' : '' }}>Release year</option>
        </select>
    </div>

    <!-- Order -->
    <div class="col-md-3">
        <label class="form-label fw-semibold">Order</label>
        <select name="order" class="form-select">
            <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Ascending ↑</option>
            <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Descending ↓</option>
        </select>
    </div>

    <!-- Button -->
    <div class="col-md-1 d-grid">
        <button class="btn btn-primary">Apply</button>
    </div>

</form>

<!-- 🎬 MOVIES LIST -->
<table class="table table-borderless align-middle">
    <tbody>
        @forelse($movies as $movie)
        <tr class="border-bottom">

            <!-- Image (link către show) -->
            <td style="width: 120px;">
                <a href="{{ route('movies.show', $movie->id) }}">
                    @if($movie->image)
                        <img src="{{ asset('storage/' . $movie->image) }}"
                             alt="Movie Image"
                             width="100"
                             class="img-thumbnail">
                    @else
                        <img src="https://via.placeholder.com/100x150?text=No+Image"
                             alt="No Image"
                             class="img-thumbnail">
                    @endif
                </a>
            </td>

            <!-- Details (link către show pe titlu) -->
            <td>
                <h5 class="mb-1">
                    <a href="{{ route('movies.show', $movie->id) }}" class="text-decoration-none text-dark">
                        {{ $movie->title }}
                    </a>
                </h5>
                <small class="text-muted">
                    {{ $movie->director }} · {{ $movie->genre }} · {{ $movie->release_year }}
                </small>
            </td>

            <!-- Actions -->
            <td class="text-end">
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-sm btn-outline-primary">
                        Edit
                    </a>

                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Delete this movie?')">
                            Delete
                        </button>
                    </form>
                </div>
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center text-muted py-4">
                No movies found.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection