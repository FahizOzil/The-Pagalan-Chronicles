<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 
        'slug', 
        'subtitle', 
        'description', 
        'excerpt', 
        'cover_image', 
        'price_softback', 
        'price_hardback', 
        'release_date', 
        'page_count', 
        'book_number', 
        'is_published'
    ];
    
    protected $casts = [
        'release_date' => 'date',
        'is_published' => 'boolean',
    ];
}