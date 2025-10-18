<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['genre', 'author'])->get();

        return response()->json([
            'success' => true,
            'message' => 'get all books',
            'data' => $books
        ], 200);
        // return view('books', compact('books', 'books')); // mengirim data buku ke view
    }

    public function show($id)
    {
        $book = Book::find($id);

        return response()->json([
            'success' => true,
            'message' => "get book by id $id",
            'data' => $book
        ], 200);
        // return view('books.id', compact('id', 'book'));
    }
}
