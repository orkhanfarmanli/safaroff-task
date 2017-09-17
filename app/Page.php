<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'identifier',
        'cover_img',
        'short_desc',
        'body',
    ];
}
