<?php

namespace App\Models\traits\CarTraits;

trait CarScopes
{
    public function scopeMaker($query, $maker)
    {
        return $query->where('maker', 'like', '%'.$maker.'%');
    }

    public function scopeModel($query, $model)
    {
        return $query->where('model', 'like', '%'.$model.'%');
    }
}
