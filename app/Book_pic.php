<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_pic extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
