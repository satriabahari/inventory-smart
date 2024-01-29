<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cattegory extends Model
{
    protected $table = "cattegories";
    protected $primaryKey = "id";
    protected $fillable = [
        "name", 
        "address", 
        "email",
        "phone"
    ];
}
