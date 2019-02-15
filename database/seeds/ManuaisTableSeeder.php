<?php

use Illuminate\Database\Seeder;

class ManuaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Manual::class, 888)->create();
    }
}
