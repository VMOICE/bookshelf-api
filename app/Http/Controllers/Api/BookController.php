<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct(
        private BookService $bookService
    ) {}

    public function index()
    {
        $books = $this->bookService->listAll();

        return response()->json($books);
    }

    public function store(Request $request)
    {
        $book = $this->bookService->create($request->all());

        return response()->json($book, 201);
    }

    public function show(int $id)
    {
        $book = $this->bookService->findById($id);

        return response()->json($book);
    }

    public function update(Request $request, int $id)
    {
        $book = $this->bookService->update($id, $request->all());

        return response()->json($book);
    }

    public function destroy(int $id)
    {
        $this->bookService->delete($id);

        return response()->noContent();
    }
}