<?php

use Illuminate\Database\Seeder;

class PlantasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Planta::class, 8)->create();
    }
}
