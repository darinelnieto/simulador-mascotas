<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class mascotasController extends Controller{
    function can(){

        return view('mascotas/nombreMascotas');
    }
    function edad(Request $request){
        $mascota = $request;
        return view('mascotas/form-edad', compact('mascota'));
    }
    
    function tamaño(Request $request){
        $masco = $request;
        return view('mascotas/form-tamaño', compact('masco'));
    }
    function comida(Request $request){
        $comida = $request;
        return view('mascotas/selecciona-comida', compact('comida'));
    }
    function actividad(Request $request){
        $actividad = $request;
        return view('mascotas/form-actividad', compact('actividad'));
    }
    function resultadoSimulado(Request $request){
        $peso = $request->peso;
        $tamaño = $request->tamañoMascota;

        $relacionCaAdul = $peso / $tamaño;

        $exponeUno = pow($peso , 0.75);

        $relacionEM = 130 * $exponeUno ;

        $redondeo = round($relacionEM, 2);

         $exponer = -0.87 * $relacionCaAdul;

        $exponeDos = pow(2.718, $exponer);

        $continuaOperacion = $exponeDos -0.1;

        $energia = $relacionEM * 3.2 * $continuaOperacion;

        $comida = $energia*1000/3403;

        $redondeaDos = round($comida, 1);
        $resultado = $request;
        return view('mascotas/resultado-simulado', compact('resultado', 'redondeo', 'redondeaDos'));
    }
    // gatos
    function tamañoGatos(Request $request){
        $masco = $request;
        return view('mascotas/tamaño-gatos', compact('masco'));
    }

    function comidaGatos(Request $request){
        $comida = $request;
        return view('mascotas/comida-gatos', compact('comida'));
    }

    function actividadGatos(Request $request){
        $actividad = $request;
        return view('mascotas/actividad-gatos', compact('actividad'));
    }

    function resultadoGatos(Request $request){
           $peso = $request->peso;
           $tamaño = $request->tamañoMascota;

           $relacionCaAdul = $peso / $tamaño;

           $exponeUno = pow($peso , 0.75);

           $relacionEM = 130 * $exponeUno ;

           $redondeo = round($relacionEM, 2);

            $exponer = -0.87 * $relacionCaAdul;

           $exponeDos = pow(2.718, $exponer);

           $continuaOperacion = $exponeDos -0.1;

           $energia = $relacionEM * 3.2 * $continuaOperacion;

           $comida = $energia*1000/3403;

           $redondeaDos = round($comida, 1);

      $resultado = $request;
        return view('mascotas/resultado-gatos', compact('resultado', 'redondeo', 'redondeaDos'));
    }
}
?>