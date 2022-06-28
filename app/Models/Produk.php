<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    protected $fillable =[
        'name',
        'price',
        'image',
        'background',
        'stok',
        'desc',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
