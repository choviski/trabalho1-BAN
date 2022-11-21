<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function inicio(Request $request)
    {
        $mensagem = $request->session()->get("mensagem");
        $criado = $request->session()->get("criado");
        return view("welcome")->with(["mensagem" => $mensagem, "criado" => $criado]);
    }

    public function index()
    {
        $usuarios = Usuario::all();

        return view("usuario.index")->with(['usuarios' => $usuarios]);
    }

    public function entrar(Request $request)
    {

        $usuario = Usuario::where('login', '=', $request->login)->first();
        if (!$usuario) {
            $request->session()->flash("mensagem", "Usuario não cadastrado");
            return redirect()->back();
        }

        if ($usuario->senha == $request->senha) {
            $request->session()->put("usuario", $usuario);

            if($usuario->tipo==2) {
                return redirect()->route("cadastros");
            }else{
                return redirect()->route("paginaInicial");
            }
        }

        $request->session()->flash("mensagem", "Usuario ou senha incorretos");
        return redirect()->back();
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        $endereco = $this->createEndereco($request);

        $user = Usuario::create([
            'login' => $request->login,
            'senha' => $request->senha,
            'email' => $request->email,
            'tipo' => $request->tipo,
        ]);

        $this->createCliente($request, $endereco, $user);

        $request->session()->flash("criado", "Usuario criado com sucesso");

        return redirect()->route('welcome');

    }

    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario.show')->with(['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario.edit')->with(['usuario' => $usuario]);
    }

    public function destroy(Request $request)
    {
        $usuario = Usuario::find($request->id);
        if ($usuario->cliente) {
            $usuario->cliente->forceDelete();
        }
        $usuario->forceDelete();
        return redirect()->route('usuario.index');
    }

    public function update($id, Request $request)
    {
        Usuario::find($id)->update($request->all());

        return redirect()->route('usuario.index');
    }

    private function createEndereco(Request $request): Endereco
    {
        return Endereco::create([
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'complemento' => $request->complemento,
            'cidade' => $request->cidade,
        ]);
    }

    private function createCliente(Request $request, Endereco $endereco, Usuario $usuario): void
    {
        Cliente::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'id_usuario' => $usuario->id,
            'id_endereco' => $endereco->id
        ]);
    }
}
