<?php

use Illuminate\Database\Seeder;

class ChillersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Chiller::class, 25380)->create();
    }
}
