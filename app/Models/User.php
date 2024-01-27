<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'password',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];
}
