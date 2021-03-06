<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSocial extends Model
{
    Use SoftDeletes;
    use Notifiable;

    /**
     * The ORM database atributes
     */

    public      $timestamps     = true;
    protected   $table          = 'users';
    protected   $fillable       = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar'];
    protected   $hidden         = [];
}
