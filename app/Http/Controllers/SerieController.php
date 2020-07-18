<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerieFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller {
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
        //return response($series);
    }

    public function create() {
        return view('series.create');
    }

    public function store(SerieFormRequest $request) {
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem', "A série {$serie->nome} foi adicionada com sucesso, seu código é: {$serie->id}");
        return redirect('/series');
    }

    public function destroy(Request $request) {
        Serie::destroy($request->id);
        $request->session()->flash('mensagem', "A série removida com sucesso.");
        return redirect('/series');
    }
}
