<?php
use App\Disco;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DiscoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disco::truncate();

        $disco = new Disco;
        $disco->id_numero = '1TS';
        $disco->targetaLogica = 'G002641A';
        $disco->modelo = 'MK3265GSX';
        $disco->marca = 'TOSHIBA';
        $disco->capacidad = '320GB';
        $disco->tipoEntrada = 'SATA';
        $disco->observaciones = 'ninguna';
        $disco->bandera = 1;
        $disco->save();

        $disco = new Disco;
        $disco->id_numero = '2TS';
        $disco->targetaLogica = 'G5B001851000-A';
        $disco->modelo = 'MK6037GSX';
        $disco->marca = 'TOSHIBA';
        $disco->capacidad = '60GB';
        $disco->tipoEntrada = 'SATA';
        $disco->observaciones = 'ninguna';
        $disco->bandera = 1;

        $disco->save();


        $disco = new Disco;
        $disco->id_numero = '3TS';
        $disco->targetaLogica = 'G002825A';
        $disco->modelo = 'MK3259GSXP';
        $disco->marca = 'TOSHIBA';
        $disco->capacidad = '320GB';
        $disco->tipoEntrada = 'SATA';
        $disco->observaciones = 'ninguna';
        $disco->bandera = 1;
        $disco->save();


        // $disco = new Disco;
        // $disco->id_numero = '4TS';
        // $disco->targetaLogica = 'G002439-0A';
        // $disco->modelo = 'MK5055GSX';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '500GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();



        // $disco = new Disco;
        // $disco->id_numero = '5TS';
        // $disco->targetaLogica = 'G002439-0A';
        // $disco->modelo = 'MK1655GSX';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '160GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();



        // $disco = new Disco;
        // $disco->id_numero = '6TS';
        // $disco->targetaLogica = 'G002641';
        // $disco->modelo = 'MK2565GSX';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '250GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();


        // $disco = new Disco;
        // $disco->id_numero = '7TS';
        // $disco->targetaLogica = 'G002825A';
        // $disco->modelo = 'MK1676GSX';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '160GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();



        // $disco = new Disco;
        // $disco->id_numero = '8TS';
        // $disco->targetaLogica = 'G003138';
        // $disco->modelo = 'MQ01ABD032';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '320GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();



        // $disco = new Disco;
        // $disco->id_numero = '9TS';
        // $disco->targetaLogica = 'G002825';
        // $disco->modelo = 'MK6476GSX';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '640GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();



        // $disco = new Disco;
        // $disco->id_numero = '10TS';
        // $disco->targetaLogica = 'G002217A';
        // $disco->modelo = 'MK1246GSX';
        // $disco->marca = 'TOSHIBA';
        // $disco->capacidad = '120GB';
        // $disco->tipoEntrada = 'SATA';
        // $disco->observaciones = 'ninguna';
        // $disco->bandera = '';
        // $disco->save();


        
    }
}
