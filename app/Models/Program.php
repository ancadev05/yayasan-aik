<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [];

    // pembuatan slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            $slug = Str::slug($program->title);
            $originalSlug = $slug;
            $count = 1;

            while (Program::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $program->slug = $slug;
        });
    }
}
