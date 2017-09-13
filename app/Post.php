<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'short_desc',
        'main_img',
        'body',
        'post_date',
        'created_at',
        'updated_at',
    ];
}
