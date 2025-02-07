<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Puebla | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

    
    <style>
        .subtitle-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 1.5em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .subtitles {
            font-size: 1.3em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .description {
            display: none;
            margin-top: 5px;
            padding: 5px;
            background-color: #FOFOFO;
            /*border-left: 8px solid #007BFF;
            border-radius: 10px;*/
        }

        .interpretation {
            /*margin-bottom: 10px;*/
            /*padding: 10px;*/
            padding-right: 20px;
            padding-left: 20px;
            background-color: #FOFOFO; /*FOFOFO*/ 
            /*border-left: 8px solid #FFA500;
            border-radius: 10px;*/
            margin-top: 3px;
            /*box-shadow: 0 0 20px 0 rgba(169, 169, 169, 0.5);*/
        }

        .text {
            font-size: 1.1em;
            line-height: 1.8;
            color: #555;
            text-align: justify;
        }

        .icon {
            margin-right: 10px;
            font-size: 1.5em;
            display: inline-block;
        }

        .mostrar {
            padding: 5px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #BEBEBE;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .mostrar-container {
            text-align: center;
            margin-top: 20px;
        }

        .mostrar:hover {
            background-color: #4225CF;
        }

        .actives {
            background-color: #9500ff;
        }
        .map-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 20px;
        }
    </style>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
<!-- Sección Desarrollo de Producto -->
<div class="container-fluid">
    <div class="row">


    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Puebla</a></li>
                                </ol>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Características y Distribución de Propiedades -->
                <style>
                    .titulo {
                        text-align: center;
                        color: #333;
                        font-size: 24px;
                        font-weight: bold;
                        font-family: Arial, sans-serif;
                    }
                </style>
                <div class="titulo">
                    <h1>Desarrollo de Producto</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Puebla, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>


    <div class="col-md-12"><div class="card"></div></div>
                <!--SE MANEJAN LOS 6 CARD DE Perspectiva general de mercado POR FILTRO DE TIPO DE MERCADO-->
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <h4 class="mb-3">Perspectiva General de Mercado</h4>
                    </div>
                    <div class="col-md-auto" style="text-align: center; margin: 0 auto;">
                        <select class="form-select" id="segmentFilter" style="text-align: center;" onchange="actualizarTablas(this.value)">
                            <option value="general">General</option>
                            <option value="E">E</option>
                            <option value="D">D</option>
                            <option value="C">C</option>
                            <option value="B">B</option>
                            <option value="A">A</option>                                                        
                            <option value="S">S</option>
                            <option value="L">L</option>
                            <!--<option value="ELITE">ELITE</option>-->
                        </select>
                        <h4 class="mb-3"></h4>
                    </div>
                </div>
                    <!-- Cargar el script -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="pue-filtros_mercado.js"></script>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Casa Promedio</h5>                                
                                <table class="table" id="tablaPromedios">                                    
                                    <tbody id="tableBodyPromedios">
                                        <tr>
                                            <td>Estacionamientos</td>
                                            <td id="estacionamientos"></td>
                                        </tr>
                                        <tr>
                                            <td>Recámaras</td>
                                            <td id="recamaras"></td>
                                        </tr>
                                        <tr>
                                            <td>Baños</td>
                                            <td id="banos"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Departamento Promedio</h5>
                                <table class="table" id="tablaMediana">                                    
                                    <tbody id="tableBodyMediana">                                      
                                        <tr>
                                            <td>Estacionamientos</td>
                                            <td id="estacionamientos-mediana"></td>
                                        </tr>
                                        <tr>
                                            <td>Recámaras</td>
                                            <td id="recamaras-mediana"></td>
                                        </tr>
                                        <tr>
                                            <td>Baños</td>
                                            <td id="banos-mediana"></td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Precio Mercado</h5>
                                <table class="table" id="tablaPrecioMercado">                                    
                                    <tbody id="tableBodyPrecioMercado">
                                        <tr>
                                            <td>Mínimo</td>
                                            <td id="precio-minimo"></td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="precio-maximo"></td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="precio-promedio"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">M2 Terreno</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Mínimo</td>
                                            <td id="metros-terreno-minimo"></td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="metros-terreno-maximo"></td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="metros-terreno-promedio"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">M2 Construcción</h5>
                            <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Mínimo</td>
                                            <td id="metros-construidos-minimo"></td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="metros-construidos-maximo"></td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="metros-construidos-promedio"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Precio M2 Construcción</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Mínimo</td>
                                            <td id="precio-metros-construidos-minimo"></td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="precio-metros-construidos-maximo"></td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="precio-metros-construidos-promedio"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>


<!-- Distribución % de créditos por vivienda valor -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por vivienda valor</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectViviendaValor" onchange="showYearlyDataViviendaValor(this.value)">
                        <option value="2022">Seleccione un año</option>
                        <option value="2022" selected>2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalViviendaValor">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonViviendaValor" data-bs-toggle="modal" data-bs-target="#interpretationModalViviendaValor2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_vivienda_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_vivienda_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_vivienda_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2024" style="display: none; min-height: 430px; border: 0;"></iframe>-->
                <div id="ViviendaValorContainer"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalViviendaValor" tabindex="-1" aria-labelledby="descriptionModalLabelViviendaValor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelViviendaValor">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica presenta una distribución porcentual de créditos otorgados para la adquisición de viviendas, clasificados por diferentes tipos de vivienda: Económica, Popular, Tradicional, Media, Residencial y Residencial Plus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalViviendaValor2022" tabindex="-1" aria-labelledby="interpretationModalLabelViviendaValor2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelViviendaValor2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>29.25%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las <strong>residenciales</strong> (<strong>13.12%</strong>) y <strong>tradicionales</strong> (<strong>27.58%</strong>), la categoría de <strong>"vivienda media"</strong> domina el mercado.
            </p>
            <p>
                Las viviendas <strong>económicas</strong>, <strong>popular</strong> y de <strong>lujo</strong>, con un <strong>7.21%</strong>, <strong>13.12%</strong> y <strong>3.79%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.
            </p>

            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalViviendaValor2023" tabindex="-1" aria-labelledby="interpretationModalLabelViviendaValor2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelViviendaValor2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>32.19%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las <strong>residenciales</strong> (<strong>14.01%</strong>) y <strong>tradicionales</strong> (<strong>28.96%</strong>), la categoría de <strong>"vivienda media"</strong> domina el mercado.
            </p>
            <p>
                Las viviendas <strong>económicas</strong>, <strong>popular</strong> y <strong>residencial plus</strong>, con un <strong>3.85%</strong>, <strong>16.86%</strong> y <strong>4.12%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalViviendaValor2024" tabindex="-1" aria-labelledby="interpretationModalLabelViviendaValor2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelViviendaValor2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>34.74%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las <strong>residenciales</strong> (<strong>16.29%</strong>) y <strong>tradicionales</strong> (<strong>27.28%</strong>), la categoría de <strong>"vivienda media"</strong> domina el mercado.
            </p>
            <p>
                Las viviendas <strong>económicas</strong>, <strong>popular</strong> y <strong>residencial plus</strong>, con un <strong>0.62%</strong>, <strong>16.37%</strong> y <strong>4.70%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataViviendaValor(year) {
         // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_vivienda_${year}.html?year=${year}`;
                iframe.width = '100%';
                iframe.height = '400';
                iframe.frameborder = '0';
                // Reemplazar el contenido del contenedor
                document.getElementById('ViviendaValorContainer').innerHTML = '';
                document.getElementById('ViviendaValorContainer').appendChild(iframe);
            

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonViviendaValor');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalViviendaValor${year}`);
    }
  // Mostrar la gráfica de 2019 por defecto al cargar la página
  document.addEventListener('DOMContentLoaded', function() {
    showYearlyDataViviendaValor('2022');
});
</script>


<!-- Gráfica 5: Distribución % de créditos por organismo -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por organismo</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectOrganismo" onchange="showYearlyDataOrganismo(this.value)">
                        <option value="2022">Seleccione un año</option>
                        <option value="2022" selected>2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalOrganismo">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonOrganismo" data-bs-toggle="modal" data-bs-target="#interpretationModalOrganismo2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="OrganismoContainer"></div>
<!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_organismo_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_organismo_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_organismo_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2024" style="display: none; min-height: 430px; border: 0;"></iframe>-->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalOrganismo" tabindex="-1" aria-labelledby="descriptionModalLabelOrganismo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelOrganismo">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El diagrama de barras muestra la distribución porcentual de créditos otorgados por diferentes instituciones financieras como lo son INFONAVIT, CNBV, FOVISSTE, BANJERCITO, INSUS Y CONAVI durante un año especifico.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalOrganismo2022" tabindex="-1" aria-labelledby="interpretationModalLabelOrganismo2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelOrganismo2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Al observar la gráfica podemos deducir que <strong>INFONAVIT</strong> y <strong>CNBV</strong> dominan el mercado de créditos con un <strong>46.10%</strong> y <strong>35.80%</strong> respectivamente, siendo las instituciones que otorgaron la mayor cantidad de créditos en el periodo analizado. Esto sugiere que estas dos instituciones tienen una mayor participación en el mercado de créditos y son las preferidas por los solicitantes.
            </p>
            <p>
                <strong>FOVISSTE</strong> tiene una participación menor pero significativa con un <strong>10.90%</strong>. El FOVISSTE también otorgó una cantidad considerable de créditos, aunque en menor proporción que las dos instituciones anteriores. Esto indica que el FOVISSTE tiene una presencia importante en el mercado, pero en menor escala.
            </p>
            <p>
                <strong>BANJERCITO</strong>, <strong>INSUS</strong> y <strong>CONAVI</strong> tienen una participación mínima, ya que estas tres últimas instituciones muestran un porcentaje menor a <strong>7.5%</strong>, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el periodo analizado.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalOrganismo2023" tabindex="-1" aria-labelledby="interpretationModalLabelOrganismo2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelOrganismo2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Al observar la gráfica podemos deducir que <strong>INFONAVIT</strong> y <strong>CNBV</strong> dominan el mercado de créditos con un <strong>55%</strong> y <strong>31.80%</strong> respectivamente, siendo las instituciones que otorgaron la mayor cantidad de créditos en el periodo analizado. Esto sugiere que estas dos instituciones tienen una mayor participación en el mercado de créditos y son las preferidas por los solicitantes.
            </p>
            <p>
                <strong>FOVISSTE</strong> tiene una participación menor pero significativa con un <strong>9.60%</strong>. El FOVISSTE también otorgó una cantidad considerable de créditos, aunque en menor proporción que las dos instituciones anteriores. Esto indica que el FOVISSTE tiene una presencia importante en el mercado, pero en menor escala.
            </p>
            <p>
                <strong>BANJERCITO</strong>, <strong>INSUS</strong> y <strong>CONAVI</strong> tienen una participación mínima o nula, ya que estas tres últimas instituciones muestran un porcentaje menor a <strong>4%</strong>, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el periodo analizado.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalOrganismo2024" tabindex="-1" aria-labelledby="interpretationModalLabelOrganismo2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelOrganismo2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Al observar la gráfica podemos deducir que existe dominancia de <strong>INFONAVIT</strong> y <strong>CNBV</strong>. Es evidente que el <strong>INFONAVIT</strong> y la <strong>CNBV</strong> son las instituciones que concentran la mayor parte de los porcentajes de créditos otorgados, con un <strong>61%</strong> y <strong>29.50%</strong> respectivamente. Estas dos entidades son las principales proveedoras de financiamiento a la población.
            </p>
            <p>
                Aunque con una menor participación, el <strong>FOVISSTE</strong> también tiene una presencia significativa en el otorgamiento de créditos, alrededor del <strong>8.30%</strong>.
            </p>
            <p>
                En cuanto a <strong>BANJERCITO</strong> y <strong>CONAVI</strong>, muestran una participación menor a <strong>1.5%</strong>, por lo que estas instituciones otorgan una cantidad muy baja de créditos.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataOrganismo(year) {
          // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_organismo_${year}.html?year=${year}`;
                iframe.width = '100%';
                iframe.height = '400';
                iframe.frameborder = '0';
                // Reemplazar el contenido del contenedor
                document.getElementById('OrganismoContainer').innerHTML = '';
                document.getElementById('OrganismoContainer').appendChild(iframe);

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonOrganismo');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalOrganismo${year}`);
    }

    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showYearlyDataOrganismo('2022');
    });
</script>


<!-- Gráfica: Estacionamientos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de Estacionamientos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectEstacionamientos" onchange="showSegmentDataEstacionamientos(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonEstacionamientos" data-bs-toggle="modal" data-bs-target="#descriptionModalEstacionamientos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonEstacionamientos" data-bs-toggle="modal" data-bs-target="#interpretationModalEstacionamientosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="EstacionamientosContainer"></div>
<!-- <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalEstacionamientos" tabindex="-1" aria-labelledby="descriptionModalLabelEstacionamientos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelEstacionamientos">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    En gráfico de pastel se visualiza la distribución de estacionamientos de manera general en el mercado inmobiliario de <strong>Puebla</strong>. Cada porción del círculo representa un porcentaje de un numero específico de estacionamiento.
                </p>
                <p>
                    El grafico de barras muestra la distribución del número de casas que tienen un determinado número de estacionamientos, agrupadas por diferentes categorías. Cada barra representa la cantidad de casas que tienen un número específico de estacionamientos para una categoría determinada. Los diferentes colores representan el número de estacionamientos.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: General -->
<div class="modal fade" id="interpretationModalEstacionamientosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                En el mercado inmobiliario de <strong>Puebla</strong>, un porcentaje importante de viviendas cuenta con <strong>2 estacionamientos</strong>, con un <strong>48.6%</strong> de participación, lo que sugiere que este número de estacionamientos es una media en la ciudad. Las viviendas que poseen <strong>1 estacionamiento</strong> representan un <strong>29.4%</strong>; hay que tener en cuenta que este número es estándar, ya que todas las viviendas deben tener al menos un estacionamiento.
            </p>
            <p>
                Por otra parte, las propiedades que tienen espacio para <strong>3 lugares de estacionamiento</strong> representan un <strong>11.4%</strong>. Finalmente, para el resto de las categorías, el porcentaje de participación es mucho menor, lo que implica que hay exclusividad para las propiedades con más de <strong>3 estacionamientos</strong>; estas pueden ser las que tienen más espacio.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: Segmentos -->
<div class="modal fade" id="interpretationModalEstacionamientosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientosSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Es notorio que el <strong>segmento S</strong> es el que tiene mayor concentración de propiedades con <strong>5 estacionamientos</strong>, lo que es congruente con la categoría, ya que las casas de este segmento se encuentran en un rango de precio alto, de <strong>4 millones a 12 millones</strong>. 
            </p>
            <p>
                Por su parte, los <strong>segmentos A</strong> y <strong>B</strong> son los que poseen una cantidad importante de casas con <strong>1 o 2 estacionamientos</strong>. Estas casas son consideradas de un precio medio, donde las familias de <strong>Puebla</strong> pueden acceder a ellas.
            </p>
            <p>
                Finalmente, el resto de las categorías presentan una distribución de estacionamientos más equilibrada.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas y los modales -->
<script>
    function showSegmentDataEstacionamientos(segment) {
          // Crear el iframe dinámicamente
          const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_estacionamientos.html`;
                iframe.width = '100%';
                iframe.height = '400';
                iframe.frameborder = '0';
                // Reemplazar el contenido del contenedor
                document.getElementById('EstacionamientosContainer').innerHTML = '';
                document.getElementById('EstacionamientosContainer').appendChild(iframe);

        // Cambiar el target del botón de interpretación según la opción seleccionada
        const interpretationButton = document.getElementById('interpretationButtonEstacionamientos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalEstacionamientos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }
    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataEstacionamientos('general');
    });
    
</script>



<!-- Gráfica: Distribución de baños [V2] -->
<!-- Gráfica: Distribución de baños [V2] -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de Baños</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectBanos" onchange="showSegmentDataBanos(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonBanos" data-bs-toggle="modal" data-bs-target="#descriptionModalBanosGeneral">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonBanos" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="BanosContainer"></div>
<!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_banos.html" width="100%" height="400" frameborder="0" id="segmentDataBanosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_banos.html" width="100%" height="400" frameborder="0" id="segmentDataBanosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description General -->
<div class="modal fade" id="descriptionModalBanosGeneral" tabindex="-1" aria-labelledby="descriptionModalLabelBanosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelBanosGeneral">Descripción General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la distribución de el número de baños en los inmuebles, organizada de manera que cada color representa un número de baños, que va de 1 a 8. Esta gráfica permite identificar las tendencias en la construcción de inmuebles en Tulancingo, específicamente en la cantidad de baños por propiedad. en función de su tamaño y nivel de comodidad. Además, facilita el análisis de los segmentos del mercado para planificar futuras construcciones o inversiones.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description Segmentos -->
<div class="modal fade" id="descriptionModalBanosSegmentos" tabindex="-1" aria-labelledby="descriptionModalLabelBanosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelBanosSegmentos">Descripción Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la distribución de los segmentos de acuerdo a la cantidad de baños con la que cuenta cada uno.</p>
                
                <p>Cada barra representa la cantidad de casas que tienen un número específico de baños para un segmento determinado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalBanosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelBanosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelBanosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Es notorio que la mayor parte de las propiedades de <strong>Puebla</strong> poseen <strong>2 baños</strong>, lo que representa el <strong>36.50%</strong> de todo el mercado inmobiliario. En menor proporción, pero igualmente representativas, están las propiedades que poseen <strong>1 baño</strong> (<strong>30.90%</strong>), <strong>3 baños</strong> (<strong>19.20%</strong>) y <strong>4 baños</strong> (<strong>8.82%</strong>). Esto implica que las propiedades con menor número de baños predominan, lo que corresponde a propiedades de precio más asequible.
            </p>
            <p>
                Por otro lado, existe un grupo limitado y exclusivo de propiedades con <strong>5 baños</strong> (<strong>2.99%</strong>), <strong>6 baños</strong> (<strong>0.88%</strong>), <strong>7 baños</strong> (<strong>0.34%</strong>) y <strong>8 baños</strong> (<strong>0.34%</strong>). Dada esta cantidad, se puede intuir que son propiedades con un valor más alto.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalBanosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelBanosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelBanosSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Para las primeras cantidades de baños (<strong>1</strong>, <strong>2</strong> y <strong>3</strong>), es notorio que están abarcadas por los <strong>segmentos E, D y C</strong>, lo que corresponde al rango de precios que tienen estos segmentos, donde el número de baños está relacionado con el precio de las propiedades.
            </p>
            <p>
                Por su parte, a medida que aumenta el número de baños, también lo hace la concentración de propiedades en los segmentos más altos. A partir de <strong>4</strong>, <strong>5</strong>, y <strong>6 baños</strong>, los segmentos con mayor participación son el <strong>segmento B, A y S</strong>. Los precios de estas propiedades se consideran de nivel <strong>medio-alto</strong>.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas y los modales -->
<script>
    function showSegmentDataBanos(segment) {
         // Crear el iframe dinámicamente
         const iframe = document.createElement('iframe');
        // Asegurarse de que el directorio exista, si no, proporcionar un mensaje de error
        const srcPath = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_banos.html`;
        iframe.src = srcPath;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('BanosContainer').innerHTML = '';
        document.getElementById('BanosContainer').appendChild(iframe);

        // Actualizar los botones de descripción e interpretación
        const descriptionButton = document.getElementById('descriptionButtonBanos');
        const interpretationButton = document.getElementById('interpretationButtonBanos');
        descriptionButton.setAttribute('data-bs-target', `#descriptionModalBanos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalBanos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }
    
    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataBanos('general');
    });
</script>


<!-- Gráfica: Recámaras -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de Recámaras</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectRecamaras" onchange="showSegmentDataRecamaras(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonRecamaras" data-bs-toggle="modal" data-bs-target="#descriptionModalRecamarasGeneral">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonRecamaras" data-bs-toggle="modal" data-bs-target="#interpretationModalRecamarasGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="RecamarasContainer"></div>
<!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description General -->
<div class="modal fade" id="descriptionModalRecamarasGeneral" tabindex="-1" aria-labelledby="descriptionModalLabelRecamarasGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelRecamarasGeneral">Descripción General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <p>
                El gráfico de pastel muestra los porcentajes del número de recámaras en un conjunto de propiedades, divididas en diferentes segmentos. Cada porción del círculo representa un porcentaje de propiedades con un número específico de recámaras, y los colores se utilizan para diferenciar cada categoría.
            </p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description Segmentos -->
<div class="modal fade" id="descriptionModalRecamarasSegmentos" tabindex="-1" aria-labelledby="descriptionModalLabelRecamarasSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelRecamarasSegmentos">Descripción Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                En el gráfico de barras se muestra la distribución de la cantidad de casas que tienen un determinado número de recámaras, agrupadas por segmentos. Cada barra representa la cantidad de casas que tienen un número específico de recámaras para un segmento determinado.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalRecamarasGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelRecamarasGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelRecamarasGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Con un <strong>44.3%</strong> y <strong>27.2%</strong> de la participación, la distribución de <strong>3</strong> y <strong>4 recámaras</strong>, respectivamente, es la más frecuente. Esto sugiere que es común encontrar propiedades con este número de recámaras, correspondiente al tamaño de las familias en la ciudad de <strong>Puebla</strong>.
            </p>
            <p>
                En menor proporción se encuentran las propiedades con <strong>2 recámaras</strong> (<strong>23.50%</strong>), <strong>5 recámaras</strong> (<strong>2.95%</strong>), <strong>6 recámaras</strong> (<strong>1.71%</strong>) y <strong>1 recámara</strong> (<strong>0.43%</strong>). Esto sugiere que hay una oferta menor en propiedades con un número tan alto o tan bajo de recámaras.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalRecamarasSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelRecamarasSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelRecamarasSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                El <strong>segmento S</strong> es el que presenta la mayor cantidad de casas con <strong>3 o 4 recámaras</strong>. Al ser considerado un segmento con un rango de precios de entre <strong>4 millones a 12 millones</strong>, las propiedades corresponden a zonas residenciales de gran tamaño.
            </p>
            <p>
                Para el <strong>segmento L</strong> sucede algo muy similar, y aunque tiene poca representación, es notorio que las propiedades de lujo cuentan con <strong>3 a 4 recámaras</strong>.
            </p>
            <p>
                Para los segmentos de menor valor (<strong>E, D, C, B, A</strong>), es posible notar que predominan propiedades con <strong>2 y 3 recámaras</strong>, lo que sugiere que la mayoría de las familias que adquieren este tipo de propiedades son familias pequeñas. Además, el precio de estos segmentos las hace asequibles.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas y los modales -->
<script>
    function showSegmentDataRecamaras(segment) {
       // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
        // Asegurarse de que el directorio exista, si no, proporcionar un mensaje de error
        const srcPath = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_recamaras.html`;
        iframe.src = srcPath;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('RecamarasContainer').innerHTML = '';
        document.getElementById('RecamarasContainer').appendChild(iframe);

        // Actualizar los botones de descripción e interpretación
        const descriptionButton = document.getElementById('descriptionButtonRecamaras');
        const interpretationButton = document.getElementById('interpretationButtonRecamaras');
        descriptionButton.setAttribute('data-bs-target', `#descriptionModalRecamaras${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalRecamaras${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }
      // Mostrar la gráfica de 2019 por defecto al cargar la página
      document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataRecamaras('general');
    });
</script>

        <!-- Gráfica 9: g_bar_dist_m2_construidos -->
<!-- Gráfica: Distribución m2 construidos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución M² construidos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectM2Construidos" onchange="showSegmentDataM2Construidos(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonM2Construidos" data-bs-toggle="modal" data-bs-target="#descriptionModalM2ConstruidosGeneral">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonM2Construidos" data-bs-toggle="modal" data-bs-target="#interpretationModalM2ConstruidosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
<!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
                <div id="M2ConstruidosContainer"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description General -->
<div class="modal fade" id="descriptionModalM2ConstruidosGeneral" tabindex="-1" aria-labelledby="descriptionModalLabelM2ConstruidosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelM2ConstruidosGeneral">Descripción General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                El gráfico de pastel muestra la distribución porcentual de diferentes rangos de metros cuadrados de construcción. Cada porción del círculo representa un porcentaje de un rango específico de metros cuadrados, y los colores se utilizan para diferenciar cada categoría.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description Segmentos -->
<div class="modal fade" id="descriptionModalM2ConstruidosSegmentos" tabindex="-1" aria-labelledby="descriptionModalLabelM2ConstruidosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelM2ConstruidosSegmentos">Descripción Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Este gráfico de barras muestra la distribución de propiedades en Puebla, segmentadas por rangos de precios y metros cuadrados de construcción. En el eje X se encuentran los segmentos de precios (E, D, C, B, A, S, y L) y en el eje Y, el número de casas en cada categoría. Los colores indican los diferentes rangos de metros cuadrados de construcción, desde menos de 100 m² hasta más de 300 m².
                </p>
                <p>
                    Este gráfico permite visualizar cómo se distribuyen las propiedades en función de su tamaño y precio, lo que es útil para identificar patrones y tendencias en la oferta de viviendas.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalM2ConstruidosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelM2ConstruidosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelM2ConstruidosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Observamos una distribución bajamente equilibrada entre los diferentes rangos de superficie. No hay un rango que domine significativamente sobre los demás. La presencia de todos los rangos, desde los más pequeños (<strong>0-100 m²</strong>) hasta los más grandes (<strong>300+ m²</strong>), indica una oferta inmobiliaria bastante diversificada. Esto sugiere que el mercado puede satisfacer las necesidades de diferentes tipos de compradores, desde aquellos que buscan viviendas pequeñas y económicas hasta quienes requieren espacios más amplios.
            </p>
            <p>
                Sin embargo, los rangos de <strong>100-150 m²</strong> (<strong>23%</strong>) y <strong>0-100 m²</strong> (<strong>19.1%</strong>) concentran una porción considerable del total, lo que sugiere que hay una cantidad significativa de propiedades con tamaños medios. Además, el rango de <strong>300+ m²</strong> también concentra una distribución considerable con el <strong>23.1%</strong>, lo que es bastante notable. Esto podría indicar una demanda en el mercado por inmuebles de dimensiones intermedias, que puedan adaptarse a las necesidades de familias medianas o pequeñas.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalM2ConstruidosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelM2ConstruidosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelM2ConstruidosSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Es notorio que el segmento S es el que concentra una cantidad significativa de propiedades en un rango de más de 300 metros cuadrados. Esto se debe a que las propiedades que están dentro de estos segmentos tienen un rango de precio elevado, de 4 millones hasta 12 millones de pesos, es decir, son consideradas de gama alta.
            </p>

            <p>
                En su contraparte, el segmento E es el que tiene propiedades con un rango de metros de construcción mayormente en el rango de 0 a 100 metros de construcción. Esto muestra la relación que hay entre metros de construcción y el precio que hay en el mercado inmobiliario de Puebla. En el segmento D se puede notar que hay una concentración de propiedades de un tamaño de entre 0 a 100 metros cuadrados de construcción, esto corresponde al precio que tiene el segmento de 1M a 1.75M pesos.
            </p>

            <p>
                En lo que corresponde a los segmentos C y B, la concentración de propiedades se encuentra en propiedades de 100 a 150 metros cuadrados. El segmento A concentra propiedades de 200 a 250 metros cuadrados, lo que podría estar directamente relacionado con el precio y el tipo de segmento en el que está ubicado.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataM2Construidos(segment) {
         // Crear el iframe dinámicamente
         const iframe = document.createElement('iframe');
        // Asegurarse de que el directorio exista, si no, proporcionar un mensaje de error
        const srcPath = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_dist_m2_construidos.html`;
        if (!document.querySelector(`[src='${srcPath}']`)) {
            iframe.src = srcPath;
            iframe.width = '100%';
            iframe.height = '400';
            iframe.frameborder = '0';
            // Reemplazar el contenido del contenedor
            document.getElementById('M2ConstruidosContainer').innerHTML = '';
            document.getElementById('M2ConstruidosContainer').appendChild(iframe);
        } else {
            console.error('El directorio especificado no existe.');
        }

        // Actualizar los botones de descripción e interpretación
        const descriptionButton = document.getElementById('descriptionButtonM2Construidos');
        const interpretationButton = document.getElementById('interpretationButtonM2Construidos');
        descriptionButton.setAttribute('data-bs-target', `#descriptionModalM2Construidos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalM2Construidos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }

    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataM2Construidos('general');
    });
</script>


        <!-- Gráfica 12: g_bar_PrecioPromedio_m2 -->
      <!-- Gráfica 12: g_bar_PrecioPromedio_m2 -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Precio Promedio por M² construidos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal12">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal12">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_PrecioPromedio_m2.html" width="100%" height="520" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal12" tabindex="-1" aria-labelledby="descriptionModalLabel12" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel12">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El grafico de barras muestra el precio promedio por metro cuadrado total para diferentes rangos de metros cuadrados construidos. Cada barra representa el precio promedio para un rango específico de metros cuadrados.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal12" tabindex="-1" aria-labelledby="interpretationModalLabel12" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel12">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Los segmentos más pequeños (<strong>0-100 m²</strong> y <strong>100-150 m²</strong>) presentan los valores más altos, de <strong>$18,073.86</strong> y <strong>$17,407.97</strong> respectivamente, lo cual sugiere que las propiedades de tamaño reducido son más caras por metro cuadrado. Seguido, el precio promedio disminuye en los rangos medios: <strong>150-200 m²</strong> con <strong>$14,410.15</strong>, y <strong>200-250 m²</strong> con <strong>$11,818</strong>.
            </p>
            <p>
                El precio se eleva nuevamente en propiedades de <strong>250 a 300 m²</strong> y más de <strong>300 m²</strong>, con promedios de <strong>$12,844.51</strong> y <strong>$18,445.99</strong> respectivamente.
            </p>
            <p>
                La diferencia en los precios puede estar influenciada por la demanda de propiedades más pequeñas en áreas urbanas, donde los espacios más reducidos suelen ser más costosos. Por otro lado, las propiedades más grandes pueden ofrecer un precio menor por m² debido a economías de escala y a la disponibilidad de terrenos más amplios en las zonas periféricas de la ciudad, donde la competencia por espacio es menor.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

    </div>
</div>



<!-- End Page-content -->

<?php include 'layouts/footer.php'; ?>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- jquery-sparkline js -->
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- sparkline init -->
<script src="assets/js/pages/sparklines.init.js"></script>

<script src="assets/js/app.js"></script>

<script>
    function mostrar(id) {
        var iframes = document.getElementsByTagName('iframe');
        for (var i = 0; i < iframes.length; i++) {
            iframes[i].style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';
    }
</script>

<script>
        function toggleDescription(showId, hideId, button) {
            var showElement = document.getElementById(showId);
            var hideElement = document.getElementById(hideId);
            var buttons = document.querySelectorAll('.mostrar');
            
            // Hide the other section
            hideElement.style.display = 'none';

            // Remove 'active' class from all buttons
            buttons.forEach(function(btn) {
                btn.classList.remove('actives');
            });
            
            // Toggle display of the selected section
            if (showElement.style.display === 'none' || showElement.style.display === '') {
                showElement.style.display = 'block';
                button.classList.add('actives'); // Add 'active' class to the clicked button
            } else {
                showElement.style.display = 'none';
                button.classList.remove('actives'); // Remove 'active' class if section is hidden
            }
        }
    </script>

</body>

</html>