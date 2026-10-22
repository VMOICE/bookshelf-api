<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return response()->json($books);
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function show(int $id)
    {
        $book = Book::findOrFail($id);

        return response()->json($book);
    }

    public function update(Request $request, int $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy(int $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->noContent();
    }
}