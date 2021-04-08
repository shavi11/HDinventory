<?php
use App\Compatible;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompatibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compatible::truncate();

        // $compatibles = new Compatible;
        // $compatibles-> tarjeta_logica = 'G002825A';
        // $compatibles->id_logica = '1';
        // $compatibles->save();

        // $compatibles = new Compatible;
        // $compatibles-> tarjeta_logica = 'G002825A';
        // $compatibles->id_logica = '2';
        // $compatibles->save();

        // $compatibles = new Compatible;
        // $compatibles-> tarjeta_logica = 'G003138A';
        // $compatibles->id_logica = '3';
        // $compatibles->save();

        // $compatibles = new Compatible;
        // $compatibles-> tarjeta_logica = 'G002825A';
        // $compatibles->id_logica = '4';
        // $compatibles->save();
    }
}
