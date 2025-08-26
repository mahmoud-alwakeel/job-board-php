<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $table = 'tag'; // specify the table name
    protected $fillable = ['title']; // fiels that can be modified

    protected $guarded = ['id']; // fields that cannot be modified

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
