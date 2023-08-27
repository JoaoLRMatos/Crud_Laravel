<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roupa;

class RoupaController extends Controller
{
    public function store(Request $request)
    {
        Roupa::create([
            'produto' => $request->produto,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'tamanho' => $request->tamanho,
        ]);

        return redirect('/');
    }

    public function show($id_do_produto)
    {
        $produto = Roupa::findOrFail($id_do_produto);

        return view('mostrar_produto', ['produto' => $produto]);
    }

    public function edit($id_do_produto)
    {
        $produto = Roupa::findOrFail($id_do_produto);

        return view('editar_produto', ['produto' => $produto]);
    }

    public function update(Request $request, $id_do_produto)
    {
        $produto = Roupa::findOrFail($id_do_produto);
        $produto->produto = $request->produto;
        $produto->marca = $request->marca;
        $produto->modelo = $request->modelo;
        $produto->tamanho = $request->tamanho;
        $produto->save();

        return redirect('/produto');
    }

    public function destroy($id_do_produto)
    {
        $produto = Roupa::findOrFail($id_do_produto);
        $produto->delete();

        return redirect('/produto');
    }

    public function create()
    {
    return view('produto.create');
    }

    public function index()
    {
    $produtos = Roupa::all();
    return view('produto.index', ['produtos' => $produtos]);
    }


}
