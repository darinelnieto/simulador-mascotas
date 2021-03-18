@extends('mascotas.plantilla-mascotas.mascotas')
@section('contenido')
<section class="section">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h3 style="font-size:40px">Información</h3>
                <form action="{{Route('resultado-simulado')}}" method="get">
                    <input type="hidden"  name="nombre" value="{{$actividad->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$actividad->seleccionaMascotas}}">
                    <input type="hidden"  name="edad" value="{{$actividad->edad}}">
                    <input type="hidden"  name="tamañoMascota" value="{{$actividad->tamañoMascota}}">
                    <input type="hidden"  name="comida" value="{{$actividad->comida}}">
                    <div class="form-group">
                        <label class="label">Peso de {{$actividad->nombre}}</label>
                        <input type="text" class="input-verde" name="peso" placeholder="4 kg">
                    </div>
                    <div class="form-group">
                        <label class="label">Actividad</label>
                        <select class="input-verde" name="actividad">
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="calcular" type="submit" value="Calcular">
                    </div>
                </form>
            </div>
        </div>
    </div>
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