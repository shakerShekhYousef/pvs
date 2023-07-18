<?php

namespace App\Models\traits\CarTraits;

use App\Models\CarImage;

trait CarRelationships
{
    public function images()
    {
        return $this->hasMany(CarImage::class);
    }
}
