<?php

use Illuminate\Database\Seeder;

class ArquivosJudiciaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\ArquivoJudicial::class, 135)->create();
    }
}
