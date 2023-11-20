<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reserva extends Model
{
    use HasFactory;
    
    public function listaReservas(int $cliente_id)
    {

        //Busca na tabela reservas do db as reservas quando o cliente_id e igual 
        //ao cliente_id recebido como parametro.
 
        $reservas = DB::table('reservas')
            ->where('cliente_id', $cliente_id)
            ->get();

        return $reservas;
    }
}
