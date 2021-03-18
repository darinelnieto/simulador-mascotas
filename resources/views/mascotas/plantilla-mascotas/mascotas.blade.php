<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://bootswatch.com/4/lumen/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="{{ asset('css/fuente/Calibri-Bold.ttf') }}" rel="stylesheet">
    <link href="{{ asset('css/fuente/Noteworthy-Bold.ttf') }}" rel="stylesheet">
    <link href="{{ asset('css/mascotas.css?v=4') }}" rel="stylesheet">
    <title>Simulador Mascotas</title>
</head>
<body>
    <header>
        <img src="{{ asset('/img/mascotas/header.png/') }}" alt="" class="bannerInicio">
        <img src="{{ asset('/img/mascotas/Artboard.png/') }}" alt="" class="bannerCan">
        <img src="{{ asset('/img/mascotas/banner-gatos-06.png/') }}" alt="" class="bannerCat">
    </header>
        @yield('contenido')
    <footer class="footer-mascotas">
        <div class="container">
            <div class="row">
                <div class="col-4 text-right borde">
                    <p class="mb-0 p-footer"><strong>Siguenos en:</strong></p>
                    <div class="div-redes">
                        <p style="margin-right: 39px;"><a href="" class="redes"><i class="fab fa-facebook-f"></i></a></p>
                        <p><a href="" class="redes"><i class="fab fa-instagram"></i></a></p>
                    </div>
                </div>
                <div class="col-8 text-center">
                    <p class="mb-0 p-footer"><strong>Línea de Servicio al Cliente</strong></p>
                    <a class="a-telefono" href="telto:018000416500">018000416500</a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="{{ asset('js/script-can.js?v=4') }}"></script>
</html>