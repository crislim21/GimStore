<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query , array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%'. $search . '%');
        });
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function library() {
        return $this->belongsTo(Library::class, 'library_id');
    }
}
