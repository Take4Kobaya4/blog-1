<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // １つの投稿が１つのユーザーに紐づく
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
