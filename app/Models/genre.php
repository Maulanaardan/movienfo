<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $fillable = ["name"];

    function movie() {
        return $this->belongsToMany(movie::class);
    }
}
