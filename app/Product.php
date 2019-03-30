<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $fillable = [
        'cd_product', 'nm_product', 'un'
    ];
    protected $casts = [
        'cd_product' => 'string'
    ];
    protected $primaryKey = 'cd_product';
    protected $guarded = ['created_at', 'update_at'];
    protected $table = 'products';
}
