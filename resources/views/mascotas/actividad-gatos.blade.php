@extends('mascotas.plantilla-mascotas.plantilla-gatos')
@section('gatos')
<section class="fondoGatos">
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-12 text-center">
                <h3 style="font-size:40px; color: #641d69;">Información</h3>
                <form action="{{Route('resultado-gatos')}}" method="get">
                    <input type="hidden"  name="nombre" value="{{$actividad->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$actividad->seleccionaMascotas}}">
                    <input type="hidden"  name="edad" value="{{$actividad->edad}}">
                    <input type="hidden"  name="tamañoMascota" value="{{$actividad->tamañoMascota}}">
                    <input type="hidden"  name="comida" value="{{$actividad->comidaGatos}}">
                    <div class="form-group">
                        <label class="label" style="color: #641d69;">Peso de {{$actividad->nombre}}</label>
                        <input type="text" class="input-violeta" name="peso" placeholder="4 kg">
                    </div>
                    <div class="form-group">
                        <label class="label" style="color: #641d69;">Actividad</label>
                        <select class="input-violeta" name="actividad">
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="calcular-gatos" type="submit" value="Calcular">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="imgPerro" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard63.png/') }}" alt="" style="transform: translateY(-7.8em);" class="imgGatoDerecha">
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection