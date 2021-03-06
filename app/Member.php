<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date_of_brith',
        'blood',
        'degree',
        'jobtype',
        'image',
        'description',
    ];
}
