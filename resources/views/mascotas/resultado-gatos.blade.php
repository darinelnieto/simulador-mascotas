@extends('mascotas.plantilla-mascotas.plantilla-gatos')
@section('gatos')
<section class="fondoGat">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <form>
                    <input type="hidden"  name="nombre" value="{{$resultado->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$resultado->seleccionaMascotas}}">
                    <input type="hidden"  name="edad" value="{{$resultado->edad}}">
                    <input type="hidden"  name="tamañoMascota" value="{{$resultado->tamañoMascota}}">
                    <input type="hidden"  name="comida" value="{{$resultado->comidaGatos}}">
                    <input type="hidden"  name="peso" value="{{$resultado->peso}}">
                    <input type="hidden"  name="actividad" value="{{$resultado->actividad}}">
                </form>
            </div>
            <div class="col-12 mt-5 text-center">
                <h3 class="violeta">Recomendación</h3>
                <p class="parrafoEdadGato" style="font-size:25px">para {{$resultado->nombre}}</p>
            </div>
            <div class="col-12 requerimiento">
                <p style="color: #641d69; font-size: 21px; line-height: 1.3;"><strong>Requerimiento <br> energético diario</strong></p>
                <div class="fondovioleta mb-3">{{ $redondeo }} Cal</div>
            </div>
            <div class="col-12 requerimiento">
                <p class="violeta" style="color: #641d69; font-size: 21px;"><strong>Consumo diario</strong></p>
                <div class="fondovioleta">{{$redondeaDos}} g/Día</div>
            </div>
            <div class="col-10 offset-1 mt-4 text-center">
                <p style="font-size: 16px;">Esta cantidad se debe dividir en al menós 2 porciones por día.</p>
            </div>
            <div class="col-4 offset-4 p-0 text-center">
                <p class="fondoVioletaDos"><strong>Presentaciones</strong></p>
            </div>
            <div class="col-12 text-center">
                <img src="{{ asset('/img/mascotas/bulto .png/') }}" alt="" style="width: 160px;">
            </div>
            <div class="col-4 text-right">
                <p class="pesosComidaGatos"><strong>500 g</strong></p>
            </div>
            <div class="col-4 text-center">
                <p class="pesosComidaGatos"> <strong>15 kg</strong></p>
            </div>
            <div class="col-4">
                <p class="pesosComidaGatos"><strong>30 kg</strong></p>
            </div>
        </div>
    </div>
</section>
<section class="imgGato" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard-64.png/') }}" alt="" style="float:left;" class="imgGatoDerecha">
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection