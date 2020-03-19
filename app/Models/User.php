<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function bills() {
        return $this->hasMany('App\Models\Bill');
    }
    public function profiles() {
        return $this->belongsTo('App\Models\Profile');
    } 
}
