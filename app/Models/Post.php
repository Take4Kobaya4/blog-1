<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillableは入力してもいい項目
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'image',
    ];
    // １つの投稿が１つのユーザーに紐づく
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
