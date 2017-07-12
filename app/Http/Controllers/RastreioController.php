<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rastreio;

class RastreioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Geral';
        $rastreios = Rastreio::paginate(10);
        return view('pages.rastreio.index', compact(['rastreios', 'titulo']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rastreio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['dt_carregamento'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['dt_carregamento']);
        $request['previsao_chegada'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['previsao_chegada']);
        $request['data_chegada'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['data_chegada']);
        $request['saida_terminal'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['saida_terminal']);

        $rastreio = Rastreio::create($request->all());

        return response()->redirectToRoute('rastreio.index');
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
        $rastreio = Rastreio::findOrFail($id);
        return view('pages.rastreio.edit', compact('rastreio'));
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
        $request['dt_carregamento'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['dt_carregamento']);
        $request['previsao_chegada'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['previsao_chegada']);
        $request['data_chegada'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['data_chegada']);
        $request['saida_terminal'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['saida_terminal']);

        $rastreio = Rastreio::findOrFail($id);
        $rastreio->update($request->all());
        return response()->redirectToRoute('rastreio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rastreio = Rastreio::find($id);
        $rastreio->delete();

        return response()->redirectToRoute('rastreio.index');
    }
}
