<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentosController extends Controller
{
    public function create(){
        return view('pagamentos.create'); 
     }
 
     public function store(Request $request){
        Pagamento::create([
            'pagamento' => $request->pagamento,
            'descricao' => $request->descricao,
            'data' => $request->data,
            'valor' => $request->valor, 
        ]);
        return "Pagamento Cadastrado com Sucesso";    
        
     }

     public function show(){
        $pagamentos = Pagamento::all();
        return view('pagamentos.todos',['pagamentos' => $pagamentos]);
    }

    public function saldo(){
        $pagamentos = Pagamento::all();
        $saldo = 0;
        foreach($pagamentos as $pagamento){
            $saldo = $saldo + $pagamento->valor;
        }
        return '<h1>Sando da em Conta: '.$saldo.'</h1>';
    }

    
    public function edit($id){
        $pagamento = Pagamento::findOrFail($id);
        return view('pagamentos.editar',['pagamento'=> $pagamento]);

    }
    public function update(Request $request, $id){
        $pagamento = Pagamento::findOrFail($id);
        $pagamento->update([
            'pagamento'=> $request->pagamento,
            'descricao'=> $request->descricao,
            'data'=> $request->data,
            'valor'=> $request->valor,
        ]);
        return "Pagamento atualizado com sucesso.";
    }
    
}