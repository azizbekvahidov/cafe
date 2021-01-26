<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    protected $fillable = ['name', 'status'];

    public function products(){
        return $this->hasMany('App\Products', 'id', 'prod_type_id');
    }
}
