<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{
    function index()
    {
        $produtos = Produto::orderBy('created_at', 'desc')->get();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    function adicionar()
    {
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        return view('produtos.form', ['categorias' => $categorias]);
    }

    function gravar(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        $produto->valor = (float) $request->input('valor');
        $produto->save();
        $produto->categorias()->sync($request->input('categoriasMarcadas'));
        return redirect('produtos')->with('success', 'O produto foi gravado com sucesso!');
    }
    function editar(Request $request)
    {
        $produto = Produto::findOrFail($request->input('id'));
        $categoriasMarcadas = $produto->categorias()->get();
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        return view('produtos.edit', compact(['produto', 'categorias', 'categoriasMarcadas', 'id']));
    }

    function salvarEdicao(Request $request) {
        $produto = Produto::findOrFail($request->input('id'));
        $produto->nome = $request->input('nome');
        $produto->valor = (float) $request->input('valor');
        $produto->save();
        $produto->categorias()->sync($request->input('categoriasMarcadas'));

        return redirect('produtos')->with('success', 'O produto foi editado!');
    }

    function deletar(Request $request) {
        $produto = Produto::findOrFail($request->input('id'));
        $produto->delete();
        return redirect('produtos')->with('danger', 'O produto foi deletado!');
    }
}
