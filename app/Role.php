<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const EMPLOYEE = 1;
    const MANAGER = 2;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
