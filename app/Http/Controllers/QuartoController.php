<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Quarto;
use Illuminate\Support\Facades\Cache;

class QuartoController extends Controller
{

    /* Protegendo rotas utilizando o middleware de pelido auth direto no __construct. 
    Todas as rotas do Controller passarão por autenticação.*/
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //Busca todos os quartos e cliente no db
        $quartos = Quarto::all();
        $clientes = Cliente::all();

        //Redirecoina para a view index passando as variaveis quartos e clentes.
        return view('index', compact(['quartos', 'clientes']));
    }
    public function listarQuartos()
    {
        //Busca todos os quartos no db
        $quartos = Quarto::all();

        //Redirecoina para a view quartos passando a variavel quartos.
        return view('quartos', compact('quartos'));
    }


    public function listarDiponiveis()
    {
        $expiracao = 60; //tempo de validade do armazenamento dos dados em segundos.


        //retorna o valor da Key para a variavel quartosDisponiveis. caso não exista valor executa a função
        $quartosDisponiveis =   Cache::remember('quartos_disponiveis', $expiracao, function () {


            /*  Busca os quartos que possuem o atributo 'disponivel' igual a 'true' no banco de 
                dados e guarda na varialvel quartosDisponiveis.*/

            //Só é execudado caso o dado não seja encontrado na cache.
            return Quarto::select('*')
                ->where('disponivel', '=', true)->get();
        });


        //Redirecoina para a view disponiveis passando a variavel quartosDisponiveis.
        return view('disponiveis', compact('quartosDisponiveis'));
    }
}
