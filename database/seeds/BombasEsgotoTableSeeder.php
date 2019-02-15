<?php

use Illuminate\Database\Seeder;

class BombasEsgotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\BombaEsgoto::class, 167)->create();
    }
}
