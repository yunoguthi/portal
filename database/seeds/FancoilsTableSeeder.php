<?php

use Illuminate\Database\Seeder;

class FancoilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Fancoil::class, 50760)->create();
    }
}
