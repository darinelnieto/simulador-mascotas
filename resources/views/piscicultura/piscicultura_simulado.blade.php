@extends('piscicultura.plantilla.plantillaPiscicultura')
@section('content')

<div class="container">
    <div class="row pt-md-4">
        <div class="col-6 col-md-3 text-center">
            <h3 class="txtItemDes text-aliniado-izq">Cantidad de Peces</h3>
            <h1 class="datos_ingresados align-izquierda" id="cantidad_total_peces"></h1>
        </div>
        <div class="col-6 col-md-3 text-center">
            <h3 class="txtItemDes">Temperatura del Agua</h3>
            <h1 class="datos_ingresados">{{$data->inputTempAgua}} °C</h1>
        </div>
        <div class="col-6 col-md-3 text-center">
            <h3 class="txtItemDes">Peso Promedio</h3>
            <h1 class="datos_ingresados">{{$data->inputPesoProm}} g</h1>
        </div>
        <div class="col-6 col-md-3 text-center">
            <h3 class="txtItemDes text-aliniado-dir">Peso Finalización</h3>
            <h1 class="datos_ingresados align-derecha">{{$data->inputPesoFinal}} g</h1>
        </div>

    </div>
    <div class="row pt-5">
        <div class="col-12 text-center">
            <h2>Para aproximarse a un peso promedio de<strong> {{$data->inputPesoFinal}} g</strong> se recomienda completar las siguientes etapas.</h2>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12 text-center">
            <h2 class="etapas">Etapas:</h2>
            <ul class="progressbar">
                <?php
                for ($i = 1; $i <= $ulstep; $i++) {
                    if ($i == $etapa_actual) {
                ?><li id="<?php echo ($i) ?>" onclick="fun_etapa(this.id)" class="active"></a> </li> <?php
                                                                                                    } else if ($i < $etapa_actual) {
                                                                                                        ?><li id="<?php echo ($i) ?>"></li>
                    <?php
                                                                                                    } else {
                    ?><li id="<?php echo ($i) ?>" onclick="fun_etapa(this.id)"></li>
                <?php
                                                                                                    }
                                                                                                }
                ?>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1 id="titulo-etapa">Iniciación</h1>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3">
            <div class="col-12 text-center">
                <h4 class="titulo-semana">Selecciona una semana </h4>
                <select id="semana" onchange="fun_semana(this.value)" name="semana" required="required">
                    <!--@foreach($datos as $num_semana)
                    <option>{{$num_semana->semana}}</option>
                    @endforeach-->
                </select>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="row ml-md-5">
                <div class="col-12 col-md-6 ">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="txtItemDes">Peso promedio</h3>
                        </div>
                        <div class="col-6">
                            <h1 class="labelValor" id="peso-semana"></h1>
                        </div>
                        <div class="col-6">
                            <h3 class="txtItemDes">Alimentación por dia</h3>
                        </div>
                        <div class="col-6">
                            <h1 class="labelValor" id="alimentacion_dia_semana"> Kg</h1>
                        </div>

                        <div class="col-6">
                            <h3 class="txtItemDes">Alimento para finalizar</h3>
                        </div>
                        <div class="col-6">
                            <h1 class="labelValor" id="alimento_finalizar_semana"> Kg</h1>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-md-6 ">
                    <div class="row">


                        <div class="col-6">
                            <h3 class="txtItemDes">Alimentación al dia</h3>
                        </div>
                        <div class="col-6">
                            <h1 class="labelValor" id="num_alimentacion_semana"> Veces</h1>
                        </div>
                        <div class="col-6">
                            <h3 class="txtItemDes">Kg Semana</h3>
                        </div>
                        <div class="col-6">
                            <h1 class="labelValor" id="alimentacion_semana"> Kg</h1>
                        </div>
                        <div class="col-6">
                            <h3 class="txtItemDes">Porcentaje de Biomasa</h3>
                        </div>
                        <div class="col-6">
                            <h1 class="labelValor" id="biomasa_semana"> %</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-12">
            <div class="contOnda">
                <img src="{{ asset('/img/ondaDiv.png/') }}" width="80%">
            </div>
        </div>

        <div class="col-12 col-md-8 offset-md-2">

            <div class="row ml-md-5 py-4">
                <div class="col-12 col-md-6 ">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tituloDesSim">Producto recomendado</h2>
                            <h3 id="producto-etapa" class="nombre-producto">titulo</h3>
                        </div>
                        <div class="col-6">
                            <h3 class="txtItem margin-prod">Estimado</h3>
                        </div>
                        <div class="col-6">
                            <h1 id="estimado" class="labelValor">40 Kg</h1>
                        </div>
                        <div class="col-6">
                            <h3 class="txtItem margin-prod">Número Sacos</h3>
                        </div>
                        <div class="col-6">
                            <h1 id="sacos" class="labelValor">54 Sacos</h1>
                        </div>
                        <div class="col-12 text-center pt-4">
                            <form action="{{ route('pdf_piscicultura')}}" method="get" width="100%">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_especie" value="{{$data->id_especie}}">
                                <input type="hidden" name="alimento_total" value="{{$totalAlimento}}">
                                <input type="hidden" name="peso_inicial" value="{{$data->inputPesoProm}}">
                                <input type="hidden" name="peso_final" value="{{$data->inputPesoFinal}}">
                                <input type="hidden" name="temperatura_agua" value="{{$data->inputTempAgua}}">
                                <div id="form_pdf"></div>
                                <input type="submit" class="descargar" value="Descargar Plan de alimentación">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center margen-mobile">
                    <div>
                        <a id="tips" class="a_decoration" href="#" target="_blank">
                            <h2 class="tituloDesSimVer">Tips de alimentación</h2>
                        </a>
                    </div>
                    <img id="imgBulto" src="" width="200px">
                    <h2>Peso 40 Kg </h2>
                </div>
            </div>

        </div>

    </div>
</div>


<script type="text/javascript">
    const dat = @json($datos);
    const data_etapa = @json($data_etapa);
    let etap_actual = @json($etapa_actual);
    let total_alimento = @json($totalAlimento);
    let inputCantPeces = @json($inputCantPeces);
    let etapa_selec = 0;
    fun_etapa(etap_actual);
    //console.log(data_simulada);
    //console.log(dat, data_etapa);
    cantidad_total_peces = document.getElementById('cantidad_total_peces');
    cantidad_total_peces.innerHTML=  marcas_miles(inputCantPeces);                                                                               
    function fun_semana(value) {
        //console.log(value, etapa_selec);
        peso_semana = document.getElementById('peso-semana');
        alimentacion_dia_semana = document.getElementById('alimentacion_dia_semana');
        alimentacion_semana = document.getElementById('alimentacion_semana');
        num_alimentacion_semana = document.getElementById('num_alimentacion_semana');
        biomasa_semana = document.getElementById('biomasa_semana');
        alimento_finalizar_semana = document.getElementById('alimento_finalizar_semana');

        for (item of dat) {
            if (item.etapa == etapa_selec && item.semana == value) {
                //console.log(item);
                peso_semana.innerHTML = item.peso_medio + ' g';
                alimentacion_dia_semana.innerHTML = marcas_miles(item.alimento_dia) + ' g';
                alimentacion_semana.innerHTML = marcas_miles(item.alimento_semana) + ' Kg';
                num_alimentacion_semana.innerHTML = marcas_miles(item.num_alimentacion_dia) + ' Veces';
                biomasa_semana.innerHTML = item.biomasa + ' %';
                alimento_finalizar_semana.innerHTML = marcas_miles(total_alimento) + ' Kg';
            }
        }

    }

    function fun_data_etapa(id) {
        let acumulado = 0;

        for (item of dat) {
            if (item.etapa == id) {
                acumulado += item.alimento_semana;
            }
        }
        return acumulado;
    }

    function fun_etapa(id) {

        etapa_selec = (id);
        //console.log(id, etap_actual);
        select_semana = document.getElementById('semana');
        select_semana.innerHTML = "";

        titulo_etapa = document.getElementById('titulo-etapa');
        titulo_etapa.innerHTML = data_etapa[id - etap_actual].nombre;

        producto_etapa = document.getElementById('producto-etapa');
        producto_etapa.innerHTML = data_etapa[id - etap_actual].producto;

        bulto_etapa = document.getElementById('imgBulto');
        bulto_etapa.src = data_etapa[id - etap_actual].bulto;

        tip = document.getElementById('tips');
        tip.href = data_etapa[id - etap_actual].tip;

        estimado = document.getElementById('estimado');
        estimado.innerHTML = marcas_miles(redondear(fun_data_etapa(id))) + ' Kg';

        sacos = document.getElementById('sacos');
        sacos.innerHTML = marcas_miles(redondear((fun_data_etapa(id) / 40))) + ' Sacos';
        for (it of dat) {
            var opt = document.createElement('option');
            if (it.etapa == id) {
                opt.value = it.semana;
                opt.innerHTML = it.semana;
                opt.id = it.semana;
                //opt.setAttribute('onclick',fun_semana('this.id'));
                //console.log(it.semana);
                select_semana.appendChild(opt);
            }
        }

        function redondear(x) {
            return Number.parseFloat(x).toFixed(2);
        }
        fun_semana(document.getElementById('semana').value);
    }

    fun_datapdf();

    function fun_datapdf() {
        let formulario = document.getElementById("form_pdf");
        let input = document.createElement("INPUT");
        input.value = marcas_miles(Number.parseFloat(inputCantPeces).toFixed(2)); 
        input.name = 'cantidad_peces';
        input.type = 'hidden';
        let input1 = document.createElement("INPUT");
        input1.value = marcas_miles(Number.parseFloat(fun_data_etapa(1)).toFixed(2));
        //console.log(Number.parseFloat(fun_data_etapa(3)).toFixed(2));
        input1.name = 'input1';
        input1.type = 'hidden';
        let input2 = document.createElement("INPUT");
        input2.value = marcas_miles(Number.parseFloat(fun_data_etapa(2)).toFixed(2));
        input2.name = 'input2';
        input2.type = 'hidden';
        let input3 = document.createElement("INPUT");
        input3.value = marcas_miles(Number.parseFloat(fun_data_etapa(3)).toFixed(2));
        input3.name = 'input3';
        input3.type = 'hidden';
        let input4 = document.createElement("INPUT");
        input4.value = marcas_miles(Number.parseFloat(fun_data_etapa(4)).toFixed(2));
        input4.name = 'input4';
        input4.type = 'hidden';
        let input5 = document.createElement("INPUT");
        input5.value = marcas_miles(Number.parseFloat(fun_data_etapa(5)).toFixed(2));
        input5.name = 'input5';
        input5.type = 'hidden';
        let input6 = document.createElement("INPUT");
        input6.value = marcas_miles(Number.parseFloat(fun_data_etapa(6)).toFixed(2));
        input6.name = 'input6';
        input6.type = 'hidden';
        let input7 = document.createElement("INPUT");
        input7.value = marcas_miles(Number.parseFloat(fun_data_etapa(1) / 40).toFixed(2));
        input7.name = 'input7';
        input7.type = 'hidden';
        let input8 = document.createElement("INPUT");
        input8.value = marcas_miles(Number.parseFloat(fun_data_etapa(2) / 40).toFixed(2));
        input8.name = 'input8';
        input8.type = 'hidden';
        let input9 = document.createElement("INPUT");
        input9.value = marcas_miles(Number.parseFloat(fun_data_etapa(3) / 40).toFixed(2));
        input9.name = 'input9';
        input9.type = 'hidden';
        let input10 = document.createElement("INPUT");
        input10.value = marcas_miles(Number.parseFloat(fun_data_etapa(4) / 40).toFixed(2));
        input10.name = 'input10';
        input10.type = 'hidden';
        let input11 = document.createElement("INPUT");
        input11.value = marcas_miles(Number.parseFloat(fun_data_etapa(5) / 40).toFixed(2));
        input11.name = 'input11';
        input11.type = 'hidden';
        let input12 = document.createElement("INPUT");
        input12.value = marcas_miles(Number.parseFloat(fun_data_etapa(6) / 40).toFixed(2));
        input12.name = 'input12';
        input12.type = 'hidden';
        let input13 = document.createElement("INPUT");
        input13.value = marcas_miles(Number.parseFloat(total_alimento).toFixed(2)); 
        input13.name = 'alimento_total';
        input13.type = 'hidden';
        formulario.appendChild(input);
        formulario.appendChild(input1);
        formulario.appendChild(input2);
        formulario.appendChild(input3);
        formulario.appendChild(input4);
        formulario.appendChild(input5);
        formulario.appendChild(input6);
        formulario.appendChild(input7);
        formulario.appendChild(input8);
        formulario.appendChild(input9);
        formulario.appendChild(input10);
        formulario.appendChild(input11);
        formulario.appendChild(input12);
        formulario.appendChild(input13);
    }


    function marcas_miles(num) {
        separador = ",", // separador para los miles
        sepDecimal = '.',
        simbol = '';
        return formatear(num,simbol,separador,sepDecimal);
    }

    function formatear(num,simbol,separador,sepDecimal) {
        num += '';
        var splitStr = num.split('.');
        var splitLeft = splitStr[0];
        var splitRight = splitStr.length > 1 ? sepDecimal + splitStr[1] : '';
        var regx = /(\d+)(\d{3})/;
        while (regx.test(splitLeft)) {
            splitLeft = splitLeft.replace(regx, '$1' + separador + '$2');
        }
        return simbol + splitLeft + splitRight;
    }

    
    //console.log(marcas_miles(445454779.1866));
</script>
@endsection