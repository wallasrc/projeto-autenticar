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
        DB::table('clientes')->insert(['nome'=>'João', 'email'=>'emdvadfdreihl@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'Maria', 'email'=>'emdvadfdfhdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'Eline', 'email'=>'emdhvasddfdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'Ana', 'email'=>'emdvadfdhsfdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'Julia', 'email'=>'emdvaddsfhhdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'Aline', 'email'=>'emdvaddshffdreil@mail.com','telefone'=>1111123]);
        DB::table('clientes')->insert(['nome'=>'ilma', 'email'=>'emdvadfdsffdsghdreil@mail.com','telefone'=>1111123]);
        
    }
}
