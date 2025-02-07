<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<!-- Contenido específico para Querétaro aquí -->


<head>

    <title>Querétaro | DatAlpine</title>
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
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Querétaro</a></li>
                                    <li class="breadcrumb-item active">Querétaro</li>
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
                    <h1>General</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Querétaro, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>


                    <!-- Columna completa: Distribución de segmentos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de segmentos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegment">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalSegment">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_dist_segmentos.html" width="100%" height="400" frameborder="0" id="segmentData" style="display: block; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegment" tabindex="-1" aria-labelledby="descriptionModalLabelSegment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegment">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra la distribución de segmentos en el mercado inmobiliario de Querétaro, destacando la participación en cada segmento <strong>(E, D, C, B, A, S, L y ELITE)</strong> y permitiendo identificar cuáles son los segmentos más fuertes en el mercado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalSegment" tabindex="-1" aria-labelledby="interpretationModalLabelSegment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegment">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: 90vh;">
                <p>La gráfica revela una distribución variada de propiedades en diferentes rangos de precios en el mercado inmobiliario de Santiago de Querétaro. El análisis del comportamiento de cada segmento y sus subsegmentos revela patrones interesantes en el mercado inmobiliario.</p>
                <ul>
                    <li><strong>Segmento E:</strong> El subsegmento <strong>E3</strong> es el más destacado, mientras que <strong>E1</strong> y <strong>E2</strong> tienen una menor representación, indicando una demanda más limitada en los rangos de precios más bajos.</li>
                    <li><strong>Segmento D:</strong> Tiene una distribución de subsegmentos más equilibrada, aunque es bajo para el tamaño del mercado de la ciudad.</li>
                    <li><strong>Segmento C:</strong> Los subsegmentos <strong>C1, C2 y C3</strong> muestran una distribución uniforme, reflejando estabilidad en la demanda en la gama media del mercado.</li>
                    <li><strong>Segmento B:</strong> Los subsegmentos <strong>B1, B2 y B3</strong> ofrecen una variedad de opciones para compradores con presupuestos variados, mostrando una distribución equilibrada de propiedades en diferentes rangos de precios.</li>
                    <li><strong>Segmento A:</strong> <strong>A1, A2 y A3</strong> tienen una representación similar, indicando una demanda estable en los rangos de precios más altos.</li>
                    <li><strong>Segmento S:</strong> Este segmento es el <strong>S1</strong> el más prominente, sin embargo, <strong>S2</strong> y <strong>S3</strong> son subsegmentos que tienen alta participación en el mercado, indicando una demanda amplia para propiedades de alto valor.</li>
                    <li><strong>Segmento L:</strong> Los subsegmentos de las propiedades L tienen una representación baja en el mercado, el subsegmento que más destaca es el <strong>L1</strong>.</li>
                    <li><strong>Segmento ELITE:</strong> Tiene una presencia mínima, sin embargo es notorio que hay demanda para propiedades de lujo.</li>
                </ul>
                <p>Mientras que el segmento <strong>S</strong> muestra una fuerte presencia en los extremos de la escala de precios, los segmentos <strong>D, C, B y A</strong> muestran una distribución más equilibrada en sus respectivos subsegmentos. Esta información nos permite entender las tendencias de demanda y adaptar estrategias de comercialización y desarrollo de propiedades en consecuencia.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<!-- Sección Proyección y Forecast -->
<div class="container-fluid">
    <div class="row">
<!-- Gráfica: Distribución de créditos por segmento -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentoSelect" onchange="showSegmentoData(this.value)">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmentooo">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonSegmento" data-bs-toggle="modal" data-bs-target="#interpretationModal2022">Interpretación</button>
                </div>
            </div>
            <div id="segmentoDataContainer" style="border-top: 1px solid #ccc; padding-top: 10px;">
                <!-- Contenido dinámico será agregado aquí -->
            </div>
        </div>
    </div>
</div>
<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegmentooo" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la distribución de créditos en segmentos de precios de inmuebles. Esta gráfica permite identificar las tendencias en la concesión de créditos según el valor de las propiedades. Una mayor concentración de créditos en un segmento indica una preferencia por inmuebles de ese rango de precio.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2022 -->
<div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El segmento <strong>E</strong> sigue siendo el más demandado con el <strong>47.8%</strong> de los créditos, pero muestra una tendencia a la baja en comparación con años anteriores. Este descenso podría estar relacionado con un aumento en los precios inmobiliarios, lo que empuja la demanda hacia propiedades de mayor valor. El crecimiento del segmento <strong>D</strong> (<strong>19.1%</strong>) y <strong>C</strong> (<strong>10.3%</strong>) refleja una posible mejora en el poder adquisitivo o un incremento en las inversiones en propiedades de rango medio. El segmento <strong>S</strong> (<strong>10.3%</strong>) mantiene un mercado estable para propiedades de lujo, sugiriendo una demanda sostenida en el nicho de alto valor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2023 -->
<div class="modal fade" id="interpretationModal2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El segmento <strong>E</strong> sigue siendo el más demandado con el <strong>44.4%</strong> de los créditos, pero muestra una tendencia a la baja en comparación con años anteriores. Este descenso podría estar relacionado con un aumento en los precios inmobiliarios, lo que empuja la demanda hacia propiedades de mayor valor. El crecimiento del segmento <strong>D</strong> (<strong>19.9%</strong>) y <strong>C</strong> (<strong>11%</strong>) refleja una posible mejora en el poder adquisitivo o un incremento en las inversiones en propiedades de rango medio. El segmento <strong>S</strong> (<strong>11%</strong>) mantiene un mercado estable para propiedades de lujo, sugiriendo una demanda sostenida en el nicho de alto valor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2024 -->
<div class="modal fade" id="interpretationModal2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El segmento <strong>E</strong> sigue siendo el más demandado con el <strong>43.5%</strong> de los créditos, pero muestra una tendencia a la baja en comparación con años anteriores. Este descenso podría estar relacionado con un aumento en los precios inmobiliarios, lo que empuja la demanda hacia propiedades de mayor valor. El crecimiento del segmento <strong>D</strong> (<strong>21.1%</strong>) y <strong>C</strong> (<strong>11.6%</strong>) refleja una posible mejora en el poder adquisitivo o un incremento en las inversiones en propiedades de rango medio. El segmento <strong>S</strong> (<strong>10.4%</strong>) mantiene un mercado estable para propiedades de lujo, sugiriendo una demanda sostenida en el nicho de alto valor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentoData(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_creditos_segmento_${year}.html`;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        iframe.style.minHeight = '430px';
        iframe.style.border = '0';

        // Reemplazar el contenido del contenedor
        document.getElementById('segmentoDataContainer').innerHTML = '';
        document.getElementById('segmentoDataContainer').appendChild(iframe);

        // Cambiar el modal de interpretación según el año seleccionado
        document.getElementById('interpretationButtonSegmento').setAttribute('data-bs-target', `#interpretationModal${year}`);
    }

    // Mostrar la gráfica de 2022 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentoData('2022');
    });
</script>


<!-- Columna completa: Segmentación de mercado: Tendencias de precios por segmento -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Segmentación de mercado: Tendencias de precios por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal2">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal2">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_precio_segmento_tendencia.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Descripción -->
<div class="modal fade" id="descriptionModal2" tabindex="-1" aria-labelledby="descriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí va el contenido de la descripción -->
                <p>El gráfico de barras muestra las tendencias de precios para diferentes segmentos (representados por las letras <strong>E, D, C, B, A, S, L</strong>). Cada barra representa un segmento y su altura indica el porcentaje de cambio en el precio de ese segmento. Las barras que se extienden hacia arriba indican un aumento en el precio, mientras que las que se extienden hacia abajo indican una disminución.</p>
            </div>

        </div>
    </div>
</div>

<!-- Modal de Interpretación -->
<div class="modal fade" id="interpretationModal2" tabindex="-1" aria-labelledby="interpretationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí va el contenido de la interpretación -->
                <p>
                    <strong>Variabilidad en los segmentos:</strong> Los diferentes segmentos muestran comportamientos de precios bastante distintos. La mayoría de los segmentos presentan un aumento en sus precios, lo que sugiere una tendencia general al alza en los precios.
                </p>
                <p>
                    El <strong>segmento B</strong> presenta un aumento en el precio (<strong>58.48%</strong>), aunque es el menor de todos los segmentos. El <strong>segmento A</strong> presenta un aumento más pronunciado (<strong>62.28%</strong>) en comparación con el segmento B. El <strong>segmento C</strong> muestra un aumento en el precio (<strong>77.83%</strong>), lo que indica un alza significativa en sus precios.
                </p>
                <p>
                    Los <strong>segmentos D</strong> y <strong>E</strong> experimentan un aumento considerable en su precio (<strong>128.21%</strong> y <strong>133.77%</strong>, respectivamente), destacándose como los mayores incrementos con una clara tendencia al alza.
                </p>
                <p>
                    El <strong>segmento S</strong> muestra una disminución pronunciada en el precio (<strong>-89.12%</strong>), siendo el único segmento con una tendencia a la baja.
                </p>

            </div>
        </div>
    </div>
</div>


        <!-- Columna completa: Profesiones -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Profesiones</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal3">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal3">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_profesiones.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Columna completa: g_bar_mercadosalario_parejas_vol -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mercado salario parejas (Volumen)</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal4">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal4">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna completa: g_bar_mercadosalario_parejas -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mercado salario parejas</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal5">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal5">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna completa: g_bar_mercadosalario_persona -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mercado salario por persona</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal6">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal6">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div> -->


<!-- Columna completa: g_pie_creditos_genero -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por género</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal7">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal7">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_creditos_genero.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal7" tabindex="-1" aria-labelledby="descriptionModalLabel7" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel7">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica de pastel refleja la proporción de créditos otorgados a hombres y mujeres de 2019 a 2024.</p>
                
                <p>Este tipo de gráfico nos muestra posibles diferencias en el acceso al financiamiento por género y ofrece información sobre cómo se distribuyen los recursos financieros en el mercado inmobiliario.</p>
                
                <p>Si la proporción de hombres es mayor, se sugiere que más créditos se otorgan a este grupo, y si la proporción de mujeres es mayor, se observa lo contrario.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal7" tabindex="-1" aria-labelledby="interpretationModalLabel7" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel7">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                La gráfica muestra que un mayor porcentaje de créditos es otorgado a <strong>hombres (54.8%)</strong> en comparación con <strong>mujeres (45.2%)</strong>. Esta diferencia podría estar relacionada con factores socioeconómicos, como la mayor presencia de hombres en sectores de la economía que dominan en <strong>Querétaro</strong>, como la manufactura, la industria automotriz, y otras áreas vinculadas a la inversión y la construcción. Además, las desigualdades persistentes en el acceso a financiamiento pueden reflejar la brecha salarial entre géneros y las barreras culturales, las cuales también pueden influir en estas cifras. Sin embargo, la participación significativa de mujeres también refleja un creciente acceso al crédito para esta parte de la población y una mayor participación en la adquisición de bienes inmuebles en la región.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<!-- Columna completa: g_pie_creditos_genero
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de Colonias</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalmc">Descripción</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/mapas/colonias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                </div>
        </div>
    </div>
</div>
 -->


 <!-- Gráfica: Distribución % de créditos por categoría (trimestre) -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por categoría (trimestre)</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="categoriaSelect" onchange="showCategoriaData(this.value)">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalCategoria">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonCategoria" data-bs-toggle="modal" data-bs-target="#interpretationModalTrimestre2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="segmentoTrimestreDataContainer"></div>    
                <!--                                
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_2022.html" width="100%" height="400" frameborder="0" id="categoriaData2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_2023.html" width="100%" height="400" frameborder="0" id="categoriaData2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_2024.html" width="100%" height="400" frameborder="0" id="categoriaData2024" style="display: none; min-height: 430px; border: 0;"></iframe>
                -->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalCategoria" tabindex="-1" aria-labelledby="descriptionModalLabelCategoria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelCategoria">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la distribución porcentual de créditos por categorías de precios durante los cuatro trimestres del año. Esta gráfica revela las tendencias en la concesión de créditos para diferentes rangos de precios de inmuebles en Pachuca de Soto, desde el segmento E (<strong>3.25</strong> a <strong>4</strong> millones) hasta el segmento ELITE (más <strong>12</strong> millones). Un mayor porcentaje en un trimestre indica una mayor demanda de créditos en ese segmento para ese periodo, y las variaciones entre trimestres muestran cómo las preferencias de los compradores fluctúan a lo largo del año.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2022 -->
<div class="modal fade" id="interpretationModalTrimestre2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Para el año <strong>2022</strong>, el segmento E (menos de <strong>500</strong> mil a <strong>1</strong> millón) domina en todos los trimestres, lo que indica una preferencia constante por propiedades más accesibles en Pachuca de Soto. El crecimiento del sector inmobiliario en la zona refleja una fuerte demanda de inmuebles, en especial en la zona metropolitana.</p>

                <p>Conforme aumentan los precios de los segmentos, los créditos otorgados disminuyen. La participación de los segmentos S y L sugieren un nicho de mercado para adquirir propiedades de lujo, probablemente impulsado por la creciente atracción de inversionistas nacionales e internacionales.</p>

                <p>Esto también puede estar vinculado a la expansión de desarrollos sostenibles y la llegada de nuevos proyectos residenciales y comerciales en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2023 -->
<div class="modal fade" id="interpretationModalTrimestre2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Para el año <strong>2023</strong>, el segmento E (menos de <strong>500</strong> mil a <strong>1</strong> millón) domina en todos los trimestres, lo que indica una preferencia constante por propiedades más accesibles en Pachuca de Soto. El crecimiento del sector inmobiliario en la zona refleja una fuerte demanda de inmuebles, en especial en la zona metropolitana.</p>

                <p>La participación de los segmentos de mayor valor (S y L) sugiere un nicho de mercado para adquirir propiedades de lujo, probablemente impulsado por la creciente atracción de inversionistas nacionales e internacionales.</p>

                <p>Esto también puede estar vinculado a la expansión de desarrollos sostenibles y la llegada de nuevos proyectos residenciales y comerciales en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2024 -->
<div class="modal fade" id="interpretationModalTrimestre2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Para los primeros 2 trimestres del 2024, el segmento E (menos de <strong>500</strong> mil a <strong>1</strong> millón) sigue dominando de manera significativa en ambos trimestres, lo que refuerza la preferencia por propiedades más accesibles, probablemente impulsado por la demanda de jóvenes compradores y familias locales en busca de vivienda económica.</p>

                <p>El segmento D (<strong>1</strong> millón a <strong>1.75</strong> millones) también muestra una participación considerable, lo que puede estar relacionado con el crecimiento económico de Pachuca de Soto, este atrayendo a compradores con mayor poder adquisitivo.</p>

                <p>Mientras que el resto de los segmentos presentan porcentajes de participación menores.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showCategoriaData(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_dist_creditos_segmento_percent_${year}.html`;        
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        iframe.style.minHeight = '430px';
        iframe.style.border = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('segmentoTrimestreDataContainer').innerHTML = '';
        document.getElementById('segmentoTrimestreDataContainer').appendChild(iframe);
        // Cambiar el modal de interpretación según el año seleccionado
        document.getElementById('interpretationModalTrimestre').setAttribute('data-bs-target', `#interpretationModal${year}`);
    }
    
    // Mostrar la gráfica de 2022 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showCategoriaData('2022');
    });      
</script>


<!-- Columna completa: g_bar_tiempoventa_total -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Tiempo general de venta</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalTiempoVenta">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalTiempoVenta">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_tiempoventa_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalTiempoVenta" tabindex="-1" aria-labelledby="descriptionModalLabelTiempoVenta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelTiempoVenta">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de barras representa el tiempo estimado de venta de propiedades en diferentes segmentos del mercado inmobiliario. Cada grupo representa un segmento específico (identificado por las letras <strong>A, B, C, D, E, L y S</strong>) y barras individuales dentro de cada grupo corresponden a diferentes rango de antigüedad de las propiedades (medido en meses). La altura de cada barra indica el número de casas vendidas en ese segmento y rango de antigüedad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalTiempoVenta" tabindex="-1" aria-labelledby="interpretationModalLabelTiempoVenta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelTiempoVenta">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Es posible notar que en el mercado inmobiliario de <strong>Santiago de Querétaro</strong> las propiedades se venden en periodos largos de tiempo, <strong>9 meses</strong> o entre <strong>16 y 18 meses</strong>. Esto muestra lo dinámico que es el mercado en la zona.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal8" tabindex="-1" aria-labelledby="descriptionModalLabel8" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel8">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    La gráfica muestra el **tiempo total de venta** de propiedades en el mercado de Querétaro. Este análisis permite observar cuánto tiempo, en promedio, tarda una propiedad en ser vendida desde que se publica hasta que se concreta la venta. Es un indicador clave del ritmo de ventas y la eficiencia del mercado inmobiliario en diferentes segmentos.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal8" tabindex="-1" aria-labelledby="interpretationModalLabel8" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel8">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    El tiempo total de venta refleja la velocidad con la que se mueve el mercado inmobiliario en Querétaro. Un tiempo de venta más corto indica una alta demanda y un mercado dinámico, mientras que tiempos más largos podrían sugerir saturación de oferta o poca demanda. En propiedades de segmentos altos, el tiempo de venta suele ser mayor debido a su valor más elevado y la menor cantidad de compradores potenciales. Por otro lado, en segmentos más bajos o accesibles, el tiempo de venta tiende a ser menor debido a la mayor accesibilidad financiera de los compradores.
                </p>
                <p>
                    Este dato es clave para **desarrolladores** y **vendedores** que buscan ajustar estrategias de precios, marketing y tiempos de lanzamiento para maximizar la rotación de propiedades.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Columna completa: g_bar_tiempo_venta -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Tiempo total de venta (por segmento)</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalMesesAtiguedad">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalMesesAtiguedad">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_tiempoventa.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalMesesAtiguedad" tabindex="-1" aria-labelledby="descriptionLabelMesesAtiguedad" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalMesesAtiguedad">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de barras visualiza el tiempo estimado de venta de propiedades en diferentes segmentos del mercado inmobiliario. Cada grupo representa un segmento específico (identificado por las letras <strong> A, B, C, D, E, L y S</strong>) y las barras individuales dentro de cada grupo corresponden a diferentes rangos de antigüedad de las propiedades (medido en meses). La altura de cada barra indica el número de casas vendidas en ese segmento y rango de antigüedad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalMesesAtiguedad" tabindex="-1" aria-labelledby="interpretationModalLabelTiempoVenta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelTiempoVenta">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Es posible notar que el mercado inmobiliario de Santiago de Querétaro, es consistente en el tiempo que tardan las propiedades en venderse. La mayoría de los segmentos poseen tiempos de venta homogéneos. Sin embargo, el segmento S es el grupo que mayor participación tiene en periodos de venta de 9 meses y 16 a 18 meses, esto puede deberse a que son propiedades con alto precio, lo que dificulta que puedan venderse rápido.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Gráfica: Demográfico: Distribución de la población de Querétaro por género y rango de edad -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Demográfico: Distribución de la población de Querétaro por género y rango de edad</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal9">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal9">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_piramid_poblacion.html" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal9" tabindex="-1" aria-labelledby="descriptionModalLabel9" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel9">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
            Se muestra la distribución de la población por rango de edad y género en la ciudad de Querétaro en los últimos años.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal9" tabindex="-1" aria-labelledby="interpretationModalLabel9" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel9">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
            En la ciudad de Santiago de Querétaro buena parte de la población se encuentra en un rango de edad de entre  20 a 49 años, este rango de edad es importante ya que comúnmente se caracteriza por ser población económicamente activa. 
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

        <!-- g_bar_distribucion_segmentos -->


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