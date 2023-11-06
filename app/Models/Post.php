<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'user_id'];
    public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}

public function tags()
{
    return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
}
}
