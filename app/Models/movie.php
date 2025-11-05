<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = ["title", "author", "writer", "description", "duration", "release_year", "poster_url"];
    
    function genre() {
        return $this->belongsToMany(genre::class);
    }
}
