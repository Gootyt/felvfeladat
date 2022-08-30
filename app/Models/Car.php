<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'type', 'price', 'active', 'fuel', 'seat', 'extras'];


    public function scopeFilter($query, array $filters) {
        if($filters['extra'] ?? false) {
           $query->where('extras', 'like', '%' . request('extra') . '%');
        }
        if($filters['search'] ?? false) {
           $query->where('brand', 'like', '%' . request('search') . '%')
                ->orWhere('type', 'like', '%' . request('search') . '%')
                ->orWhere('extras', 'like', '%' . request('search') . '%');
        }
    }
}