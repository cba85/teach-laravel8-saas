<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img_id', 'img_url', 'user_id'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
