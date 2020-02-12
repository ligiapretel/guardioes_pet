<?php

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
        DB::statement('set foreign_key_checks = 0');
        
        $this->call(UserTableSeeder::class);

        $this->call(AdTableSeeder::class);

        $this->call(GuardianTableSeeder::class);

        $this->call(NgoTableSeeder::class);

        $this->call(AdministratorsTableSeeder::class);

        DB::statement('set foreign_key_checks = 1');
    }
}
