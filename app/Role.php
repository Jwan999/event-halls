<?php

namespace EventHalls;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function role()
    {
        $role = Role::create(['name' => 'user']);
    }
}
