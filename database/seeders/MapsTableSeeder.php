<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Seeder;

class MapsTableSeeder extends Seeder
{
    public function run()
    {
        Map::create([
            'title' => 'The World of Pagalan',
            'image_path' => 'images/maps/pagalan-world-map.jpg',
            'description' => 'A detailed map of the entire world of Pagalan.',
            'is_featured' => true
        ]);
        
        Map::create([
            'title' => 'The Northern Kingdoms',
            'image_path' => 'images/maps/northern-kingdoms-map.jpg',
            'description' => 'A detailed map of the Northern Kingdoms of Pagalan.',
            'is_featured' => false
        ]);
        
        Map::create([
            'title' => 'The Southern Realms',
            'image_path' => 'images/maps/southern-realms-map.jpg',
            'description' => 'A detailed map of the Southern Realms of Pagalan.',
            'is_featured' => false
        ]);
    }
}