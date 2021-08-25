<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',

        'cell','telephone',
        
        'facelink','linlink',
        
        'description',
        
        'image',

        'course_name','course_subject','course_quali',

        'job_type','job_digination','job_work',

        'intsub','intname',

        'dipsub', 'dipname',

        'bscdipsub','bscdipname',

        'bscsub','bscname',

        'mscsub','mscname',

        'mbasub','mbaname',

        'fathername','mothername',

        'preadd','peradd',

        'nid','religion','blood',



    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
