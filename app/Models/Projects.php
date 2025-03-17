<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Projects extends Model
{
 
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'text'
            ]
        ];
    }
}
