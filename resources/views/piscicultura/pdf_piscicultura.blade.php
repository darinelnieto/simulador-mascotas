<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIPA</title>
</head>

<body>
    <div>
        <div class="col-12">
            <img src="{{ asset('/img/piscicultura/pdf/tilapias-header.png/') }}" width="100%">
        </div>
        <table width="100%">
            <tr>
                <td width="20%">
                    <p style="text-align: center; font-family: sans-serif; color: white; background-color: #00A6D6;
    padding: 10px 20px; border-radius: 20px; margin: auto;">{{$datpdf->cantidad_peces}}</p>
                </td>
                <td width="20%">
                    <p style="text-align: center; font-family: sans-serif; color: white; background-color: #00A6D6;
    padding: 10px 20px; border-radius: 20px; margin: auto;">1 - 6</p>
                </td>
                <td width="20%">
                    <p style="text-align: center; font-family: sans-serif; color: white; background-color: #00A6D6;
    padding: 10px 20px; border-radius: 20px;margin: auto;">{{$datpdf->peso_inicial}} g</p>
                </td>
                <td width="20%">
                    <p style="text-align: center; font-family: sans-serif; color: white; background-color: #00A6D6;
    padding: 10px 20px; border-radius: 20px; width: 90px; margin: auto;">{{$datpdf->peso_final}} g</p>
                </td>
                <td width="20%">
                    <p style="text-align: center; font-family: sans-serif; color: white; background-color: #00A6D6;
    padding: 10px 20px; border-radius: 20px; margin: auto;">{{$datpdf->alimento_total}} Kg</p>
                </td>
            </tr>
        </table>
        <br>
        <br>
        
        <div class="col-12">
            <img src="{{ asset('/img/piscicultura/pdf/recomendaciones.png/') }}" width="100%">
        </div>

        <table style="width:100%">
            <tr>
                <td width="33.3%"><img src="{{ asset('/img/piscicultura/pdf/tilapias-etapa-1.png/') }}" width="100%"></td>
                <td width="33.3%"><img src="{{ asset('/img/piscicultura/pdf/tilapias-etapa-2.png/') }}" width="100%"></td>
                <td width="33.3%"><img src="{{ asset('/img/piscicultura/pdf/tilapias-etapa-3.png/') }}" width="100%"></td>
            </tr>
            <tr>
            <td width="33.3%"><table style="width:100%"><tr><td width="45%"><p style="text-align: center; font-family:Arial, Helvetica, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input7}}</p></td><td width="55%"><p style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input1}} Kg</p></td></tr></table></td>
                <td width="33.3%"><table style="width:100%"><tr><td width="45%"><p style="text-align: center; font-family:Arial, Helvetica, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input8}}</p></td><td width="55%"><p style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input2}} Kg</p></td></tr></table></td>
    <td width="33.3%"><table style="width:100%"><tr><td width="45%"><p style="text-align: center; font-family:Arial, Helvetica, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input9}}</p></td><td width="55%"><p style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input3}} Kg</p></td></tr></table></td>
            </tr>
            <tr>
                <td width="33.3%"><img src="{{ asset('/img/piscicultura/pdf/tilapias-etapa-4.png/') }}" width="100%"></td>
                <td width="33.3%"><img src="{{ asset('/img/piscicultura/pdf/tilapias-etapa-5.png/') }}" width="100%"></td>
                <td width="33.3%"><img src="{{ asset('/img/piscicultura/pdf/tilapias-etapa-6.png/') }}" width="100%"></td>
            </tr>
            <tr>
            <td width="33.3%"><table style="width:100%"><tr><td width="45%"><p style="text-align: center; font-family:Arial, Helvetica, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input10}}</p></td><td width="55%"><p style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input4}} Kg</p></td></tr></table></td>
    <td width="33.3%"><table style="width:100%"><tr><td width="45%"><p style="text-align: center; font-family:Arial, Helvetica, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input11}}</p></td><td width="55%"><p style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input5}} Kg</p></td></tr></table></td>
    <td width="33.3%"><table style="width:100%"><tr><td width="45%"><p style="text-align: center; font-family:Arial, Helvetica, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input12}}</p></td><td width="55%"><p style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif; border: 2px #797979 solid;
    border-radius: 10px; padding: 2px 10px;">{{$datpdf->input6}} Kg</p></td></tr></table></td>
            </tr>
        </table>



        <div>
            <img src="{{ asset('/img/piscicultura/pdf/footer-pdf.png/') }}" width="100%">
        </div>
    </div>
    <div class="col-12">
        <img src="{{ asset('/img/piscicultura/pdf/tilapias-page-2.png/') }}" width="100%">
    </div>
    <div class="col-12">
        <img src="{{ asset('/img/piscicultura/pdf/tilapias-page-3.png/') }}" width="100%">
    </div>
    <div class="col-12">
        <img src="{{ asset('/img/piscicultura/pdf/tilapias-page-4.png/') }}" width="100%">
    </div>
</body>

</html>