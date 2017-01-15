<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'kati frantz',
            'email' => 'kati@frantz.me',
            'password' => bcrypt('password')
        ]);
    }
}
