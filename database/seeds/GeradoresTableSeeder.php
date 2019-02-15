<?php

use Illuminate\Database\Seeder;

class GeradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Gerador::class, 106)->create();
    }
}
