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
        'user_id',
    ];

    /**
     * Post author
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
