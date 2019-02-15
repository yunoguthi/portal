<?php

use Illuminate\Database\Seeder;

class DvrsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Dvr::class, 480)->create();
    }
}
