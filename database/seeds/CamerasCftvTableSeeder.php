<?php

use Illuminate\Database\Seeder;

class CamerasCftvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\CameraCftv::class, 680)->create();
    }
}
