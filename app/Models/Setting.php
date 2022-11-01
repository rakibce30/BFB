<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\User;
use App\Models\Post;

class Setting extends Model
{
    use HasFactory;

    protected $table    = 'settings';

    protected $fillable = [
           'site_name',
           'logo',
           'site_phone',
           'site_email',
           'site_facebook',
           'site_googleplus',
           'site_twitter',
           'site_linkedin',
           'site_address',
    ];
}
