<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'Comments';

    protected $fillable =   [
        'post_id', 'name', 'email', 'website', 'description', 'user_id',
    ];
}
