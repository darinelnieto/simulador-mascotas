@extends('piscicultura.plantilla.plantillaPiscicultura')
@section('content')
<!--<div class="escritorio">
    <div class="panelIzq">
        <h2 class="txtDesc">Línea de producto orientada a diferentes tipos de <br>
            productores; según su negocio y necesidad pecuaria. <br>Se compone de dos portafolios de producto.</h2>
        <img src="{{ asset('/img/divisor.png/') }}">

        <form action="{{ route('simulador_piscicultura')}}" method="get">
            {{ csrf_field() }}
            <input type="hidden" id="imgClave" name="imgClave" value="">
            <div class="contAguas">
                <input type="radio" name="AFC" value="AF" id="AF">
                <label class="txtAguas" for="AF">Aguas Frías</label>
                <input type="radio" name="AFC" value="AC" id="AC">
                <label class="txtAguas" for="AC">Aguas Cálidas</label>
            </div>
            <div>
                <h2>Especies</h2>
            </div>
            <div>
                <select id="especie" name="especie" required="required">


                </select>
            </div>
            <div>
                <input class="btnSubmit" type="submit" value="Ir al simulador">
            </div>
        </form>
    </div>
    <div class="panelDir">
        <img class="bannerDir" id="imgAguas" src="{{ asset('/img/bannerAguasCalidas.png/') }}">
        <img src="{{ asset('/img/logosEscritorio.png/') }}" width="200px">
    </div>
</div>-->
<div class="container-fluid fondo">
    <div class="row">
        <div class="col-12 col-md-6 text-center my-5">
            <h2 class="txtDesc">Línea de producto orientada a diferentes tipos de <br>
                productores; según su negocio y necesidad pecuaria. <br>Se compone de dos portafolios de producto.</h2>
            <img src="{{ asset('/img/divisor.png/') }}" width="100%">

            <form action="{{ route('simulador_piscicultura')}}" method="get">
                {{ csrf_field() }}
                <input type="hidden" id="imgClave" name="imgClave" value="">
                <div class="contAguas">
                    <input type="radio" name="AFC" value="AF" id="AF">
                    <label class="txtAguas" for="AF">Aguas Frías</label>
                    <input type="radio" name="AFC" value="AC" id="AC">
                    <label class="txtAguas" for="AC">Aguas Cálidas</label>
                </div>
                <div>
                    <h2>Especies</h2>
                </div>
                <div>
                    <select id="especie" name="especie" required="required">


                    </select>
                </div>
                <div>
                    <input class="btnSubmit" type="submit" value="Ir al simulador">
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 text-center centrado-vertical">
            <img class="bannerDir" id="imgAguas" src="{{ asset('/img/bannerAguasCalidas.png/') }}">
            <img src="{{ asset('/img/logosEscritorioNutricion.png/') }}" width="200px" class="mt-3">
        </div>
    </div>
</div>
@endsection