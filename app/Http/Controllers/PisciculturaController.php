<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class PisciculturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('piscicultura/piscicultura');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_simulador(Request $request)
    {
        //return $request;
        $clave = $request;
        $id_especie = DB::table('especie_piscicultura')->where('nombre', $request->especie)->value('id');
        $rangos = DB::table('especie_piscicultura')->select('peso_fin', 'max_temp', 'min_temp')
            ->where('id', $id_especie)->get();
        //return $rangos->first()->peso_fin;
        return view('piscicultura/simulador_piscicultura', compact('clave', 'id_especie', 'rangos'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_simulado(Request $request)
    {
        $data = $request;
        //return $request;
        //$num_etapa = DB::table('especie_piscicultura')->where('id', $request->id_especie)->value('num_etapas');

        $margen_prudencia=0;
        if($request->inputPesoFinal>7){
        $margen_prudencia=1;
    }
    if($request->inputPesoFinal>30){
        $margen_prudencia=5;
    }
    if($request->inputPesoFinal>172){
        $margen_prudencia=8;
    }

        $datos = DB::table('registro_piscicultura')->select('id_especie', 'peso_medio', 'semana', 'num_alimentacion_dia', 'biomasa', 'etapa')
            ->where('id_especie', $request->id_especie)
            ->orderBy('peso_medio', 'asc')
            ->where('peso_medio', '>=', $request->inputPesoProm)
            ->where('peso_medio', '<=', $request->inputPesoFinal - $margen_prudencia)->get();


        $etapa_final = DB::table('registro_piscicultura')->select('etapa')
            ->where('id_especie', $request->id_especie)
            ->orderBy('peso_medio', 'desc')
            ->where('peso_medio', '>=', $request->inputPesoProm)
            ->where('peso_medio', '<=', $request->inputPesoFinal - $margen_prudencia)->get();

        function etapa_fin($etapa_final)
        {
            foreach ($etapa_final as $item) {
                $dato = $item->etapa;
                return $dato;
            }
        }


        function data_actual($datos)
        {
            foreach ($datos as $dat) {
                $data_inicial[0] = $dat->etapa;
                $data_inicial[1] = $dat->biomasa;
                return $data_inicial;
            }
        }
        $data_inicial = data_actual($datos);
        $biomasa = $data_inicial[1];
        $etapa_actual = $data_inicial[0];
        //return $etapa_actual;

        $data_etapa = DB::table('etapas')->select('id_especie', 'nombre', 'producto', 'tip', 'bulto')
            ->where('id_especie', $request->id_especie)
            ->where('etapa', '>=', $etapa_actual)->get();

        //$alimento_etapa=DB::table('registro_piscicultura')->select('peso_medio','biomasa')
        //->where('id_especie', $data->especie_id)
        //->orderBy('peso_medio', 'asc')
        //->where('peso_medio', '>=' , $request->inputPesoProm)
        //->where('etapa', '=' , $datos->etapa)->get();

        //return $data_etapa;
        $temperatura = DB::table('temperatura_piscicultura')->select('porcentaje')->where('id_especie', $data->id_especie)
            ->orderBy('temperatura', 'asc')
            ->where('temperatura', '>=', $data->inputTempAgua)->first()->porcentaje;
        //return $temperatura;
        $totalAlimento = 0;
        $aux = 0;
        $datos->first()->peso_medio=$data->inputPesoProm;
        //return $datos;
        foreach ($datos as $etapa) {

            $aux = ($etapa->peso_medio * $data->inputCantPeces * ($etapa->biomasa / 100));
            $totalAlimento += ($aux / 1000) * ($temperatura / 100) * 7;
            //return $totalAlimento;
            //return $etapa->peso_medio.' '.$data->inputCantPeces.' '.($etapa->biomasa/100).' '.' 1000'.' '.($temperatura/100).' '.$totalAlimento.' '.$aux;
            $aux = 0;

            $alimento_dia = (($etapa->peso_medio * $data->inputCantPeces * ($etapa->biomasa / 100)) / 1000) * ($temperatura / 100);
            $etapa->alimento_dia = round($alimento_dia, 2);
            $etapa->alimento_semana = round(($alimento_dia * 7), 2);
        }




        $sacos = $totalAlimento / 40;

        $sacos = round($sacos, 2);
        //$totalAlimentoDia = round($totalAlimentoDia, 2);
        $totalAlimento = round($totalAlimento, 2);
        //return $totalAlimentoDia.' '.$totalAlimentoSem;
        $ulstep = etapa_fin($etapa_final);
        $inputCantPeces=$data->inputCantPeces;
        //return $inputCantPeces;
        return view('piscicultura/piscicultura_simulado', compact('data', 'datos', 'ulstep', 'inputCantPeces', 'data_etapa', 'etapa_actual',  'totalAlimento', 'sacos'));
    }


    public function generar_pdf(Request $request)
    {
        
        $datpdf=$request;
        //return $datpdf;
        if($datpdf->id_especie==3){
            $pdf = \PDF::loadView('piscicultura/pdf_piscicultura_truchas',compact('datpdf'));
        }else{
        $pdf = \PDF::loadView('piscicultura/pdf_piscicultura',compact('datpdf'));
        }
        return $pdf->download('Reporte_Cipa.pdf');
        //return view('piscicultura/pdf_piscicultura_truchas',compact('datpdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
