<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class Centro_de_servicoController extends Controller
{
    public function index(){

        $search = request('search');
        if($search){
            $servicos = Servico::where([['NomeDoServiço','like','%'.$search.'%']])->get();
        }else{
            $servicos = Servico::all();
        }
        
        return view('index',['servicos'=> $servicos, 'search'=>$search]);
    }
    public function sobre(){
        return view('sobre');
    }
    public function carrinho(){
        return view('carrinho');
    }
    public function voucher(){
        return view('voucher');
    }
    public function detalhes($id){
        $servico = Servico::findOrFail($id);
        return view('detalhes',['servico'=>$servico]);
    }
    public function dashboard(){
        $user = auth()->user();

        $servicos = $user->servicos;
        return view('dashboard',['servicos'=>$servicos]);
    }
    
    
}
