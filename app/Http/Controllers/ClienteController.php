<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Protegendo rotas utilizando o middleware de pelido auth direto no __construct. 
    //Todas as rotas do Controller passarão por autenticação.
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        //Guarda em cliente_id o cliente_id que veio pela Request
        $cliente_id = $request->input('cliente_id');
        $reservasDB = new Cliente(); //Cria instância de Cliente

        //Guarda o retorno da função listaReservas em cliente_reservas
        $cliente_reservas =  $reservasDB->listaReservas($cliente_id); 

        //Redirecoina para a view cliente-reservas passando a variável cliente_reservas.
        return view('cliente-reservas', compact('cliente_reservas'));
    }
}
