<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class BrowseController extends Controller
{
    public function index() {
        // dd(Game::all());

        return view('browse',[
            'games' => Game::latest()->filter(request(['search']))->paginate(8)->withQueryString()
        ]);
    }

    public function detail(Game $game) {
        // dd($game);
        return view('product_detail',[
            'game' => $game
        ]);
    }
}
