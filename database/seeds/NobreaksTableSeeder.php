<?php

use Illuminate\Database\Seeder;

class NobreaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Nobreak::class, 137)->create();
    }
}
