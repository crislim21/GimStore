<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class UpdateGameController extends Controller
{
    public function update(Request $request, $id) {
        // dd($request, $id);
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:70',
            'description' => 'required|min:25|max:1000',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publisher' => 'required|min:5|max:255',
            'developer' => 'required|min:5|max:255',
        ]);

        Game::where('id', $id)->update($validatedData);

        return redirect('/admin/home')->with('success', 'Game updated successfully');

    }
}
