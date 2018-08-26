<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Parsedown;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Http\Requests\PlaylistRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
