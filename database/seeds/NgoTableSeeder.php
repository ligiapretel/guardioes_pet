<?php

use Illuminate\Database\Seeder;

class NgoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ngos::class, 10)->create();
    }
}
