<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Post extends Model
{
    use HasFactory;
     
    use HasUuids;
    // primary key
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // UUID Universal Unique Identifier
    public $incrementing = false;

    protected $table = 'post'; // specify the table name
    protected $fillable = ['title', 'body', 'published', 'author']; // fields that can be modified

    protected $guarded = ['id']; // fields that cannot be modified

    protected $casts = [
        'published' => 'boolean',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
