<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index(){
        $registros = User::all();
        return view('index', compact('registros'));
    }

    public function salvar(Request $req){

        $dados = $req->all();
        $dados['password'] = bcrypt($dados['password']); // criptografa o password.
        $dados['password_confirmation'] = bcrypt($dados['password']); // criptografa o password_confirmation.

        if ($dados['data_nascimento']) {
            list($day, $month, $year) = sscanf($dados['data_nascimento'], "%d/%d/%d");

            if ($day < 10) {
                $day = 0 . $day;
            }

            if ($month < 10) {
                $month = 0 . $month;
            }

            $dados['data_nascimento'] = $year . '-' . $month . '-' . $day;
        }


        if($req->hasFile('img_url')){ // Tratamento de imagem
            $imagem = $req->file('img_url');
            $num = rand(1111, 9999);
            $dir = "img/usuarios";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "img_url_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['img_url'] = $dir."/".$nomeImagem;
        }
        User::create($dados);
        return redirect()->route('index');
    }


    public function editar($id){
        $registro = User::find($id);
        return view('auth.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if ($dados['data_nascimento']) {
            list($day, $month, $year) = sscanf($dados['data_nascimento'], "%d/%d/%d");

            if ($day < 10) {
                $day = 0 . $day;
            }

            if ($month < 10) {
                $month = 0 . $month;
            }

            $dados['data_nascimento'] = $year . '-' . $month . '-' . $day;
        }

        if($req->hasFile('img_url')){ // Tratamento de imagem
            $imagem = $req->file('img_url');
            $num = rand(1111, 9999);
            $dir = "img/usuarios";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "img_url_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['img_url'] = $dir."/".$nomeImagem;
        }

        User::find($id)->update($dados);
        $registros = User::all();

        return view('index', compact('registros'));
    }

    public function deletar($id){
        User::find($id)->delete();
        return redirect()->route('index');
    }
}
