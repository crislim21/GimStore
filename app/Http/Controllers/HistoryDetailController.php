<?php

namespace App\Http\Controllers;

use App\Models\HistoryHeader;
use App\Models\HistoryDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;




class HistoryDetailController extends Controller
{
    public function index() {

        $data = HistoryHeader::where('user_id', auth()->user()->id)->latest()->get();
        // dd($data);
        return view('history.index',[
            'history' => $data,
            'count' => 0,
        ]);
    }

    public function make_history() {
        $user = Auth::user();
        $userid = $user->id;

        $items = Cart::where('user_id', $userid)->get();
        $count = 0;

        $history_header = new HistoryHeader();
        $history_header->user_id = $user->id;
        $history_header->save();

        foreach($items as $item) {
            $history = new HistoryDetail;
            $history->user_id = $user->id;
            $history->cart_id = $item->id;
            $history->game_id = $item->game_id;
            $history->history_header_id = $history_header->id;
            $history->game_title = $item->game_title;
            $history->game_image = $item->game_image;
            $history->game_description = $item->game_description;
            $history->game_developer = $item->game_developer;
            $history->game_publisher = $item->game_publisher;
            $history->game_price = $item->game_price;
            $history->save();
            $count++;

            $cart_id = $item->id;
            $cart = Cart::find($cart_id);
            $cart->delete();


        }

        return redirect('/history')->with('success','Game ditambahkan ke dalam Cart !!');

    }
}
