<?php

use Illuminate\Database\Seeder;

class SelfsAguaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\SelfAgua::class, 350)->create();
    }
}
