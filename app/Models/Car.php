<?php

namespace App\Models;

use App\Models\traits\CarTraits\CarMethods;
use App\Models\traits\CarTraits\CarRelationships;
use App\Models\traits\CarTraits\CarScopes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, CarRelationships, CarMethods, CarScopes, Sluggable;

    protected $guarded = [];
}
