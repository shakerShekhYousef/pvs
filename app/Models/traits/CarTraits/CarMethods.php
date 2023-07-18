<?php

namespace App\Models\traits\CarTraits;

trait CarMethods
{
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title'],
            ],
        ];
    }
}
