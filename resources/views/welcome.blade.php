<!DOCTYPE html>
<html>

<head>
    <title>Simuladores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/simuladores.css') }}" rel="stylesheet">
</head>

<body>
    <div class="Header">
        <div>
            <a class="logo" href="https://www.cipa.com.co/" target="_blank">
                <img class="backHeader" src="{{ asset('/img/logoCipa.png/') }}"></a>
        </div>
        <div>
            <h1 class="title">Simuladores</h1>
        </div>
    </div>
    <div class="Contbanners">
        <a href="{{ route('piscicultura')}}" target="_blank">
            <img src="{{ asset('/img/piscicultura/bannerAcuavit.png/') }}" width="300"></a>
        <a href="{{ route('nombreMascotas')}}">
            <img src="{{ asset('/img/piscicultura/bannerCipacan.png/') }}" width="300"></a>
        <a href="#">
            <img src="{{ asset('/img/piscicultura/bannerCipacat.png/') }}" width="300"></a>
    </div>
    <footer>
        <div class="contFooter1">
            <p class="linea">Línea de Servicio al Cliente</p>
            <P class="numLinea">01 8000 41 65 00<p>
        </div>
        <div class="contFooter2">
            <p class="siguenos">Síguenos en nuestras redes</p>
            <a href="https://www.facebook.com/cipaesnutricion" target="_blank">
                <img class="logoFoot" src="{{ asset('/img/f.png/') }}" height="32"></a>
            <a href="https://www.instagram.com/cipanutricion/" target="_blank">
                <img class="logoFoot" src="{{ asset('/img/i.png/') }}" height="32"></a>
        </div>
    </footer>
</body>

</html>