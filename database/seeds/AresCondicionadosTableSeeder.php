<?php

use Illuminate\Database\Seeder;

class AresCondicionadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\ArCondicionado::class, 15866)->create();
    }
}
