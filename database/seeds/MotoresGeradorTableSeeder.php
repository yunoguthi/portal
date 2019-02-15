<?php

use Illuminate\Database\Seeder;

class MotoresGeradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\MotorGerador::class, 318)->create();
    }
}
