<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Map;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('book_number', 'asc')->take(3)->get();
        $featuredMap = Map::where('is_featured', true)->first();
        
        return view('home', compact('books', 'featuredMap'));
    }
}