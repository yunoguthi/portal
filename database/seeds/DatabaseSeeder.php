<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //UsersTableSeeder::class,
            ImpostosTableSeeder::class,
            ElevadoresTableSeeder::class,
            AreasTableSeeder::class,
            ArquivosJudiciaisTableSeeder::class,
            BombasAguaServidaTableSeeder::class,
            BombasEsgotoTableSeeder::class,
            BombasRecalqueTableSeeder::class,
            DvrsTableSeeder::class,
            CelasReuPresoTableSeeder::class,
            CentraisAlarmeTableSeeder::class,
            CentraisTelefonicasTableSeeder::class,
            ChillersTableSeeder::class,
            DepositosJudiciaisTableSeeder::class,
            DocumentosTableSeeder::class,
            FancoilsTableSeeder::class,
            GeradoresTableSeeder::class,
            InstalacoesHidrosanitariasTableSeeder::class,
            LampadasTableSeeder::class,
            ManuaisTableSeeder::class,
            MaquinasReprograficasTableSeeder::class,
            MotoresGeradorTableSeeder::class,
            NobreaksTableSeeder::class,
            PlantasTableSeeder::class,
            RipsTableSeeder::class,
            SelfsAguaTableSeeder::class,
            SistemasBombaIncendioTableSeeder::class,
            SistemasVrfTableSeeder::class,
            SpdasTableSeeder::class,
        ]);
    }
}


