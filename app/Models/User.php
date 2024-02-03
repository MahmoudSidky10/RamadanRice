<?php

namespace App\Models;

use App\Triggers\CreatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CreatedBy;

    protected $fillable = [
        'user_type_id',
        'name',
        'email',
        'password',
        'user_name',
        'id_number',
        'register_number', // random number from 6 numbers unique for user account
        'created_by',  // id for creator
    ];

    protected $with = ['createdBy'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isAdmin()
    {
        return $this->user_type_id == 1;
    }

    public function ScopeAdmin($query)
    {
        return $query->where('user_type_id', 1);
    }

    public function ScopeUser($query)
    {
        return $query->where('user_type_id', 2);
    }

    public function ScopeEmployee($query)
    {
        return $query->where('user_type_id', 3);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, "created_by");
    }

    public function creators()
    {
        return User::where("created_by", $this->id)->get();
    }

}
