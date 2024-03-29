<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    
    public function index (){
        return view ('admin.dashboard');
    }

    public function listar_usuarios(){
        
        $lista_usuarios = User::all();
        //dd($lista_usuarios);
        return view('admin.user', compact('lista_usuarios'));
    }

    public function delete($id){
        $usuario = User::find($id);
        $usuario -> delete();
        return redirect()->back()->with ('mensaje','El Usuario Ha Sido Eliminado');

    }

    public function edit($id, Request $request){
        $usuario = User::find($id);
       
        $usuario->name = $request->name;
        $usuario->email = $request->email;

        $usuario->save();
        return redirect()->back()->with('mensaje', 'El usuario ha sido Actualizado');
        
    }

    public function update_user($id){
        $usuario = User::find($id);
        return view('admin.updateuser', compact('usuario'));
    }

}