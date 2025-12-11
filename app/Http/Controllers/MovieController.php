<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class MovieController
{
    public function index(Request $request)
    {
        $limit = (int) $request->query("limit", 5);
        $limit = $limit > 0 ? min(100, $limit) : 5;

        $search = $request->query("search");
        $sort   = $request->query("sort", "latest");

        $query = movie::with('genre');

        // SEARCH
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // SORTING
        switch ($sort) {
            case 'oldest':
                $query->orderBy('release_year', 'asc');
                break;

            case 'title_asc':
                $query->orderBy('title', 'asc');
                break;

            case 'title_desc':
                $query->orderBy('title', 'desc');
                break;

            default: // latest
                $query->orderBy('release_year', 'desc');
        }

        $movies = $query->paginate($limit)->appends($request->query());

        return response()->json([
            'success' => true,
            'data'    => $movies->items(),
            'meta'    => [
                'current_page' => $movies->currentPage(),
                'per_page'     => $movies->perPage(),
                'total'        => $movies->total(),
                'last_page'    => $movies->lastPage(),
            ],
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title"        => "required",
            "author"       => "required",
            "writer"       => "required",
            "description"  => "required",
            "duration"     => "required",
            "release_year" => "required",
            "poster_url"   => "required",
        ]);

        $movie = movie::create($data);
        return response()->json($movie, 201);
    }

    public function show($id)
    {
        $movie = movie::with('genre')->findOrFail($id);
        return response()->json($movie);
    }

    public function update(Request $request, $id)
    {
        $movie = movie::findOrFail($id);

        $data = $request->validate([
            "title"        => "required",
            "author"       => "required",
            "writer"       => "required",
            "description"  => "required",
            "duration"     => "required",
            "release_year" => "required",
            "poster_url"   => "required",
        ]);

        $movie->update($data);

        return response()->json($movie);
    }

    public function destroy($id)
    {
        $movie = movie::findOrFail($id);
        $movie->delete();

        return response()->json(["message" => "movie deleted"]);
    }
}
