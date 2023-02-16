<?php

namespace App\Http\Controllers;

use App\Models\Book;

class IndexController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }
}
