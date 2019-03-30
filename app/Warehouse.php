<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model{
    protected $fillable = [
        'cd_product', 'cd_store', 'qtd_product'
    ];
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'warehouses';
}
