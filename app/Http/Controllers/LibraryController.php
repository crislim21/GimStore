<?php

namespace App\Http\Controllers;

use App\Models\HistoryDetail;
use App\Models\HistoryHeader;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index() {
        // $data = HistoryDetail::where('user_id', auth()->user()->id)->latest()->get();
        // dd($data);
        return view('library.library', [
            'games' => HistoryDetail::where('user_id', auth()->user()->id)->latest()
            ->filter(request(['search']))->paginate(9)->withQueryString()
        ]);
    }

    public function detail($id) {
        $data = HistoryDetail::find($id);
        // dd($data->game_price);
        return view('library.library_detail',[
            'game' => $data,
        ]);
    }
}
