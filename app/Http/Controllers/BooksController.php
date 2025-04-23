<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('book_number', 'asc')->get();
        return view('books.index', compact('books'));
    }
    
    public function show($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        $characters = [
                [
                    'name' => 'Character 1',
                    'description' => 'Description of Character 1',
                    'image' => "'images/characters/Morganuke.png'",
                    'role' => 'Main Character'
                ],
                [
                    'name' => 'Character 2',
                    'description' => 'Description of Character 2',
                    'image' => "'images/characters/character-2.jpg'",
                    'role' => 'Supporting Character'
                ],
                [
                    'name' => 'Character 3',
                    'description' => 'Description of Character 3',
                    'image' => "'images/characters/character-3.jpg'",
                    'role' => 'Antagonist'

                ]
        ];

        $characters =  (object) $characters;
        return view('books.show', compact('book' , 'characters'));
    }

    public function buyNow()
    {
        return view('buynow');
    }
    
}