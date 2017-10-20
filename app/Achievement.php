<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The users that belong to the achievement.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
