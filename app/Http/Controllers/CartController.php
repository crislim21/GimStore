<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        // @dd($cart);

        // dd($cart->count());
        return view('cart',[
            'games' => $cart,
        ]);
    }

    public function edit(Cart $cart) {

        dd("CartController");

        return view('cart.edit',[
            'title' => 'Edit Cart',
            'active' => 'Cart',
            'cart' => $cart,

        ]);


    }

    public function store(Request $request,$id) {
        // Used
        if(Auth::id()) {
            $user = Auth::user();
            $product = Game::find($id);
            $cart = new Cart;

            $cart->user_id = $user->id;

            $cart->game_id = $product->id;
            $cart->game_title = $product->title;
            $cart->game_image = $product->image;
            $cart->game_description = $product->description;
            $cart->game_developer = $product->developer;
            $cart->game_publisher = $product->publisher;
            $cart->game_price = $product->price;
            $cart->total_price = $cart->total_price + $product->price;
            $cart->save();
            return redirect('/cart')->with('success','Product berhasil ditambahkan ke dalam Cart !!');
        }
    }

    public function update(Request $request, Cart $cart) {
        // $list = Cart::where('user_id',auth()->user()->id)->get();
        // $list = Cart::find()
        dd($cart);
        $validatedData = $request->validate([
            'quantity' => ['required', 'min:1']
        ]);
        // dd($validatedData['quantity']);
        // $update = DB::table('carts')->where('post')

        Cart::where('post_id', $cart->id)
            ->update(['quantity' => $validatedData['quantity']]);
        return redirect('/cart')->with('success','Product Quantity diubah');

    }
}

