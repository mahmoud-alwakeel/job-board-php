<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tag'; // specify the table name
    protected $fillable = ['title']; // fiels that can be modified

    protected $guarded = ['id']; // fields that cannot be modified

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
