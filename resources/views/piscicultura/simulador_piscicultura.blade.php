@extends('piscicultura.plantilla.plantillaPiscicultura')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{ route('piscicultura_simulado')}}" method="get">
                {{ csrf_field() }}
                <input type="hidden" name="id_especie" value="{{$id_especie}}">
                <div class="tituloSim">
                    <h1>{{$clave->especie}}</h1>
                </div>
                <div class="row margen-neg-izq">
                    <div class="col-2 col-md-1 col-xl-2"></div>
                    <div class="col-4 col-md-5 col-xl-4 pt-4">
                        <h3 class="txtItem">Cantidad de Peces</h3>
                    </div>
                    <div class="col-6 margen-ex">
                        <input id="cantPeces" class="txtInput" type="number" name="inputCantPeces">
                    </div>
                    <div class="col-2 col-md-1 col-xl-2"></div>
                    <div class="col-4 col-md-5 col-xl-4 pt-4">
                        <h3 class="txtItem">Temperatura del Agua</h3>
                    </div>
                    <div class="col-6 margen-int">
                        <input id="tempAgua" class="txtInput" type="number" step="any" name="inputTempAgua" min="{{$rangos->first()->min_temp}}" max="{{$rangos->first()->max_temp}}" oninvalid="this.setCustomValidity('La temperatura tiene un rango de {{$rangos->first()->min_temp}} a {{$rangos->first()->max_temp}} °C')" oninput="setCustomValidity('')">
                    </div>
                    <div class="col-2 col-md-1 col-xl-2"></div>
                    <div class="col-4 col-md-5 col-xl-4 pt-4">
                        <h3 class="txtItem">Peso Promedio (gramos)</h3>
                    </div>
                    <div class="col-6 margen-int">
                        <input id="pesoProm" class="txtInput" type="number" step="any" name="inputPesoProm" min="0.5" max="{{$rangos->first()->peso_fin}}" oninvalid="this.setCustomValidity('El peso tiene un rango de 0.5 a {{$rangos->first()->peso_fin}} g')" oninput="setCustomValidity('')">
                    </div>
                    <div class="col-2 col-md-1 col-xl-2"></div>
                    <div class="col-4 col-md-5 col-xl-4 pt-4">
                        <h3 class="txtItem">Peso Final (gramos)</h3>
                    </div>
                    <div class="col-6 margen-int">
                        <input id="pesoFinal" class="txtInput" type="number" step="any" name="inputPesoFinal" min="0.5" max="{{$rangos->first()->peso_fin}}" oninvalid="this.setCustomValidity('El peso tiene un rango de 0.5 a {{$rangos->first()->peso_fin}} g')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="text-center">
                    <input class="btnSubmit2" type="submit" value="Simular">
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 text-center centrado-vertical">
            <img class="bannerDir" id="imgAguas" src="{{ $clave->imgClave }}">
            <img src="{{ asset('/img/logosEscritorioNutricion.png/') }}" width="200px" class="mt-3">
        </div>
    </div>
</div>

@endsection