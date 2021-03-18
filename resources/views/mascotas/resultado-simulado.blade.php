@extends('mascotas.plantilla-mascotas.mascotas')
@section('contenido')
<section class="section" style="height:auto;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <form>
                    <input type="hidden"  name="nombre" value="{{$resultado->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$resultado->seleccionaMascotas}}">
                    <input type="hidden"  name="edad" value="{{$resultado->edad}}">
                    <input type="hidden"  name="tamañoMascota" value="{{$resultado->tamañoMascota}}">
                    <input type="hidden"  name="comida" value="{{$resultado->comida}}">
                    <input type="hidden" name="peso" value="{{$resultado->peso}}" placeholder="4 kg">
                    <input type="hidden" name="actividad" value="{{$resultado->actividad}}">
                </form>
            </div>
            <div class="col-6 offset-3 mt-4 fondo-fucsia">
                <p class="mb-0 parrafoBlancoResultadoPerro" style="line-height: 0.4;">sabor a</p>
                <h2 class="parrafoBlancoResultadoPerro" style="font-size: 23px;">{{$resultado->comida}}</h2>
            </div>
            <div class="col-12 mt-4 text-center">
                <h3>Recomendación</h3>
                <p class="parrafoEdad" style="font-size:25px">para {{$resultado->nombre}}</p>
            </div>
            <div class="col-12 requerimiento">
                <p class="label" style="font-size: 21px; width:200px; line-height: 1.3;"><strong>Requerimiento <br> energético diario</strong></p>
                <div class="fondoVerde mb-3">{{$redondeo}} Cal</div>
            </div>
            <div class="col-12 requerimiento">
                <p class="label" style=" width:200px; font-size: 21px;"><strong>Consumo diario</strong></p>
                <div class="fondoVerde">{{$redondeaDos}} g/Día</div>
            </div>
            <div class="col-10 offset-1 mt-4 text-center">
                <p style="font-size: 16px;">Esta cantidad se debe dividir en al menós 2 porciones por día.</p>
            </div>
            <div class="col-4 offset-4 p-0 text-center">
                <p class="fondoVerdeDos"><strong>Presentaciones</strong></p>
            </div>
            <div class="col-12 text-center" id="imgPresentacion">
                <img src="{{ asset('/img/mascotas/bulto-800g.png/') }}" alt="" style="width: 160px;">
            </div>
            <div class="col-4 text-right">
                <p class="pesosComidaPerros"><strong>500 g</strong></p>
            </div>
            <div class="col-4 text-center">
                <p class="pesosComidaPerros"> <strong>15 kg</strong></p>
            </div>
            <div class="col-4">
                <p class="pesosComidaPerros"><strong>30 kg</strong></p>
            </div>
        </div>
    </div>
</section>
<section class="imgPerro" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard57.png/') }}" alt="" style="float:left; transform: translateY(-8.1em);" class="imgNaranjaDerecha">
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    if($('input[name=seleccionaMascotas]').val() == 'perros'){
    $('.bannerCan').css({'display':'block'});
    $('.bannerInicio').css({'display':'none'});
}else if($('input[name=seleccionaMascotas]').val() == 'gatos'){
    $('.bannerCat').css({'display':'block'});
    $('.bannerInicio').css({'display':'none'});
}
</script>
@endsection