<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //Letting the role table know about the eloquent relationship between user and roles
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
