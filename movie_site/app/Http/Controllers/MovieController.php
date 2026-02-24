<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort   = $request->query('sort', 'title');
        $order  = $request->query('order', 'asc');
    
        $allowedSorts = ['title', 'director', 'release_year'];
    
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'title';
        }
    
        $movies = Movie::when($search, function ($query, $search) {
                $query->where('title', 'LIKE', $search . '%');
            })
            ->orderBy($sort, $order)
            ->get();
    
        return view('movies.index', compact('movies', 'search', 'sort', 'order'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_year' => 'required|integer|min:1800|max:' . date('Y'),
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('movies', 'public');
            $validated['image'] = $path;
        }

        Movie::create($validated);

        return redirect()->route('movies.index')
                         ->with('success', 'Movie added successfully!');
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_year' => 'required|integer|min:1800|max:' . date('Y'),
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('movies', 'public');
            $validated['image'] = $path;
        }

        $movie->update($validated);

        return redirect()->route('movies.index')
                         ->with('success', 'Movie updated successfully!');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')
                         ->with('success', 'Movie deleted successfully!');
    }
}