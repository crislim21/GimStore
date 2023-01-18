<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        // dd(Game::all());
        return view('admin.home',[
            'games' => Game::latest()->filter(request(['search']))->paginate(12)->withQueryString(),
            'title' => 'games'
        ]);
    }

    public function detail($id) {
        return view('admin.updateGame',[
            'game' => Game::find($id),
        ]);
    }

    public function view($id) {
        // dd($id);
        return view('admin.detailGame',[
            'game' => Game::find($id)
        ]);
    }

    public function add() {
        return view('admin.addGame');
    }
}
