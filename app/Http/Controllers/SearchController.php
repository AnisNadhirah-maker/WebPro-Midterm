<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $request->validate([
        'query' => 'required|string|max:255',
    ]);

    $query = $request->input('query');

     // Search for authors and their books
     $authors = Author::where('name', 'LIKE', "%$query%")->with('books')->get();

     // Search for books directly by title
     $books = Book::where('title', 'LIKE', "%$query%")->with('author')->get();


    return view('search-results', compact('authors', 'books'));
}

}
