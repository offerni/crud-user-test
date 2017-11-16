<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use App\User;

class ContatoController extends Controller
{
    public function adicionar($id){

        return view('contatos.adicionar', compact('id'));
    }

    public function salvar(Request $req, $id){ // encontra o id do usuario e salva os dados do contato vinculado a ele
        $dados = $req->all();
        $user = User::find($id);
        $user->contatos()->create($dados);
        return redirect()->route('index');
    }

    public function editar($id){
        $registro = Contato::find($id);
        return view('contatos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Contato::find($id)->update($dados);
        $registros = User::all();

        return view('index', compact('registros'));
    }

    public function deletar($id){
        Contato::find($id)->delete();
        return redirect()->route('index');
    }
}
