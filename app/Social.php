<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'facbook',
        'instagram',
        'linkedin',
        'twitter',
    ];

}
