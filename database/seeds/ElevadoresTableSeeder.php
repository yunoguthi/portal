<?php

use Illuminate\Database\Seeder;

class ElevadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Elevador::class, 219)->create();
    }
}
