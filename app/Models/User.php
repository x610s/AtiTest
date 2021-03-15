<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function planes(){
        return $this->belongsToMany(Plan::class,'plans_user');
    }



    /* Chequeo de roles */
    public function hasRoles(array $roles)
    {
     return $this->roles->pluck('key')->intersect($roles)->count();
    }

    
    public function isAdmin(){
        return $this->hasRoles(['admin']);
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'email',
        'company',
        'address',
        'phone',
        'avatar',
    ];

 

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
