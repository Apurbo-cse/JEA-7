<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    protected $fillable = [
        'name',
        'description',
        'email',
        'phone',
        'location',
        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'time',
        'image',
        'status',
    ];
}
