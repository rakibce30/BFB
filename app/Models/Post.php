<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\User;
use App\Models\Frontend\Comment;

class Post extends Model
{
    use HasFactory;

    protected $tabel = 'posts';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'mete_title',
        'meta_keyword',
        'meta_description',
        'status',
        'user_id',   
    ];

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
