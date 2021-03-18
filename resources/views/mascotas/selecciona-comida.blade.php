@extends('mascotas.plantilla-mascotas.mascotas')
@section('contenido')
<section class="comida">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 text-center">
                <h3 style="font-size:40px; margin-bottom:.8em;">Tipo de comida</h3>
                <form action="{{Route('form-actividad')}}" id="form-comida">
                    <input type="hidden"  name="nombre" value="{{$comida->nombre}}"> 
                    <input type="hidden"  name="seleccionaMascotas" value="{{$comida->seleccionaMascotas}}">
                    <input type="hidden"  name="edad" value="{{$comida->edad}}">
                    <input type="hidden" class="tamaño"  name="tamañoMascota" value="{{$comida->tamañoMascota}}">
                    <label id="razasPequeñas">
                        <input type="radio" name="comida" class="radio" value="raza pequeña">
                        <p class="parrafoEdad" style="font-size:30px;">raza pequeña</p>
                        <img src="{{ asset('/img/mascotas/razas-pequeñas.png/') }}" alt="" style="width: 200px;">
                    </label>
                    <label class="razasmedianas">
                        <input type="radio" name="comida" class="radio" value="Carne y vegetales">
                        <p class="parrafoEdad" style="font-size:30px;">Carne y vegetales</p>
                        <img src="{{ asset('/img/mascotas/carne-vegetales.png/') }}" alt="" style="width: 200px; margin-bottom:.6em;">
                    </label>
                    <label class="razasmedianas">
                        <input type="radio" name="comida" class="radio" value="Pollo">
                        <p class="parrafoEdad" style="font-size:30px;">Pollo</p>
                        <img src="{{ asset('/img/mascotas/pollo.png/') }}" alt="" style="width: 200px; margin-bottom:.6em;">
                    </label>
                    <label class="razasmedianas">
                        <input type="radio" name="comida" class="radio" value="Carne ahumada">
                        <p class="parrafoEdad" style="font-size:30px;">Carne ahumada</p>
                        <img src="{{ asset('/img/mascotas/carne-ahumada.png/') }}" alt="" style="width: 200px; margin-bottom:.6em;">
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="imgPerro" style="position:absolute; width:100%;">
    <img src="{{ asset('/img/mascotas/Artboard57.png/') }}" alt="" style="transform: translateY(-8.1em);width: 100px; float:left;">
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

    if($('.tamaño').val() == '5'){
    $('#razasPequeñas').css({'display':'block'});
    $('.comida').css({'backgroundSize':'cover'});
    } else{
    $('.razasmedianas').css({'display':'block'});
    $('.comida').css({'backgroundSize':'contain'});
    }
</script>
@endsection