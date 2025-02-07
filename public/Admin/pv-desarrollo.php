<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pto. Vallarta | DatAlpine</title>
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
    <!-- start page title -->
    <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jalisco</a></li>
                                    <li class="breadcrumb-item active">Puerto Vallarta</li>
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
                    actuales sobre el mercado inmobiliario en Puerto Vallarta, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
                    <div class="col-md-12"><div class="card"></div></div>
                <!--SE MANEJAN LOS 6 CARD DE Perspectiva general de mercado POR FILTRO DE TIPO DE MERCADO-->
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <h4 class="mb-3">Perspectiva General de Mercado</h4>
                    </div>
                    <div class="col-md-auto" style="text-align: center; margin: 0 auto;">
                        <!--<select class="form-select" id="segmentFilter" style="text-align: center;" onchange="actualizarTablas(this.value)">
                            <option value="general">General</option>
                            <option value="E">E</option>
                            <option value="D">D</option>
                            <option value="C">C</option>
                            <option value="B">B</option>
                            <option value="A">A</option>                                                        
                            <option value="S">S</option>
                            <option value="L">L</option>-->
                            <!--<option value="ELITE">ELITE</option>
                        </select>-->
                        <h4 class="mb-3"></h4>
                    </div>
                </div>
                    <!-- Cargar el script -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="pv-filtros_mercado.js"></script>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Precio Mercado</h5>
                                <table class="table" id="tablaPrecioMercado">                                    
                                    <tbody id="tableBodyPrecioMercado">
                                        <tr>
                                            <td>Mínimo</td>
                                            <td id="precio-minimo">$350,000</td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="precio-maximo">$120,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="precio-promedio">$10,050,961.99</td>
                                        </tr>
                                       <!-- <tr>
                                            <td>Mediana</td>
                                            <td id="precio-mediana">$6,700,000</td>
                                        </tr>-->
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
                                            <td id="precio-metros-construidos-minimo">$1,448</td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="precio-metros-construidos-maximo">$1,706,779</td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="precio-metros-construidos-promedio">$64,859</td>
                                        </tr>
                                        <!--<tr>
                                            <td>Mediana</td>
                                            <td id="precio-metros-construidos-mediana">$59,366</td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Casa Promedio</h5>                                
                                <table class="table" id="tablaPromedios">                                    
                                    <tbody id="tableBodyPromedios">
                                        <tr>
                                            <td>Estacionamientos</td>
                                            <td id="estacionamientos">1</td>
                                        </tr>
                                        <tr>
                                            <td>Recámaras</td>
                                            <td id="recamaras">2</td>
                                        </tr>
                                        <tr>
                                            <td>Baños</td>
                                            <td id="banos">3</td>
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
                                            <td id="metros-terreno-minimo">44</td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="metros-terreno-maximo">2,181</td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="metros-terreno-promedio">178</td>
                                        </tr>
                                        <!--<tr>
                                            <td>Mediana</td>
                                            <td id="metros-terreno-mediana">113</td>
                                        </tr>-->
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
                                            <td id="metros-construidos-minimo">45</td>
                                        </tr>
                                        <tr>
                                            <td>Máximo</td>
                                            <td id="metros-construidos-maximo">1,400</td>
                                        </tr>
                                        <tr>
                                            <td>Promedio</td>
                                            <td id="metros-construidos-promedio">162</td>
                                        </tr>
                                        <!--<tr>
                                            <td>Mediana</td>
                                            <td id="metros-construidos-mediana">115</td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   


                </div>

        <!-- Gráfica 4: Distribución % de créditos por vivienda valor -->
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
                <div id="ViviendaValorContainer"></div>
                <!-- <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_vivienda_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_vivienda_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_vivienda_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2024" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>La gráfica presenta una distribución porcentual de créditos otorgados para la adquisición de viviendas, clasificados por diferentes tipos de vivienda: <strong>Económica</strong>, <strong>Popular</strong>, <strong>Tradicional</strong>, <strong>Media</strong>, <strong>Residencial</strong> y <strong>Residencial Plus</strong>.</p>
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
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas tradicionales, que concentran el <strong>37.03%</strong> de los créditos hipotecarios. Esto sugiere que este tipo de viviendas sigue siendo una opción preferida en el mercado inmobiliario. Las viviendas de valor medio también son populares, con un <strong>24.28%</strong> de los créditos, lo que indica que la clase media sigue siendo un motor importante del mercado.</p>

                <p>Las viviendas residenciales y residenciales plus, con un <strong>12.84%</strong> y <strong>7.77%</strong> respectivamente, representan segmentos significativos pero menores. Las viviendas económicas y populares, con un <strong>11.70%</strong> y <strong>6.38%</strong>, son menos comunes, pero aún así tienen una presencia notable en el mercado. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.</p>
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
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, que concentran el <strong>35.53%</strong> de los créditos hipotecarios. Esto sugiere que la clase media sigue siendo un motor importante del mercado inmobiliario. Las viviendas tradicionales también son muy populares, con un <strong>32.72%</strong> de los créditos, lo que indica una demanda significativa por este tipo de propiedades.</p>

                <p>Las viviendas residenciales y residenciales plus, con un <strong>11.14%</strong> y <strong>8.42%</strong> respectivamente, representan segmentos menores pero aún relevantes. Las viviendas económicas y populares, con un <strong>9.47%</strong> y <strong>2.72%</strong>, son menos comunes, lo que podría estar relacionado con la disponibilidad de financiamiento y el poder adquisitivo de los compradores. Factores como las políticas gubernamentales y la oferta de vivienda influyen en esta distribución.</p>
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
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, que concentran el <strong>35.52%</strong> de los créditos hipotecarios. Esto sugiere que la clase media sigue siendo un motor importante del mercado inmobiliario. Las viviendas tradicionales también son muy populares, con un <strong>33.26%</strong> de los créditos, lo que indica una demanda significativa por este tipo de propiedades.</p>

                <p>Las viviendas residenciales, con un <strong>19.21%</strong>, y residenciales plus, con un <strong>9.98%</strong>, representan segmentos menores pero aún relevantes. Las viviendas económicas y populares, con un <strong>0.32%</strong> y <strong>1.72%</strong> respectivamente, son menos comunes, lo que podría estar relacionado con la disponibilidad de financiamiento y el poder adquisitivo de los compradores. Esta distribución refleja una tendencia hacia viviendas de mayor valor, mientras que los institutos públicos están impulsando la demanda por viviendas de menor valor a nivel nacional[1][4].</p>
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
                iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_creditos_vivienda_${year}.html?year=${year}`;
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
<!---<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_organismo_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_organismo_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_organismo_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2024" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>El diagrama de barras muestra la distribución porcentual de créditos otorgados por diferentes instituciones financieras como lo son <strong>INFONAVIT</strong>, <strong>CNBV</strong>, <strong>FOVISSTE</strong> y <strong>BANJERCITO</strong> durante un año especifico.</p>
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
                <p>Al observar la gráfica, es notorio que la <strong>CNBV</strong> es la institución que otorga la mayor cantidad de créditos, con un <strong>54.40%</strong> del total. Esto sugiere que es la institución más preferida por los solicitantes debido a su amplia cobertura y oferta financiera. <strong>INFONAVIT</strong> también tiene una participación significativa, con un <strong>41.08%</strong>, lo que indica su importancia en el mercado de créditos hipotecarios. Por su parte, <strong>FOVISSTE</strong> tiene una participación menor, con un <strong>4.52%</strong>, lo que sugiere que su enfoque está más limitado a los trabajadores del Estado.</p>
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
                <p>Al observar la gráfica, es notorio que <strong>INFONAVIT</strong> y <strong>CNBV</strong> dominan el mercado de créditos con un <strong>48.69%</strong> y <strong>47.97%</strong> respectivamente. Esto sugiere que son las instituciones más preferidas por los solicitantes debido a su amplia cobertura y oferta financiera. <strong>FOVISSTE</strong> tiene una participación menor pero significativa con un <strong>3.12%</strong>, lo que indica su enfoque en un nicho específico de trabajadores del Estado. Por su parte, <strong>BANJERCITO</strong> tiene una participación mínima, con un <strong>0.22%</strong>, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el periodo analizado.</p>
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
                <p>Al observar la gráfica, es notorio que <strong>INFONAVIT</strong> es la institución que otorga la mayor cantidad de créditos, con un <strong>53.56%</strong> del total. Esto sugiere que es la institución más preferida por los solicitantes debido a su amplia cobertura y oferta financiera. <strong>CNBV</strong> también tiene una participación significativa, con un <strong>43.52%</strong>, lo que indica su importancia en el mercado de créditos hipotecarios. Por su parte, <strong>FOVISSTE</strong> tiene una participación menor, con un <strong>2.83%</strong>, lo que sugiere que su enfoque está más limitado a los trabajadores del Estado. <strong>BANJERCITO</strong> tiene una participación prácticamente inexistente, con un <strong>0.09%</strong>, lo que indica que su participación en el otorgamiento de créditos es mínima en el periodo analizado.</p>
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
                iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_creditos_organismo_${year}.html?year=${year}`;
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

 </div>
<!-- Gráfica: Estacionamientos -->
 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title subtitle mb-3 text-center">Estacionamientos</h5>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user-tie me-2"></i>
                        <span class="developer-label">Desarrollador</span>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="segmentSelectEstacionamientos" onchange="showSegmentDataEstacionamientos(this.value)">                            
                            <option value="segmentos">Segmentos</option>
                            <option value="general">General</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalEstacionamientos">Descripción</button>
                        <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonEstacionamientos" data-bs-toggle="modal" data-bs-target="#interpretationModalEstacionamientosGeneral">Interpretación</button>
                        <!--<button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalEstacionamientos">Interpretación</button>-->
                    </div>
                </div>
                <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                    <div id="EstacionamientosContainer"></div>
    <!--                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                    <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>El gráfico de pastel visualiza la distribución general de estacionamientos en el mercado inmobiliario. Cada porción del círculo representa un porcentaje correspondiente a un número específico de estacionamientos, proporcionando una visión clara de la prevalencia de diferentes configuraciones de estacionamiento en las propiedades.</p>
                <p>El gráfico de barras muestra la distribución del número de casas que tienen un determinado número de estacionamientos, agrupadas por diferentes categorías. Cada barra representa la cantidad de casas que tienen un número específico de estacionamientos para una categoría determinada. Los diferentes colores representan el número de estacionamientos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalEstacionamientosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La mayoría de las propiedades, aproximadamente el <strong>78.2%</strong>, tienen solo 1 estacionamiento, lo que sugiere que este es el tipo más común y accesible para los propietarios. Un <strong>10.6%</strong> tienen 2 estacionamientos, lo que podría indicar propiedades más grandes o familias con varios vehículos. El <strong>11.2%</strong> restante tiene 3 o más estacionamientos, lo que refleja una mayor capacidad económica y posiblemente propiedades de lujo.</p>

                <p>Esta distribución podría estar influenciada por factores como el tamaño de las propiedades, el precio, y la ubicación geográfica. Además, la ausencia de estacionamientos en algunas propiedades, especialmente en departamentos ubicados en áreas urbanas densas, puede deberse a la escasez de espacio y a la promoción de modos de transporte alternativos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalEstacionamientosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientosSegmentos">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Es notorio que en los <strong>segmentos</strong>, las propiedades con <strong>1</strong> estacionamiento son las más comunes. Sin embargo, el segmento <strong>B</strong> es el que tiene la mayor cantidad de propiedades con <strong>1</strong> estacionamiento, con un total de <strong>177</strong>. Por otro lado, el segmento <strong>E</strong> es el que menos propiedades tiene con <strong>3</strong> estacionamiento, lo que podría reflejar una diferencia en el perfil de las propiedades o en las preferencias de los compradores en este segmento.</p>

                <p>Por su parte, el segmento <strong>S</strong> destaca por tener una gran cantidad de propiedades con <strong>1</strong> estacionamiento, lo que sugiere que este segmento también incluye propiedades más accesibles. Además, el segmento <strong>S</strong> tiene un número significativo de propiedades con <strong>3</strong> estacionamientos, lo que indica que también hay propiedades de mayor tamaño y valor en este segmento, compatibles con su carácter premium.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalEstacionamientos" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientos">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La mayoría de las propiedades, aproximadamente el <strong>78.2%</strong>, tienen solo 1 estacionamiento, lo que sugiere que este es el tipo más común y accesible para los propietarios. Un <strong>10.6%</strong> tienen 2 estacionamientos, lo que podría indicar propiedades más grandes o familias con varios vehículos. El <strong>11.2%</strong> restante tiene 3 o más estacionamientos, lo que refleja una mayor capacidad económica y posiblemente propiedades de lujo.</p>

                <p>Esta distribución podría estar influenciada por factores como el tamaño de las propiedades, el precio, y la ubicación geográfica. Además, la ausencia de estacionamientos en algunas propiedades, especialmente en departamentos ubicados en áreas urbanas densas, puede deberse a la escasez de espacio y a la promoción de modos de transporte alternativos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataEstacionamientos(segment) {
         // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_estacionamientos.html`;
                iframe.width = '100%';
                iframe.height = '400';
                iframe.frameborder = '0';
                // Reemplazar el contenido del contenedor
                document.getElementById('EstacionamientosContainer').innerHTML = '';
                document.getElementById('EstacionamientosContainer').appendChild(iframe);

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonEstacionamientos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalEstacionamientos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }
    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataEstacionamientos('pie');
    });
</script>


<!-- Gráfica: Distribución de baños [V2] -->


<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de baños</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectBanos" onchange="showSegmentDataBanos(this.value)">
                        <option value="segmentos">Segmentos</option>
                        <option value="general">General</option>                        
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalBanos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonBanos" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                    <!--<button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalBanos">Interpretación</button>-->
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="BanosContainer"></div>
<!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_banos.html" width="100%" height="400" frameborder="0" id="segmentDataBanosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_banos.html" width="100%" height="400" frameborder="0" id="segmentDataBanosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
            </div>
        </div>
    </div>
</div>
<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalBanos" tabindex="-1" aria-labelledby="descriptionModalLabelBanos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelBanos">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Representa la distribución de la cantidad de baños que poseen las propiedades en la ciudad de <strong>Puerto Vallarta</strong>. Cada porción del círculo representa una cantidad específica de baños. </p>
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
                <p>Es notorio que la mayor parte de las propiedades de <strong>Puerto Vallarta</strong> poseen principalmente entre <strong>1</strong> (<strong>25.9%</strong>), <strong>2</strong> (<strong>49%</strong>), <strong>3</strong> (<strong>23.5%</strong>)  baños, esto representa más de la mitad de todo el mercado inmobiliario e implica que estas propiedades con menor cantidad de baños sean las que tienen un precio asequible. . Por otro lado, en menor representación están las propiedades que poseen <strong>6</strong>(<strong>0.164%</strong>), <strong>>=8</strong> (<strong>0.164%</strong>), <strong>7</strong> (<strong>0.098%</strong>) baños,  dada estas cantidades se puede intuir que son propiedades con un valor más alto.</p>
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
                <p>Es notorio que los segmentos <strong>E</strong>, <strong>D</strong> y <strong>C</strong> tienen una mayor concentración de propiedades con <strong>1</strong>, <strong>2</strong> y <strong>3</strong> baños, lo que es consistente con el rango de precios de estas propiedades. Por otro lado, a medida que aumenta el número de baños, la concentración de propiedades se desplaza hacia los segmentos más altos como <strong>B</strong>, <strong>A</strong> y <strong>S</strong>. Estos segmentos tienen una mayor participación en propiedades con <strong>2</strong> y <strong>3</strong> baños, y aunque hay algunas propiedades con <strong>4</strong> o más baños, estas son más escasas y se concentran principalmente en el segmento <strong>S</strong>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalBanos" tabindex="-1" aria-labelledby="interpretationModalLabelBanos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelBanos">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Es notorio que la mayor parte de las propiedades de <strong>Pachuca de Soto</strong> poseen principalmente entre <strong>1</strong> (<strong>27.9%</strong>), <strong>2</strong> (<strong>26.8%</strong>), <strong>3</strong> (<strong>23.3%</strong>)  baños, esto representa más de la mitad de todo el mercado inmobiliario e implica que estas propiedades con menor cantidad de baños sean las que tienen un precio asequible. . Por otro lado, en menor representación están las propiedades que poseen <strong>4</strong>(<strong>13.5%</strong>), <strong>5</strong> (<strong>6.26%</strong>), <strong>6</strong> (<strong>1.61%</strong>), <strong>7</strong> (<strong>0.39%</strong>), <strong>8</strong> (<strong>0.241%</strong>) baños,  dada estas cantidades se puede intuir que son propiedades con un valor más alto.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataBanos(segment) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        // Asegurarse de que el directorio exista, si no, proporcionar un mensaje de error
        const srcPath = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_banos.html`;
        iframe.src = srcPath;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('BanosContainer').innerHTML = '';
        document.getElementById('BanosContainer').appendChild(iframe);

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonBanos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalBanos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }

    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataBanos('pie');
    });
</script>

<div class="row">
    <!-- Gráfica: Recámaras -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Recámaras</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectRecamaras" onchange="showSegmentDataRecamaras(this.value)">
                        <option value="segmentos">Segmentos</option>
                        <option value="general">General</option>                                            
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalRecamaras">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonRecamaras" data-bs-toggle="modal" data-bs-target="#interpretationModalRecamarasGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
               <!-- <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
                <div id="RecamarasContainer"></div>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalRecamaras" tabindex="-1" aria-labelledby="descriptionModalLabelRecamaras" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelRecamaras">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de pastel ilustra la distribución porcentual del número de recámaras en un conjunto de propiedades, clasificadas por segmentos. Cada sección del gráfico circular representa el porcentaje de propiedades que tienen un número específico de recámaras, y los colores se emplean para distinguir entre las diferentes categorías.</p>
                
                <p>El gráfico de barras ilustra la cantidad de casas por segmento que tienen un número específico de recámaras. Las barras se dividen por segmento, y cada una representa el número de casas dentro de ese segmento que tienen un determinado número de recámaras. Los colores utilizados distinguen entre los diferentes números de recámaras.</p>
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
                <p>Con un <strong>48.7%</strong> de participación, las viviendas con <strong>2</strong> recámaras representan la categoría más frecuente, lo que sugiere que es común encontrar propiedades con este número de habitaciones en este conjunto de datos. Esto podría indicar que se trata de propiedades diseñadas para familias medianas.</p>

                <p>Las categorías restantes presentan porcentajes mucho menores, lo que sugiere que son opciones menos frecuentes. Es posible que estas categorías representen propiedades más pequeñas (<strong>1</strong> o <strong>2</strong> recámaras) o más grandes (<strong>4</strong>, <strong>5</strong> o <strong>6</strong> recámaras), que podrían ser adecuadas para personas solteras, parejas o familias numerosas.</p>

                <p>Esta distribución puede ser debido a que las propiedades con más recámaras suelen ser más caras. Sin embargo, esto puede variar dependiendo de otros factores como la ubicación, la antigüedad y las características de la propiedad.</p>
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
                <p>Los segmentos <strong>C</strong>, <strong>D</strong>, y <strong>B</strong> destacan por tener una cantidad significativa de viviendas con <strong>3</strong> recámaras, lo que indica que en estos segmentos prevalecen las casas de mayor tamaño. Esto puede deberse a que la distribución del número de recámaras refleja el tamaño promedio de las familias que habitan en cada segmento, lo que en este caso podría ser que las familias grandes que necesitan una casa con <strong>3</strong> recámaras sean las más comunes. Sin embargo, los segmentos <strong>S</strong> y <strong>L</strong> también tienen una gran cantidad de propiedades, especialmente con <strong>2</strong> y <strong>3</strong> recámaras, lo que sugiere que estos segmentos también incluyen una variedad de tamaños de viviendas. Además, el segmento <strong>L</strong> destaca por tener una cantidad notable de propiedades con <strong>4</strong> o más recámaras, lo que indica que este segmento incluye propiedades de mayor tamaño y lujo.</p>
                <p>Por otro lado, el segmento <strong>A</strong> exhibe una distribución más uniforme entre el número de recámaras, aunque se nota una inclinación hacia casas con <strong>1</strong> o <strong>2</strong> recámaras en algunos casos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataRecamaras(segment) {
          // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
        // Asegurarse de que el directorio exista, si no, proporcionar un mensaje de error
        const srcPath = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_recamaras.html`;
        iframe.src = srcPath;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('RecamarasContainer').innerHTML = '';
        document.getElementById('RecamarasContainer').appendChild(iframe);


        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonRecamaras');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalRecamaras${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }
   // Mostrar la gráfica de 2019 por defecto al cargar la página
   document.addEventListener('DOMContentLoaded', function() {
        showSegmentDataRecamaras('pie');
    });
</script>


        <!-- Gráfica 9: g_bar_dist_m2_construidos -->
        <!-- Gráfica 9: g_bar_dist_m2_construidos -->
<!-- Gráfica: Distribución m2 construidos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución m2 construidos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectM2Construidos" onchange="showSegmentDataM2Construidos(this.value)">
                        <option value="segmentos">Segmentos</option>
                        <option value="general">General</option>                        
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonM2Construidos" data-bs-toggle="modal" data-bs-target="#descriptionModalM2ConstruidosGeneral">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonM2Construidos" data-bs-toggle="modal" data-bs-target="#interpretationModalM2ConstruidosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                    Este gráfico de barras muestra la distribución de propiedades en <strong>Puerto Vallarta</strong>, segmentadas por rangos de precios y metros cuadrados de construcción. En el eje X se encuentran los segmentos de precios (<strong>E</strong>, <strong>D</strong>, <strong>C</strong>, <strong>B</strong>, <strong>A</strong>, <strong>S</strong>, y <strong>L</strong>) y en el eje Y, el número de casas en cada categoría. Los colores indican los diferentes rangos de metros cuadrados de construcción, desde menos de <strong>100 m²</strong> hasta más de <strong>300 m²</strong>.
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
                <p>La mayoría de las propiedades tienen un tamaño de construcción relativamente pequeño, con un <strong>41.1%</strong> de las viviendas en el rango de 0 a 100 metros cuadrados. Esto sugiere que las propiedades más compactas y accesibles son las más comunes, lo que podría estar relacionado con la demanda de viviendas económicas y la tendencia hacia espacios más eficientes. Un <strong>27.5%</strong> de las propiedades se encuentran en el rango de 100 a 150 metros cuadrados, lo que indica una transición hacia viviendas ligeramente más grandes pero aún así bastante accesibles.</p>
                <p>Los rangos de 150 a 200 metros cuadrados y de 200 a 250 metros cuadrados representan una proporción menor, con un <strong>11.1%</strong> y un <strong>6.34%</strong> respectivamente, lo que sugiere que estas propiedades son menos comunes pero aún relevantes para familias o individuos que buscan un poco más de espacio. Finalmente, un <strong>9.96%</strong> de las propiedades superan los 300 metros cuadrados, lo que indica que las viviendas de mayor tamaño y lujo también tienen una presencia significativa en el mercado.</p>
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
                <p>La mayoría de las propiedades en los segmentos más económicos, como <strong>E</strong> y <strong>D</strong>, tienen un tamaño de construcción pequeño, con una gran cantidad de viviendas en el rango de 0 a 100 metros cuadrados. Sin embargo, a medida que se avanza hacia segmentos más altos, como <strong>S</strong> y <strong>L</strong>, se observa una mayor diversidad en el tamaño de las propiedades, con una notable presencia de viviendas más grandes.</p>

                <p>El segmento <strong>S</strong> destaca por tener una gran cantidad de propiedades en todos los rangos de tamaño, especialmente en el rango de 100 a 150 metros cuadrados, lo que sugiere que este segmento ofrece una amplia variedad de opciones para diferentes necesidades y presupuestos. Por otro lado, el segmento <strong>L</strong> tiene una mayor concentración de propiedades más grandes, con un número significativo de viviendas que superan los 300 metros cuadrados, lo que indica que este segmento se orienta hacia propiedades de lujo y mayor tamaño.</p>
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
        const srcPath = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_${segment === 'general' ? 'pie' : 'bar'}_dist_m2_construidos.html`;
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
        showSegmentDataM2Construidos('pie');
    });
</script>


        <!-- Gráfica 12: g_bar_PrecioPromedio_m2 -->
      <!-- Gráfica 12: g_bar_PrecioPromedio_m2 -->
      <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Precio Promedio por m²</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_PrecioPromedio_m2.html" width="100%" height="520" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>Este análisis visual muestra la variación en costos por metro cuadrado en diferentes rangos de tamaño de propiedades inmobiliarias. La gráfica revela cómo los precios promedio por metro cuadrado cambian a medida que se incrementa el tamaño de las propiedades. Los rangos considerados son los siguientes:</p>
                <ul>
                    <li>0-100 m²</li>
                    <li>100-150 m²</li>
                    <li>150-200 m²</li>
                    <li>200-250 m²</li>
                    <li>250-300 m²</li>
                    <li>Más de 300 m²</li>
                </ul>
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
                <p>La gráfica muestra una clara tendencia de aumento progresivo en los precios por metro cuadrado a medida que aumenta el tamaño de la propiedad. Las propiedades más grandes (<strong>más de 300 m²</strong>, tiene el precio promedio de <strong>$38,540,048.65</strong> por metro cuadrado) son significativamente más caras en términos de costo por metro cuadrado, lo que sugiere una alta demanda y/o mayor valor asociado a propiedades de mayor tamaño.</p>
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