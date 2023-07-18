<?php

namespace App\Models\traits\RoleTraits;

use App\Models\User;

trait RoleRelationships
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
