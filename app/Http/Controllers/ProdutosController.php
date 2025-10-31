<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:100',
            'qtd' => 'required|integer',
            'precoUnitario' => 'required|numeric',
            'precoVenda' => 'required|numeric',
        ]);

        Produtos::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto criado!');
    }

    public function show($id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    public function edit($id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:100',
            'qtd' => 'required|integer',
            'precoUnitario' => 'required|numeric',
            'precoVenda' => 'required|numeric',
        ]);

        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado!');
    }

    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído!');
    }
}