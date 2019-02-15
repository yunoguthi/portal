<?php

use Illuminate\Database\Seeder;

class CelasReuPresoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\CelaReuPreso::class, 113)->create();
    }
}
