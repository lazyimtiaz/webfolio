<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable =['title','company','objectives','timeline','is_active'];

     protected $casts = [
        'objectives' => 'array', // allows storing/retrieving JSON as array
    ];

}
