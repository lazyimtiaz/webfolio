<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =['title','slug','author','description','image','tags','datetime','is_active'];
    protected $casts = [
        'tags' => 'array',
    ];

}
