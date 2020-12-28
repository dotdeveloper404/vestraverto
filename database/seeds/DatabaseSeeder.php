<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class, 10)->create();

        //User::factory(10)->create();
        //$this->call(UserSeeder::class);
    }
}
