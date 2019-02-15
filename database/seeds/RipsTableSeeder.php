<?php

use Illuminate\Database\Seeder;

class RipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Rip::class, 106)->create();
    }
}
