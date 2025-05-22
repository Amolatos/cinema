<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->get();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string',
            'release_date' => 'required|date',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $validated['poster_url'] = $posterPath;
        }

        Movie::create($validated);

        return redirect()->route('admin.movies.index')
            ->with('success', 'Movie added successfully.');
    }

    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string',
            'release_date' => 'required|date',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('poster')) {
            // Delete old poster if exists
            if ($movie->poster_url) {
                Storage::disk('public')->delete($movie->poster_url);
            }
            $posterPath = $request->file('poster')->store('posters', 'public');
            $validated['poster_url'] = $posterPath;
        }

        $movie->update($validated);

        return redirect()->route('admin.movies.index')
            ->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        if ($movie->poster_url) {
            Storage::disk('public')->delete($movie->poster_url);
        }
        
        $movie->delete();

        return redirect()->route('admin.movies.index')
            ->with('success', 'Movie deleted successfully.');
    }
} 