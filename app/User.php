<?php

namespace App;
use App\Education;
use App\Experience;
use App\skill;

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

    public function education(){
        return $this->hasMany(Education::class);
    }
    public function experience(){
        return $this->hasMany(Experience::class);
    }
    public function skill(){
        return $this->hasMany(Skill::class);
    }
    public function details(){
        return $this->hasOne(UserDetail::class);
    }
}
