<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'measure_id', 'prod_type_id', 'category_id', 'cnt', 'image', 'status'];

    public function measures(){
        return $this->hasOne(Measure::class, 'id', 'measure_id');
    }

    public function productTypes(){
        return $this->hasOne(ProductType::class, 'id', 'prod_type_id');
    }

    public function categories(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
