<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuartoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserindo dados no db com os seeders
        DB::table('quartos')->insert(['numero' => 12, 'capacidade' => 4, 'preco_diaria' => 123]);
        DB::table('quartos')->insert(['numero' => 13, 'capacidade' => 6, 'preco_diaria' => 4123]);
        DB::table('quartos')->insert(['numero' => 112, 'capacidade' => 6, 'preco_diaria' => 4123]);
        DB::table('quartos')->insert(['numero' => 8, 'capacidade' => 2, 'preco_diaria' => 43, 'disponivel' => false]);
        DB::table('quartos')->insert(['numero' => 10, 'capacidade' => 2, 'preco_diaria' => 43]);
        DB::table('quartos')->insert(['numero' => 1, 'capacidade' => 4, 'preco_diaria' => 123]);
        DB::table('quartos')->insert(['numero' => 2, 'capacidade' => 4, 'preco_diaria' => 123, 'disponivel' => false]);

    }
}
