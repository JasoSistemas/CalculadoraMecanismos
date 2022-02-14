<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript">
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("sw.js");
        }
    </script>
    <title>Document</title>
</head>

<body>
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <form class="form-group" action="" method="post">
                    <h4>Titulo del Formulario</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Recorrido Total</span>
                        </div>
                        <input class="form-control" type="number" name="recorrido" min="0" required="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Velocidad de Movimiento</span>
                        </div>
                        <input class="form-control" type="number" name="velocidad" min="0" required="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Ciclos por Día</span>
                        </div>
                        <input class="form-control" type="number" name="ciclos" min="0" required="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Días al año</span>
                        </div>
                        <input class="form-control" type="number" name="dias" min="0" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Años de Servicio</span>
                        </div>
                        <input class="form-control" type="number" name="a_servicios" min="0" required="">
                    </div>


                    <h4>Titulo del Form</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tonelaje Grua </span>
                            <input class="form-control" type="number" name="tonejale" min="0" required="">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Primera Carga </span>
                            <input class="form-control" type="number" name="primera_carga" min="0" required="">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tiempo de Carga </span>
                            <input class="form-control" type="number" name="tiempo_1" min="0" required="">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Segunda carga </span>
                            <input class="form-control" type="number" name="segunda_carga" min="0" required="">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tiempo de Carga </span>
                            <input class="form-control" type="number" name="tiempo_2" min="0" required="">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tercera Carga </span>
                            <input class="form-control" type="number" name="tercera_carga" min="0" required="">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tiempo de Carga </span>
                            <input class="form-control" type="number" name="tiempo_3" min="0" required="">
                        </div>
                    </div>






                    <button class="btn btn-info btn-block" name="boton"> Calcular Clasificación </button>

                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['boton'])) {
        $recorrido = $_POST['recorrido'];
        settype($recorrido, "double");
        $velocidad = $_POST['velocidad'];
        settype($velocidad, "double");
        $ciclos = $_POST['ciclos'];
        settype($ciclos, "double");
        $dias = $_POST['dias'];
        settype($dias, "double");
        $a_servicios = $_POST['a_servicios'];
        settype($a_servicios, "double");

        $primerFormula = (2 * $recorrido) / $velocidad;
        $tiempo_Ciclo = $primerFormula * 0.01667;


        $tonejale = $_POST['tonejale'];
        settype($tonejale, "double");
        $primera_carga = $_POST['primera_carga'];
        settype($primera_carga, "double");
        $tiempo_1 = $_POST['tiempo_1'];
        settype($tiempo_1, "double");
        $segunda_carga = $_POST['segunda_carga'];
        settype($segunda_carga, "double");
        $tiempo_2 = $_POST['tiempo_2'];
        settype($tiempo_2, "double");
        $tercera_carga = $_POST['tercera_carga'];
        settype($tercera_carga, "double");
        $tiempo_3 = $_POST['tiempo_3'];
        settype($tiempo_3, "double");

        $carga1 = $primera_carga / $tonejale;
        $carga2 = $segunda_carga / $tonejale;
        $carga3 = $tercera_carga / $tonejale;

        $tiempo_porciento_1 = $tiempo_1 / 100;
        $tiempo_porciento_2 = $tiempo_2 / 100;
        $tiempo_porciento_3 = $tiempo_3 / 100;

        $potencia1 = pow($carga1, 3);
        $potencia2 = pow($carga2, 3);
        $potencia3 = pow($carga3, 3);

        $espectro_1 = $tiempo_porciento_1 * $potencia1;
        $espectro_2 = $tiempo_porciento_2 * $potencia2;
        $espectro_3 = $tiempo_porciento_3 * $potencia3;

        $vida_horas = $tiempo_Ciclo * $ciclos * $dias * $a_servicios;
        $espectroTotal = $espectro_1 + $espectro_2 + $espectro_3;


        //echo $vida_horas . '<br>';
        $espectro_Carga = number_format($espectroTotal, 4, '.', '') . '<br>';
        settype($espectro_Carga, "float");
        //echo $espectro_Carga . '<br>';

        switch ($vida_horas) {
            case $vida_horas < 200:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="background-color: green;font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="background-color: green;font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="background-color: green;font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: green; font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }

                break;
            case $vida_horas < 400:


                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="background-color: green;font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="background-color: green; font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: green; font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: green; font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 800:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="background-color: green;font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: green; font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: green; font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: green; font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 1600:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: green; font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: green; font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: green; font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: green; font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 3200:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: green; font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: green; font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: green; font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:

                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: green; font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 6300:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color:green; font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: green; font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: green; font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: green; font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 12500:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: green; font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: green; font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: green; font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: green; font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 25000:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: green; font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: green; font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: green; font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: green; font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas < 50000:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: green; font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: green); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: green; font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: green; font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
            case $vida_horas > 50000:

                switch ($espectro_Carga) {
                    case $espectro_Carga < 0.126:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: green; font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.251:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: green; font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.501:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: green; font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                    case $espectro_Carga < 0.1001:
                        echo '<div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="10" style="background-color: rgb(8, 51, 142); color: white;">
                                            <center>Clase de Utilización</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T0</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T1</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T2</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T3</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T4</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T5</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T6</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T7</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T8</th>
                                        <th style="background-color: rgb(8, 51, 142); color: white;">T9</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L1</td>
                                        <td id="1" style="font-weight: bold;">M1</td>
                                        <td id="2" style="font-weight: bold;">M1</td>
                                        <td id="3" style="font-weight: bold;">M1</td>
                                        <td id="4" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="5" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="6" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="7" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="8" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="9" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="10" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: 10%; border-bottom: 0px; border-top: 0px;">Espectros</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L2</td>
                                        <td id="11" style="font-weight: bold;">M1</td>
                                        <td id="12" style="font-weight: bold;">M1</td>
                                        <td id="13" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="14" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="celda" value="15" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="16" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="17" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="18" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="19" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="20" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; width: auto; border-top: 0px; border-bottom:0px">de Carga</td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L3</td>
                                        <td id="21" style="font-weight: bold;">M1</td>
                                        <td id="22" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="23" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="24" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="25" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="26" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="27" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="28" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="29" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="30" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgb(8, 51, 142); color: white; border-bottom: 0px; border-top: 0px;"></td>
                                        <td style="background-color: rgb(8, 51, 142); color: white;">L4</td>
                                        <td id="31" style="background-color: rgb(206, 214, 232); font-weight: bold;">M2</td>
                                        <td id="32" style="background-color: rgb(181, 194, 221); font-weight: bold;">M3</td>
                                        <td id="33" style="background-color: rgb(156, 173, 210); font-weight: bold;">M4</td>
                                        <td id="34" style="background-color: rgb(131, 153, 199); font-weight: bold;">M5</td>
                                        <td id="35" style="background-color: rgb(107, 132, 187); font-weight: bold;">M6</td>
                                        <td id="36" style="background-color: rgb(82, 112, 176); font-weight: bold;">M7</td>
                                        <td id="37" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="38" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="39" style="background-color: rgb(33, 71, 154); font-weight: bold;">M8</td>
                                        <td id="40" style="background-color: green; font-weight: bold;">M8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>';
                        break;
                }
                break;
        }
    }
    ?>



</body>

</html>