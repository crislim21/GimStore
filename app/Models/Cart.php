<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function game() {
        return $this->belongstoMany(Game::class, 'game_id');
    }

    public function user() {
        return $this->hasOne(User::class);
    }

    public function history() {
        return $this->belongsTo(Library::class);
    }

}

