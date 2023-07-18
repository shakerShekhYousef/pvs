<?php

namespace App\Models\traits\UserTraits;

trait UserMethods
{
    // Functions to check roles
    public function hasRole($role): bool
    {
        if ($this->role()->where('name', $role)->first()) {
            return true;
        }

        return false;
    }

    public function hasAnyRole($roles): bool
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }

        return false;
    }
}
