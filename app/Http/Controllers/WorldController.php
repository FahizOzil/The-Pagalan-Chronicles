<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('world', compact('maps'));
    }
    
    public function showMap($id)
    {
        $map = Map::findOrFail($id);
        return view('world.map', compact('map'));
    }
}