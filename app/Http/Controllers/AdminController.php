<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        // dd(Game::all());
        return view('admin.home',[
            'games' => Game::paginate(12)
        ]);
    }
}
