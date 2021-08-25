<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'digination',
        'location',
        'degree',
        'complete',

        'email',
        'phone',
        'facebook',
        'linkedin',
        'twitter',
        
        'description',
        'image',
    ];
}
