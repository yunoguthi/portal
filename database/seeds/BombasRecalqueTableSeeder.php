<?php

use Illuminate\Database\Seeder;

class BombasRecalqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\BombaRecalque::class, 141)->create();
    }
}
