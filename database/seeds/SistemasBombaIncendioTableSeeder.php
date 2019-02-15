<?php

use Illuminate\Database\Seeder;

class SistemasBombaIncendioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\SistemaBombaIncendio::class, 427)->create();
    }
}
