<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    // use HasFactory;

    public function products() //связь Eloquent один ко многим, возвращает товары категории
    {
        return $this->hasMany(Product::class);
    }
}
