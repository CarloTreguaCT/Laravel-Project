<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}