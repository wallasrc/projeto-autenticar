<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserindo dados no db com os seeders
        DB::table('reservas')->insert(['data_checkin'=>'2024-12-15', 'data_checkout'=>'2024-12-20'
        ,'quarto_id'=>1, 'cliente_id'=>1]);  
        DB::table('reservas')->insert(['data_checkin'=>'2024-12-20', 'data_checkout'=>'2024-12-30'
        ,'quarto_id'=>1, 'cliente_id'=>2]); 
        DB::table('reservas')->insert(['data_checkin'=>'2024-12-19', 'data_checkout'=>'2024-12-25'
        ,'quarto_id'=>1, 'cliente_id'=>2]);  

    }
}
