<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    // use HasFactory;
    public function category() //связь Eloquent один к одному, возвращает одну категорию
    {
        return $this->belongsTo(Category::class);
    }
}
