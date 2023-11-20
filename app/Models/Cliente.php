<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    use HasFactory;
    public function listaReservas(int $cliente_id)
    {

        //Busca na tabela clientes do db as reservas quando o id é igual ao cliente_id recebido como parametro.
       //O retorno aqui trás tambem dados das reservas dos clientes que possuim seu id na tabela de reservas pois foi feito um join.

        $cliente_reservas = DB::table('clientes')
            ->join('reservas', 'clientes.id', '=', 'reservas.cliente_id')
            ->where('cliente_id', '=', $cliente_id)
            ->get();
        return $cliente_reservas;
    }
}
