<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Parsedown;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Playlist extends Model
{
    use Searchable,
        HasSlug;

    public $dates = ['publish_date'];

    public $guarded = [];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getFormattedTextAttribute()
    {
        return (new Parsedown())->text($this->text);
    }

    public function searchableAs()
    {
        return config('scout.algolia.index');
    }
}
