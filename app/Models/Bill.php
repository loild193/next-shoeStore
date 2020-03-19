<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'id_user', 'sum_money'
    ];

    public function users() {
        return $this->belongsTo('App\Models\User');
    }
    public function bills() {
        return $this->belongsToMany('App\Models\Bill', 'product_bill');
    }
}
