<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public $dates = ['publish_date'];

    public $guarded = [];

    public function getExcerptAttribute(): string
    {
        return str_limit($this->text, 100);
    }
}
