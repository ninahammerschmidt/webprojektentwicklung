<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rating extends Model
{
    protected $fillable = ['stars', 'comment', 'book_id', 'user_id'];
    public function book():BelongsTo{
        return $this->belongsTo(Book::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}