<?php

namespace App\Models;

use App\Models\traits\CarImageTraits\CarImageMethods;
use App\Models\traits\CarImageTraits\CarImageRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory, CarImageMethods, CarImageRelationships;

    protected $guarded = [];
}
