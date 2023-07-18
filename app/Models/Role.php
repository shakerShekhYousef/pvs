<?php

namespace App\Models;

use App\Models\traits\RoleTraits\RoleRelationships;
use App\Models\traits\RoleTraits\RoleScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, RoleRelationships, RoleScopes, RoleScopes;

    protected $guarded = [];
}
