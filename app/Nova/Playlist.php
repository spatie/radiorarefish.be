<?php

namespace App\Nova;

use Laravel\Nova\Fields\Date;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use App\Models\Playlist as PlaylistModel;

class Playlist extends Resource
{
    public static $model = PlaylistModel::class;

    public static $title = 'name';

    public static $search = [
        'name', 'text'
    ];

    public function fields(Request $request)
    {
        return [
            Text::make('Name')
                ->rules('required'),

            Markdown::make('Text')
                ->hideFromIndex()
                ->rules('required'),

            Date::make('Publish date')
                ->rules('required'),
        ];
    }
}
