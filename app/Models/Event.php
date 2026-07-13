<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        "title" => "array",
        "tag" => "array",
        "month" => "array",
        "loc" => "array",
        "desc" => "array",
        "long_desc" => "array",
        "gallery" => "array"
    ];

    protected $guarded = [];

    //
}
