<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =['title','slug','body','description','image','tags','is_active'];
    protected $casts = [
        'tags' => 'array',
    ];
}
