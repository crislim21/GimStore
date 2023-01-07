<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class BrowseController extends Controller
{
    public function index() {
        // dd(Game::all());
        return view('browse',[
            'games' => Game::paginate(12)
        ]);
    }
}
