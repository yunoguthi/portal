<?php

use Illuminate\Database\Seeder;

class SistemasVrfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\SistemaVrf::class, 72)->create();
    }
}
