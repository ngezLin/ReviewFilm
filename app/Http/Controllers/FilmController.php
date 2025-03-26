<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('admin.index-film', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-film');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_date' => 'required|date',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $posterPath = $request->file('poster')->store('posters', 'public');

        Film::create([
            'title' => $request->title,
            'director' => $request->director,
            'genre' => $request->genre,
            'release_date' => $request->release_date,
            'poster' => $posterPath,
        ]);

        return redirect()->route('admin.films')->with('success', 'Film added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        return view('admin.edit-film', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_date' => 'required|date',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow optional poster
        ]);

        $film = Film::findOrFail($id);

        $film->title = $request->title;
        $film->director = $request->director;
        $film->genre = $request->genre;
        $film->release_date = $request->release_date;

        // Handle poster upload
        if ($request->hasFile('poster')) {
            // Delete old poster if exists
            if ($film->poster) {
                Storage::delete('public/' . $film->poster);
            }

            // Store new poster
            $posterPath = $request->file('poster')->store('posters', 'public');
            $film->poster = $posterPath;
        }

        $film->save();

        return redirect()->route('admin.films')->with('success', 'Film updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);

        // Delete poster file from storage
        if ($film->poster) {
            Storage::disk('public')->delete($film->poster);
        }

        $film->delete();

        return redirect()->route('admin.films')->with('success', 'Film deleted successfully!');
    }
}
