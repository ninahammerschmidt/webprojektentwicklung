<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable =['firstName','lastName'];

    //several authors are assigend to several book (m:n)
    public function book():BelongsToMany{
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}
