<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurante = Restaurante::all();
        return view ('restaurante.index')->with('restaurante', $restaurante);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurante.create');

    }

    /**
     * Store a newly created resource in storage.
     */
   /* public function store(Request $request)
    {
        $input = $request -> all();
        Restaurante::create($input);
        return redirect('restaurante')->with('flash_message', 'Restaurante Adicionado!');

    }*/

    // Crie um novo objeto do modelo e defina os valores dos atributos
    public function store(Request $request){

        /*$restaurante = new Restaurante;
        $restaurante->nome = $request->nome;
        $restaurante->tipo_cozinha = $request->tipo_cozinha;
        $restaurante->localizacao = $request->localizacao;
        $restaurante->faixa_preco = $request->faixa_preco;*/

        // Salve o modelo no banco de dados
       // $restaurante->save();

        $input = $request -> all();
        Restaurante::create($input);
        return redirect('restaurante')->with('flash_message', 'Restaurante Adicionado!');


        // Crie um novo registro no banco de dados

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurante = Restaurante::find($id);
        return view('restaurante.show')->with('restaurante', $restaurante);

        $restaurant = Restaurant::with('menu')->find($id);

        return view('restaurants.show', ['restaurant' => $restaurant]);
    }
   


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurante = Restaurante::find($id);
        return view('restaurante.edit')->with('restaurante', $restaurante);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $restaurante = Restaurante::find($id);
        $input = $request->all();
        $restaurante->update($input);
        return redirect('restaurante')->with('flash_message', 'Restaurante Actualizado!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Restaurante::destroy($id);
        return redirect('restaurante')->with('flash_message', 'Restaurante Deletado!');
    }


}
