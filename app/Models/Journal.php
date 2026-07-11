<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $casts = [
        "title" => "array",
        "desc" => "array",
        "tag" => "array",
        "content" => "array",
        "is_featured" => "boolean",
    ];

    protected $guarded = [];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
