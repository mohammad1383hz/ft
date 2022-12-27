<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'inventory',
        'price',
        'category_id'
    ];

    public function category(){
        $this->belongsTo(Category::class);
    }
    public function Images(){
        return $this->hasMany(Image::class);
    }
    public function carts(){
        return $this->belongsToMany(Cart::class)->withPivot('number');;
    }
}
