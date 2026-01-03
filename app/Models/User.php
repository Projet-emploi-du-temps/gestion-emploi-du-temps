<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Role;
use App\Models\Formateur;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role_id'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function formateur(){
        return $this->hasOne(Formateur::class);
    }
}
