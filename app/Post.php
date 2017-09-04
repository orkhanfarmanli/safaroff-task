<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title_az',
        'title_en',
        'title_ru',
        'title_fr',
        'body_az',
        'body_en',
        'body_ru',
        'body_fr',
        'post_date',
        'created_at',
        'updated_at',
    ];
}
