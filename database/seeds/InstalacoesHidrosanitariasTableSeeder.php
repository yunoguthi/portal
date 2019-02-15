<?php

use Illuminate\Database\Seeder;

class InstalacoesHidrosanitariasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\InstalacaoHidrosanitaria::class, 5300)->create();
    }
}
