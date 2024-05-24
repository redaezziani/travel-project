<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationImage extends Model
{
    protected $fillable = [
        'destination',
        'image',
    ];
}
