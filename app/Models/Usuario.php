<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'login',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
