<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'image_path', 'description', 'is_featured'];
    
    protected $casts = [
        'is_featured' => 'boolean',
    ];
}