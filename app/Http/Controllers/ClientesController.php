<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function create(){
        return view('clientes.create'); 
     }
 
     public function store(Request $request){
        Cliente::create([
            'cliente' => $request->cliente,
            'descricao' => $request->descricao,
            'data' => $request->data,
            'valor' => $request->valor, 
        ]);
        return "Recibimento Cadastrado com Sucesso";    
        
     }

     public function show(){
        $clientes = Cliente::all();
        return view('clientes.todos',['clientes' => $clientes]);
    }

    public function saldo(){
        $clientes = Cliente::all();
        $saldo = 0;
        foreach($clientes as $cliente){
            $saldo = $saldo + $cliente->valor;
        }
        return '<h1>Sando da em Conta: '.$saldo.'</h1>';
    }

    public function destroy($id){
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return "Cliente excluido com sucesso.";

    }

    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar',['cliente'=> $cliente]);

    }
    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'cliente'=> $request->cliente,
            'descricao'=> $request->descricao,
            'data'=> $request->data,
            'valor'=> $request->valor,
        ]);
        return "Cliente atualizado com sucesso.";
    }
}
