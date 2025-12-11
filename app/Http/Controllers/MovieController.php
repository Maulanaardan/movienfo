<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class MovieController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = (int) $request->query("limit", 5);
        $limit = $limit > 0 ? min(100, $limit) : 5;
        
        $search = $request->query("search");

        $query = movie::with('genre');

        // FILTER SEARCH
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // BARU paginate
        $movies = $query->paginate($limit)->appends($request->query());

        return response()->json([
            'success' => true,
            'data'    => $movies->items(),
            'meta'    => [
                'current_page' => $movies->currentPage(),
                'per_page' => $movies->perPage(),
                'total' => $movies->total(),
                'last_page' => $movies->lastPage(),
            ]
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            ["title" => "required"],
            ["author" => "required"],
            ["writer" => "required"],
            ["description" => "required"],
            ["duration" => "required"],
            ["release_year" => "required"],
            ["poster_url" => "required"],
        );
        $movie = movie::create($data);
        return response()->json($movie, 201);
    }

    /**
     * Display the specified resource.
     */

    public function show(movie $movie)
    {
        return response()->json($movie::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            ["title" => "required"],
            ["author" => "required"],
            ["writer" => "required"],
            ["description" => "required"],
            ["duration" => "required"],
            ["release_year" => "required"],
            ["poster_url" => "required"],
        );
        $movie = movie::findOrFail();
        $movie = movie::update($data);
        return response()->json($movie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        $movie::delete();
        return response()->json(["message" => "data dihapus"]);
    }
}
