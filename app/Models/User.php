<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    public function post(){
        return $this->hasMany('App\Models\Post');
    }
}
