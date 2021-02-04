<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $table = 'measures';
    protected $fillable = ['name', 'status'];

    public function products(){
        return $this->hasMany('App\Products', 'id', 'measure_id');
    }
}
