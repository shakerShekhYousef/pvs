<?php

namespace App\Models\traits\UserTraits;

use App\Models\Role;

trait UserRelationships
{
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
