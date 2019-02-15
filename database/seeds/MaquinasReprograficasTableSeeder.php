<?php

use Illuminate\Database\Seeder;

class MaquinasReprograficasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\MaquinaReprografica::class, 676)->create();
    }
}
