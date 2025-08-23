<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    //
    protected $table = 'post'; // specify the table name
    protected $fillable = ['title', 'body', 'published']; // fiels that can be modified

    protected $guarded = ['id']; // fields that cannot be modified

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
