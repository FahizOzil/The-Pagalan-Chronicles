<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'The Pagalan Chronicles Book 1 - Searching for Morganuke\'s Roots',
            'slug' => 'searching-for-morganukes-roots',
            'description' => 'The first book in the Pagalan Chronicles series...',
            'excerpt' => 'Follow the exciting first adventure in the world of Pagalan...',
            'cover_image' => 'images/books/book1-cover.jpg',
            'price_softback' => 14.00,
            'price_hardback' => 24.00,
            'release_date' => '2025-05-01',
            'page_count' => 480,
            'book_number' => 1,
            'is_published' => false
        ]);
        
        Book::create([
            'title' => 'The Pagalan Chronicles Book 2 - Finding Denesthea',
            'slug' => 'finding-denesthea',
            'description' => 'The second book in the Pagalan Chronicles series...',
            'excerpt' => 'The adventure continues in the magical world of Pagalan...',
            'cover_image' => 'images/books/book2-cover.jpg',
            'price_softback' => 14.00,
            'price_hardback' => 24.00,
            'release_date' => '2025-06-01',
            'page_count' => 480,
            'book_number' => 2,
            'is_published' => false
        ]);
        
        Book::create([
            'title' => 'The Pagalan Chronicles Book 3 - The Final Quest',
            'slug' => 'the-final-quest',
            'description' => 'The third book in the Pagalan Chronicles series...',
            'excerpt' => 'The epic conclusion to the first trilogy in the world of Pagalan...',
            'cover_image' => 'images/books/book3-cover.jpg',
            'price_softback' => 14.00,
            'price_hardback' => 24.00,
            'release_date' => '2025-08-01',
            'page_count' => 480,
            'book_number' => 3,
            'is_published' => false
        ]);
    }
}