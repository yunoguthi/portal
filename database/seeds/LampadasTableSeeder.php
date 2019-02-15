<?php

use Illuminate\Database\Seeder;

class LampadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Lampada::class, 53000)->create();
    }
}
