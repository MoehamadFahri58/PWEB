<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'name'
    ];
     public function produk(){
        return $this->hasMany(produk::class);
    }
}
