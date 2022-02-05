<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variante;

class VariantesCovidController extends Controller
{
    public function index() {
    
        $variantes = Variante::all();

        $argumentos = array();
        $argumentos['variantes'] = $variantes;

        return view('variantes.index', $argumentos);
    }

    public function create(){
        return view('variables.creat');
    }

    public function store(Request $request){
        $nuevaVariante = new Variante();
        $nuevaVariante-> lineage = $request -> input('lineaje');
        $nuevaVariante-> common_countries = $request -> input('common_countries');
        $nuevaVariante-> earliest_date = $request -> input('earliest_date');
        $nuevaVariante-> designated_number = $request -> input('designated_number');
        $nuevaVariante-> assignated_number = $request -> input('assignated_number');
        $nuevaVariante-> who_name = $request -> input('who_name');

        $nuevaVariante->save();
    }
}
