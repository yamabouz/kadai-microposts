<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //Userにお気に入りされている投稿
    public function favorite_users(){
        return $this->belongsToMany(User::class,  'favorites', 'micropost_id', 'favorite_id')->withTimestamps();
    }
}
