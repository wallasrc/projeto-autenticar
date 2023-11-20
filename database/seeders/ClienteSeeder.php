<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserindo dados no db com os seeders
        DB::table('clientes')->insert(['nome'=>'joão', 'email'=>'emdvadfdreihl@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'maria', 'email'=>'emdvadfdfhdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'eline', 'email'=>'emdhvasddfdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'joão', 'email'=>'emdvadfdhsfdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'joão', 'email'=>'emdvaddsfhhdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'joão', 'email'=>'emdvaddshffdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'joão', 'email'=>'emdvadfdsffdsghdreil@mail.com','telefone'=>1111123]);
        
    }
}
