<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Playlist extends Model
{
    public $dates = ['publish_date'];

    public $guarded = [];

    public $with = ['user'];

    public function getExcerptAttribute(): string
    {
        return str_limit($this->text, 100);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
