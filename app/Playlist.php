<?php

namespace App;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
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

    public $with = ['user'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('orderOnPublishDate', function (Builder $builder) {
            $builder->orderBy('publish_date', 'desc');
        });
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getExcerptAttribute(): string
    {
        return str_limit($this->text, 100);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function searchableAs()
    {
        return config('scout.algolia.index');
    }

    public function updateFromRequest(PlaylistRequest $request)
    {
        $this->name = $request->name;
        $this->text = $request->text;
        $this->publish_date = Carbon::createFromFormat('d.m.Y', $request->publish_date);
        $this->user_id = auth()->user()->id;

        $this->save();
    }
}
