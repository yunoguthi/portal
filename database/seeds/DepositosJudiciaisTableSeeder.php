<?php

use Illuminate\Database\Seeder;

class DepositosJudiciaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portaldf\Models\Admpredial\DepositoJudicial::class, 50325)->create();
    }
}
