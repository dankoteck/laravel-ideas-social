<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'idea_id', 'id')->orderBy('created_at', 'desc');
    }
}
