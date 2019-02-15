<?php

use Illuminate\Database\Seeder;

class SpdasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Spda::class, 800)->create();
    }
}
