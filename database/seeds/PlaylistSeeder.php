<?php

use App\Playlist;
use Illuminate\Database\Seeder;
use Laravel\Scout\Searchable;

class PlaylistSeeder extends Seeder
{
    use Searchable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Playlist::class, 50)->create(['user_id' => 1]);
    }
}
