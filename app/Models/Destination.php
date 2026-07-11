<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $casts = [
        'name' => 'array',
        'region' => 'array',
        'desc' => 'array',
        'gallery' => 'array',
    ];

    protected $guarded = [];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
}
