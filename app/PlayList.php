<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    public $dates = ['publish_date'];

    public $guarded = [];
}
