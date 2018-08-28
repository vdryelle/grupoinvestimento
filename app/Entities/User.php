<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    Use SoftDeletes;
    use Notifiable;

    /**
     * The ORM database atributes
     */

    public      $timestamps     = true;
    protected   $table          = 'users';
    protected   $fillable       = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permission'];
    protected   $hidden         = ['password', 'remember_token'];
}
