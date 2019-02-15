<?php

use Illuminate\Database\Seeder;

class CentraisTelefonicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\CentralTelefonica::class, 320)->create();
    }
}
