<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use App\Models\Usuario as ModelsUsuario;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use models\usuario;
class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = ModelsUsuario::all();
        return view('albuns', compact('usuarios'));
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $regras = ([
            'titulo'=>'required',
            'autor'=> 'required',
            'areatexto'=>'required',
            'arquivo'=>'required'
        ]);
        $mensagens = ['require'=> 'O campo: attribute não pode ser nulo'];
        $request->validate($regras, $mensagens);
        $usuario = new ModelsUsuario();
        $usuario->titulo = $request->input('titulo');
        $usuario->autor = $request->input('autor');
        $usuario->historia = $request->input('areatexto');
        $usuario->imgcapa = $request->file('arquivo')->store('imagens', 'public');
        $usuario->save();
        return redirect('/albuns');

    }

  
    public function show($id)
    {
        $ushow = ModelsUsuario::find($id);
        return view('conteudo', compact("ushow"));
    }

   
    public function edit($id)
    {
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $usuario = ModelsUsuario::find($id);
        if(isset($usuario)){
            $foto = $usuario->imgcapa;
            Storage::disk('public')->delete($foto);
            $usuario->delete();
            return redirect('/albuns');
        }   
    }
}
