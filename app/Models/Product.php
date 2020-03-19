<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'size', 'cost'
    ];

    public function bills() {
        return $this->belongsToMany('App\Models\Bill', 'prodcuct_bill');
    }
}
