<?php

namespace App\Models\traits\CarImageTraits;

use App\Models\Car;

trait CarImageRelationships
{
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
