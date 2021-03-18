@extends('mascotas.plantilla-mascotas.plantilla-gatos')
@section('gatos')
<section class="fondoGatos">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h3 class="violeta" style="font-size:40px; margin-bottom:.8em;">Tipo de comida</h3>
                <form action="{{Route('actividad-gatos')}}" id="form-comida-gatos">
                    <input type="hidden"  name="nombre" value="{{$comida->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$comida->seleccionaMascotas}}">
                    <input type="hidden"  name="edad" value="{{$comida->edadcat}}">
                    <input type="hidden" class="tamaño"  name="tamañoMascota" value="{{$comida->tamañoGato}}">
                    <label id="comidaGato">
                        <input type="radio" name="comidaGatos" class="radio" value="raza pequeña">
                        <p class="parrafoEdadGato" style="font-size:30px;">renombrar</p>
                        <img src="{{ asset('/img/mascotas/razas-pequeñas.png/') }}" alt="" style="width: 200px;">
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="imgPerro" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard-64.png/') }}" alt="" style="float:left; transform: translateY(-7.8em);" class="imgGatoDerecha">
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection