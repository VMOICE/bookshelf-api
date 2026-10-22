<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json($genres);
    }

    public function store(Request $request)
    {
        $genre = Genre::create($request->all());

        return response()->json($genre, 201);
    }

    public function show(int $id)
    {
        $genre = Genre::findOrFail($id);

        return response()->json($genre);
    }

    public function update(Request $request, int $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->update($request->all());

        return response()->json($genre);
    }

    public function destroy(int $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return response()->noContent();
    }
}