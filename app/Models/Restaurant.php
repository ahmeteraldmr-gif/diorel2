<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $casts = [
        "name" => "array",
        "tag" => "array",
        "desc" => "array",
        "long_desc" => "array",
        "gallery" => "array",
        "show_video_on_cover" => "boolean"
    ];

    protected $guarded = [];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
