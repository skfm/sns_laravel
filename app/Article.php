<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    //
    public function user(): BlongsTo
    {
        return $this->belongTo('App\User');
    }
}
