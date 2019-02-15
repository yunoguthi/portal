<?php

use Illuminate\Database\Seeder;

class CentraisAlarmeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\CentralAlarme::class, 113)->create();
    }
}
