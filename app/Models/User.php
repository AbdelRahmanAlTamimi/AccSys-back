<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'created_by');
    }

    public function financialReports()
    {
        return $this->hasMany(FinancialReport::class, 'created_by');
    }

}
