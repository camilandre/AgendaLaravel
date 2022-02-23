<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }

    public function listado() {
        return view('categorias/listado-categorias', ['categorias'=> Categoria::all()]);
    }

    public function agregar()
    {
        return view('categorias/agregar');
    }

    public function insertar(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required'
        ]);
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect('/categorias');
    }

    public function editar(Categoria $categoria) {
        return view('categorias/editar', ['categoria'=> $categoria]);
    }

    public function actualizar(Request $request, Categoria $categoria)
    {
        if(isset($_POST['eliminar'])) {
            $categoria->delete();
            return redirect('categorias');
        }
        else
        {
            $this->validate($request, [
                'nombre' => 'required'
            ]);
            $categoria->nombre = $request->nombre;
            $categoria->save();
            return redirect('categorias');
        }
    }

}
