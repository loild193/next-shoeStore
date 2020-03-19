<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'sex', 'birthday'
    ];

    public function users() {
        return $this->belongsTo('App\Models\User');
    }
}
