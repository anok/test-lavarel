<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriaController extends Controller
{
    function index()
    {
        $categorias = Categoria::orderBy('created_at', 'desc')->get();
        return view('categorias.index', ['categorias' => $categorias]);
    }

    function adicionar() {
        return view('categorias.form');
    }

    function gravar(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('categorias')->with('success', 'A categoria foi gravada!');
    }

    function editar(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        return view('categorias.edit', compact('categoria', 'id'));
    }

    function salvar(Request $request) {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('categorias')->with('success', 'A categoria foi editada!');
    }

    function deletar(Request $request) {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->delete();
        return redirect('categorias')->with('danger', 'A categoria foi deletada!');
    }
}
