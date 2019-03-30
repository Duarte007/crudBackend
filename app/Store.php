<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model{
    protected $fillable = [
        'cd_store', 'nm_store'
    ];
    protected $casts = [
        'cd_store' => 'string'
    ];
    protected $primaryKey = 'cd_store';
    protected $guarded = ['created_at', 'update_at'];
    protected $table = 'stores';
}
