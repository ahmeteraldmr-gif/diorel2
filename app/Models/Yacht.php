<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yacht extends Model
{
    protected $casts = [
        "name" => "array",
        "tag" => "array",
        "desc" => "array",
        "long_desc" => "array",
        "gallery" => "array"
    ];

    protected $guarded = [];

    //
}
