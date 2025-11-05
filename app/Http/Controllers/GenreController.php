<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(genre::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(["name" => "required"]);
        $genre = genre::create($data);
        return response()->json($genre,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        return response()->json($genre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(["name" => "required"]);
        $genre = Genre::findOrFail($id);
        $genre = genre::update($data);
        return response()->json($genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        $genre->delete();
        return response()->json(['message' => "udah dihapus bro"]);
    }
}
