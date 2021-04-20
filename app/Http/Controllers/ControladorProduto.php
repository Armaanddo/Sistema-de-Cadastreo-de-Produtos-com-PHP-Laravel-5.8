<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;
use App\Categoria;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Produto::all();
        return view ('produtos', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categoria::all();
        
        return view('novoproduto', compact('cats'));
    }

    public function carregarCategorias(){
        $cats = Categoria::orderBy('nome')->get()->lists('nome');
        if(isset($cats)){
            return view (['novoproduto'])->with('cats', $cats);
        } 

    }
    public function carregarCategoriaseditar(){
        $prods = Categoria::orderBy('nome')->get()->lists('nome');
        if(isset($prods)){
            return view (['editarproduto'])->with('prods', $prods);
        } 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prods = new Produto();
        $prods->nome = $request->input('nomeProduto');
        $prods->estoque = $request->input('estoque');
        $prods->preco = $request->input('preco');
        $prods->categoria_id = $request->input('categoriaProduto');
        $prods->save();
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->prods = Produto::find($id);
        if(isset($prods)){
            return view('editarproduto', compact('prods'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prods = Produto::find($id);
        if(isset($prods)){
            $prods->nome = $request->input('nomeProduto');
            $prods->estoque = $request->input('estoque');
            $prods->preco = $request->input('preco');
            $prods->categoria_id = $request->input('categoriaProduto');
            $prods->save();
            return redirect('/produtos');
        }else
        return response('Produto não encontrado',404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prods=Produto::find($id);
        if(isset($prods)){
            $prods->delete();
        }
        return redirect('/produtos');
    }
}
