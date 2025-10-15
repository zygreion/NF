<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['genre', 'author'])->get();

        return view('books', compact('books', 'books')); // mengirim data buku ke view
    }

    public function show($id)
    {
        $book = Book::find($id);

        return view('books.id', compact('id', 'book'));
    }
}
