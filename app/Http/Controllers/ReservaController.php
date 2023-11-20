<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Reserva;
use Illuminate\Http\Request;



class ReservaController extends Controller
{

    public function __construct()
    {
        /*  Protegendo rotas utilizando o middleware de pelido auth. 
        Todas as rotas do Controller passarão por autenticação.*/

        $this->middleware('auth');
    }

    public function listaReservas(Request $request)
    {

        //busca cliente da tabela qaundo o id é igual ao cliente_id recebino na Request
        $clienteDB = Cliente::find($request->input('cliente_id'));
        $cliente = $clienteDB->nome; //salva o nome do cliente na variavel cliente.

        $reserva = new Reserva();  //cria uma nova instancia de reserva 

        /*  chama o métodolistaReservas passando o cliente_id recebido pela Request e 
        quarda a resposta na variavel reservas.*/
        $reservas = $reserva->listaReservas($request->input('cliente_id'));

        //retorna pra a view reserva passando as variaveis para a view.
        return view('reservas', compact('reservas', 'cliente'));
    }

    public function listaReservasData(Request $request)
    {

        /* Buscando reservas no db quando a data de checkin é menor ou igaul que a data indicada.
         Esta reserva deve ter tambem a data de checkout maior ou igual à data indicada.*/

        $reservas =  Reserva::where('data_checkin', '<=', $request->input('data_indicada'))
            ->where('data_checkout', '>=', $request->input('data_indicada'))->get();

        return view('reservas-data', compact('reservas'));
    }
}
