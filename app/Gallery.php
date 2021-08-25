<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
}

