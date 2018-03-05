<?php

namespace App;


class Comment extends Model

{

    public function Post()

    {

        return $this->belongsTo(Post::class);

    }
}
