<?php

use Illuminate\Database\Seeder;

class SalasPericiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\SalaPericia::class, 90)->create();
    }
}
