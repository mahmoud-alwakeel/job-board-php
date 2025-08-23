<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body', 'published']; // fiels that can be modified

    protected $guarded = ['id']; // fields that cannot be modified
}
