<?php

use Illuminate\Database\Seeder;

class BombasAguaServidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\BombaAguaServida::class, 121)->create();
    }
}
