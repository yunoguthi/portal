<?php

use Illuminate\Database\Seeder;

class ImpostosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\Imposto::class, 5000)->create();
    }
}
