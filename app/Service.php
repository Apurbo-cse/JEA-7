<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'status',
    ];
}
