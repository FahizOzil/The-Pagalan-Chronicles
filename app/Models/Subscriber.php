<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'email',
        'name',
        'is_active',
        'source'
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
    ];
}