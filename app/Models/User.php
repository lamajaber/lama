<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;




class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;


    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function customer(){
        return $this->hasOne(Customer::class);
    }
    public function links(){
        return $this->belongsToMany(Link::class,'users_links');
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
