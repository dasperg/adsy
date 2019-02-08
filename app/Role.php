<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const EMPLOYEE = 'employee';
    const MANAGER = 'manager';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
