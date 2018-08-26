<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'freek@spatie.be',
            'password' => bcrypt('secret'),
            'name' => 'Freek Van der Herten',
        ]);
    }
}
