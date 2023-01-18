<?php

namespace App\Models;

use App\Models\HistoryHeader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoryDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('game_title', 'like', '%' . $search . '%');
        });
    }


    public function historyheader() {
        return $this->belongsTo(HistoryHeader::class);
    }

    public function user() {
        return $this->hasOne(User::class, 'user_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class, 'cart_id');
    }
}
