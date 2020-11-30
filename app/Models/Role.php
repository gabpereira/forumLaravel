<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function getUsers()
    {
        return $this->hasMany('App\Models\User', 'role_id');
    }
}
