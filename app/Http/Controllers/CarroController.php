<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;

class CarroController extends Controller
{
    
	# Controle para apresentar tela inicial
	public function index()
	{
		$carros = Carro::all();
        if(isset($carros))
            return view('carros', [
	            'carros' => $carros
	        ]);
        return response('Registro não encontrado!', 404);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::find($id);
        if(isset($carro))
            return json_encode($carro);
        return response('Carro não encontrado!', 404);
    }

    /**
     * Display all datas.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $carros = Carro::all();
        if(isset($carros))
            return view('contents.carros', [
	            'carros' => $carros
	        ]);
        return response('Registro não encontrado!', 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carro = new Carro();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->ano = $request->input('ano');
        $carro->save();
        return "Carro Cadastrado!";
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
        $carro = Carro::find($id);
        if(isset($carro))
            $carro->marca = $request->input('marca');
	        $carro->modelo = $request->input('modelo');
	        $carro->ano = $request->input('ano');
            $carro->save();
            return json_encode($carro);
        return response('Carro não encontrado!', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::find($id);
        if(isset($carro))
            $carro->delete();
            return response('OK', 200);
        return response('Carro não encontrado!', 404);
    }

}
