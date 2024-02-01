<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['cattegory_id','name','description','price','stock'];

    protected $hidden = ['created_at','updated_at'];

    public function cattegory()
    {
        return $this->belongsTo(Cattegory::class);
    }
}
