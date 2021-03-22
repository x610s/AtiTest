<?php

namespace App\Models;

use App\Presenter\PricinPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

     public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    } 


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

    public function present(){
        return new PricinPresenter($this);
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
