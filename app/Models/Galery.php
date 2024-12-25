<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
