<!DOCTYPE html>
<html>

<head>
    <title>Psicultura - Simulador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://bootswatch.com/4/lumen/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/piscicultura.css?v=4') }}" rel="stylesheet">
</head>

<body>
    <div>
        <div class="header">
            <div class="logosHeader">
                <div>
                <img class="backHeader" src="{{ asset('/img/logoAcuavit.png/') }}" width="200px">
                </div>
                <div class="mt-3">
                <a class="aWebSite" href="https://www.cipa.com.co/" target="_blank">
                        <img class="backHeader backHeaderCipa" src="{{ asset('/img/logoCipa.png/') }}"  width="120px"></a>
                </div>
            </div>
        </div>
        <div class="panel">
            @yield('content')
        </div>
        <footer>
            <div class="container-fluid py-5">
                <div class="row pt-5 paddingfoot">
                    <div class="col-12 col-md-6 d-none d-md-block">
                        <div class="row paddingLineasServicio">
                            <div class="col-4">
                                <a class="aWebSite" href="https://www.cipa.com.co/" target="_blank">
                                    <h1 class="webSite">www.cipa.com.co</h1>
                                </a>
                            </div>
                            <div class="col-8">
                                <p class="textMargen parrafoRedes">Línea&nbspde&nbspServicio&nbspal&nbspCliente</p>
                                <h2 class="textMargen numberRedes">01&nbsp8000&nbsp41&nbsp65&nbsp00</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block">
                        <div class="row padding-redes">
                            <div class="col-9 col-md-8 text-right">
                                <h2 class="siguenosRedes">Síguenos&nbspen&nbspnuestras&nbspredes</h2>
                            </div>
                            <div class="col-3 col-md-4 margin-contrario">
                                <a href="https://www.facebook.com/cipaesnutricion" target="_blank">
                                    <img class="logoFoot" src="{{ asset('/img/f.png/') }}" height="32"></a>
                                <a href="https://www.instagram.com/cipanutricion/" target="_blank">
                                    <img class="logoFoot" src="{{ asset('/img/i.png/') }}" height="32"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-md-none margin-footer">
                        <div class="center-div">
                            <div class="inline-izq">
                                <a class="aWebSite a_decoration" mdhref="https://www.cipa.com.co/" target="_blank">
                                    <h1 class="webSite a_decoration">www.cipa.com.co</h1>
                                </a>
                            </div>
                            <div class="inline">
                                <p class="textMargen parrafoRedes">Línea&nbspde&nbspServicio&nbspal&nbspCliente</p>
                                <h2 class="textMargen numberRedes">01&nbsp8000&nbsp41&nbsp65&nbsp00</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <div class="center-div">
                            <h2 class="siguenosRedes">Síguenos&nbspen&nbspnuestras&nbspredes</h2>

                            <div class="inline">
                                <a href="https://www.facebook.com/cipaesnutricion" target="_blank">
                                    <img class="logoFoot" src="{{ asset('/img/f.png/') }}" height="32"></a>
                                <a href="https://www.instagram.com/cipanutricion/" target="_blank">
                                    <img class="logoFoot" src="{{ asset('/img/i.png/') }}" height="32"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        let aguaFria = [{
            display: "Truchas",
            value: "Truchas"
        }];

        let aguaCalida = [{
                display: "Tilapias",
                value: "Tilapias"
            },
            {
                display: "Cachamas",
                value: "Cachamas"
            }
        ];


        // Aqui creamos verificamos cual opciones apareceran dependiendo de la seleccion@superservicios

        $('input:radio[name="AFC"]').change(function() {
            if ($(this).is(':checked') && $(this).val() == 'AF') {
                list(aguaFria);
                cambiarImg(1);
            } else if ($(this).is(':checked') && $(this).val() == 'AC') {
                console.log('Aqui estoy');
                list(aguaCalida);
                cambiarImg(2);
            }
        });

        //function to populate child select box
        function list(array_list) {
            $("#especie").html(""); //reset child options
            $(array_list).each(function(i) { //populate child options
                $("#especie").append("<option value=\"" + array_list[i].value + "\">" + array_list[i].display + "</option>");
            });

        }

        function cambiarImg(id) {
            if (id === 1) {
                $("#imgAguas").attr("src", "{{ asset('/img/bannerAguasFrias.png/') }}");
                $("#imgClave").attr("value", "{{ asset('/img/bannerAguasFrias.png/') }}");
            } else {
                $("#imgAguas").attr("src", "{{ asset('/img/bannerAguasCalidas.png/') }}");
                $("#imgClave").attr("value", "{{ asset('/img/bannerAguasCalidas.png/') }}");
            }
        };
    });
</script>