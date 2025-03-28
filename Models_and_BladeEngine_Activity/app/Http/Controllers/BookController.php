<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
{
    $sortBy = $request->get('sort_by', 'date_published'); // Default sorting by date
        $sortOrder = $request->get('sort_order', 'desc'); // Default order (newest first)

        $books = Book::orderBy($sortBy, $sortOrder)->get();

        return view('books.index', compact('books', 'sortBy', 'sortOrder'));
    }

}
