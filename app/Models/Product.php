<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['image', 'name', 'description', 'price', 'stok', 'category_id'];

    public function catagor()
    {


        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
