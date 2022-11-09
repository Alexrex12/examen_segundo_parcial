<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function fFormulario(){
        return view ('formulario');
    }

    function fConsultas(){
        return view ('consultas');
    }

    public function procesarRecuerdos(validadorForm1 $req){
        //return $req->all();
        return redirect('/')->with('confirmacion','Datos ingresados correctamente');
    }
}
