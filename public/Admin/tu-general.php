<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Tulancingo | DatAlpine</title>
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                    <li class="breadcrumb-item active">Tulancingo</li>
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
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<div class="container-fluid">
    <div class="row">
<!-- Gráfica: Distribución de créditos por segmento -->
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalSegmento">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_segmentos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegmento" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: 90vh;">
                <p>Distribución de segmentos. Conoce la participación en el mercado inmobiliario por segmentos <strong>(E, D, C, B, A, S, L y ELITE)</strong>. Cada sección representa el porcentaje o proporción en ese segmento específico en relación con el total.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalSegmento" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: 90vh;">
                <p>La gráfica revela una distribución variada de propiedades en diferentes rangos de precios en el mercado inmobiliario de Tulancingo de Bravo. El análisis del comportamiento de cada segmento y sus subsegmentos revela patrones interesantes en el mercado inmobiliario.</p>
                <p>- <strong>Segmento E</strong>: El subsegmento <strong>E2</strong> es el más destacado, mientras que <strong>E1</strong> y <strong>E3</strong> tienen una menor representación, sin embargo es notorio que las propiedades de este rango de precio es relevante.</p>
                <p>- <strong>Segmento D</strong>: Aunque <strong>D2</strong> y <strong>D3</strong> muestran una presencia notable, <strong>D1</strong> tiene una representación más alta, sugiriendo una demanda en los rangos de precios medios.</p>
                <p>- <strong>Segmento C</strong>: Los subsegmentos <strong>C1</strong>, <strong>C2</strong> y <strong>C3</strong> muestran una distribución relativamente uniforme, reflejando estabilidad en la demanda en la gama media del mercado.</p>
                <p>- <strong>Segmento B</strong>: Los subsegmentos <strong>B1</strong>, <strong>B2</strong> y <strong>B3</strong> ofrecen una variedad de opciones para compradores con presupuestos variados, mostrando una distribución equilibrada de propiedades en diferentes rangos de precios.</p>
                <p>- <strong>Segmento A</strong>: <strong>A1</strong>, <strong>A2</strong> y <strong>A3</strong> tienen una representación similar, indicando una demanda estable en los rangos de precios más altos.</p>
                <p>- <strong>Segmento S</strong>: Este segmento es el <strong>S1</strong> el más prominente, indicando la reducida demanda para propiedades de alto valor.</p>
                <p>- <strong>Segmento L</strong>: Los subsegmentos de las propiedades L tienen una representación bastante mínima en el mercado lo que no permite distinguir la participación mayoritaria.</p>
                <p>- <strong>Segmento ELITE</strong>: No tiene presencia en el mercado inmobiliario de Tulancingo de Bravo.</p>
                <p>Mientras que los segmentos <strong>E</strong> y <strong>D</strong> muestran una fuerte presencia en los extremos de la escala de precios, los segmentos <strong>C</strong>, <strong>B</strong> y <strong>A</strong> muestran una distribución más equilibrada en sus respectivos subsegmentos. Esta información nos permite entender las tendencias de demanda y adaptar estrategias de comercialización y desarrollo de propiedades en consecuencia.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>







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
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="segmentoDataContainer"></div>
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
                <p>El predominio de los créditos en el segmento <strong>E</strong> (<strong>68.7%</strong>) refleja una alta demanda por propiedades de menor precio, donde hay una oferta considerable de inmuebles más accesibles; lo cual puede estar relacionado con el nivel adquisitivo de la mayoría de la población en <strong>Tulancingo de Bravo</strong> y la estructura del mercado inmobiliario. Esto puede explicarse también por la composición económica de la ciudad, que cuenta con una fuerte participación de sectores como la industria manufacturera, comercio, servicios y construcción; lo que genera una clase trabajadora enfocada en propiedades de bajo a mediano costo. El segmento <strong>S</strong>, a pesar de ser más costoso, representa un <strong>0.63%</strong> de los créditos, lo cual indica un nicho de mercado de alta gama, probablemente impulsado por una pequeña élite económica.</p>
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
                <p>El segmento <strong>E</strong> continúa siendo el mayor receptor de créditos en <strong>2023</strong>, con un <strong>65.1%</strong>, lo que sugiere que sigue existiendo una fuerte demanda por propiedades más económicas. Esto puede estar relacionado con los niveles de ingresos predominantes en la región y una oferta inmobiliaria enfocada en propiedades accesibles para la clase trabajadora de <strong>Pachuca de Soto</strong>. Sin embargo, la estabilidad del segmento <strong>S</strong>, que recibe el <strong>0.96%</strong> de los créditos, indica la persistencia de un mercado de alta gama, probablemente dirigido a inversionistas o un grupo que percibe mayores ingresos.</p>
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
                <p>El segmento <strong>E</strong> sigue siendo el más demandado con el <strong>73.6%</strong> de los créditos, pero muestra una tendencia a la baja en comparación con años anteriores. Este descenso podría estar relacionado con un aumento en los precios inmobiliarios, lo que empuja la demanda hacia propiedades de mayor valor. El crecimiento del segmento <strong>D</strong> (<strong>16.2%</strong>) y <strong>C</strong> (<strong>4.57%</strong>) refleja una posible mejora en el poder adquisitivo o un incremento en las inversiones en propiedades de rango medio. El segmento <strong>S</strong> (<strong>1.02%</strong>) mantiene un mercado estable para propiedades de lujo, sugiriendo una demanda sostenida en el nicho de alto valor.</p>
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
        iframe.src = `/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_creditos_segmento_${year}_OFICIAL.html`;
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_precio_segmento_tendencias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal2" tabindex="-1" aria-labelledby="descriptionModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel2">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de barras muestra las tendencias de precios para diferentes segmentos (representados por las letras <strong>E, D, C, B, A, S, L</strong>). Cada barra representa un segmento y su altura indica el porcentaje de cambio en el precio de ese segmento. Las barras que se extienden hacia arriba indican un aumento en el precio, mientras que las que se extienden hacia abajo indican una disminución.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal2" tabindex="-1" aria-labelledby="interpretationModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                <strong>Variabilidad en los segmentos:</strong> Los diferentes segmentos muestran comportamientos de precios bastante distintos. La mayoría de los segmentos presentan una reducción en sus precios, lo que sugiere una tendencia general a la baja.
            </p>
            <p>
                El <strong>segmento A</strong> experimenta una disminución mínima en el precio (<strong>-0.32%</strong>), siendo la menor de todas. El <strong>segmento B</strong> presenta un decrecimiento ligeramente mayor (<strong>-0.73%</strong>) en comparación con el segmento A. El <strong>segmento C</strong> muestra una disminución superior en el precio (<strong>-2.18%</strong>), lo que indica una baja significativa.
            </p>
            <p>
                El <strong>segmento S</strong> presenta un aumento modesto en su precio (<strong>0.77%</strong>), destacándose como el primero con una tendencia al alza. El <strong>segmento E</strong> muestra un aumento en el precio (<strong>2.96%</strong>), aunque no tan pronunciado como el del <strong>segmento D</strong> (<strong>4.08%</strong>), siendo este último el que muestra el mayor aumento de todos.
            </p>
            <p>
                El <strong>segmento L</strong> no presenta cambio en sus precios.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_profesiones.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_creditos_genero.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>De acuerdo con el gráfico, las <strong>mujeres</strong> representan una menor proporción de los solicitantes de créditos en comparación con los <strong>hombres</strong>. Esto significa que los <strong>hombres</strong> tienden a solicitar y obtener créditos con mayor frecuencia. Esto podría ser gracias a que los factores socioeconómicos, como los <strong>ingresos</strong>, el <strong>empleo</strong> y la <strong>educación</strong>, pueden influir en la capacidad de las <strong>mujeres</strong> para acceder al crédito. Históricamente, las <strong>mujeres</strong> han tenido menores <strong>ingresos</strong> y menos oportunidades laborales, lo que podría limitar su acceso a productos financieros.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

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
        iframe.src = `/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_creditos_segmento_percent_${year}.html`;        
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal8">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal8">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_tiempoventa_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras representa el tiempo estimado de venta de propiedades en diferentes segmentos del mercado inmobiliario. Cada grupo representa un segmento específico (identificado por las letras <strong>A, B, C, D, E, L y S</strong>) y barras individuales dentro de cada grupo corresponden a diferentes rango de antigüedad de las propiedades (medido en meses). La altura de cada barra indica el número de casas vendidas en ese segmento y rango de antigüedad.</p>
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
                <p>Las propiedades que han estado menos tiempo en el mercado (de 7 a 10 meses) representan la mayor cantidad, con <strong>75</strong>, <strong>76</strong>, <strong>88</strong> y <strong>67</strong> viviendas, respectivamente. Esto puede deberse a la alta demanda inmobiliaria en <strong>Tulancingo</strong>, que ha crecido gracias a la expansión industrial.</p>
                <p>Las propiedades con antigüedad media (11 a 15 meses) muestran una caída progresiva, con <strong>35</strong>, <strong>39</strong>, <strong>26</strong> y <strong>17</strong> viviendas, lo que podría indicar que las viviendas que no se venden en el primer año tienden a perder atractivo debido a la oferta continua de opciones más nuevas y mejor ubicadas.</p>
                <p>Por último, las viviendas que han permanecido más tiempo en el mercado (de 16 meses a más de 24 meses) muestran los valores más bajos, con solo <strong>7</strong>, <strong>13</strong> y <strong>29</strong> propiedades, respectivamente. Esta baja absorción puede ser reflejo de una saturación del mercado o de precios por encima de la capacidad adquisitiva de los compradores locales, una ciudad donde el crecimiento acelerado ha generado un mercado inmobiliario con segmentos de difícil acceso para ciertas poblaciones.</p>
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal9">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal9">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_tiempoventa.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras muestra el tiempo estimado de venta de propiedades en diferentes segmentos (<strong>A</strong>, <strong>B</strong>, <strong>C</strong>, <strong>D</strong>, <strong>E</strong> y <strong>S</strong>). Cada grupo de barras representa un segmento y las barras individuales dentro de cada grupo corresponden a diferentes <strong>meses</strong> de antigüedad de las propiedades. La altura de cada barra indica el <strong>número</strong> de casas vendidas en ese segmento y con ese tiempo de antigüedad.</p>
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
                <p>Los segmentos de menor valor, como el segmento <strong>"E"</strong> (económico) y el <strong>"D"</strong> (popular), concentran la mayor cantidad de propiedades con tiempos de venta entre <strong>7</strong> y <strong>10</strong> <strong>meses</strong>, principalmente <strong>9</strong> <strong>meses</strong> para el segmento <strong>D</strong>, lo que sugiere una alta demanda por viviendas más accesibles, en parte impulsada por la disponibilidad de créditos y la composición sociodemográfica local, que incluye una población mayormente de ingresos medios y bajos. Por otro lado, segmentos de precio intermedio, como <strong>"C"</strong> y <strong>"B"</strong>, presentan tiempos de venta más variables, con picos en antigüedad de <strong>10</strong> a <strong>12</strong> <strong>meses</strong>, reflejando una menor estabilidad en la demanda de propiedades de este rango de precio.</p>
                <p>Para los segmentos de mayor valor, como <strong>"S"</strong> y <strong>"L"</strong>, el tiempo de venta tiende a prolongarse debido a la baja proporción de compradores con suficiente capacidad económica para adquirir propiedades de alta gama en <strong>Tulancingo</strong>. Además, factores como la falta de infraestructura de lujo en la ciudad y la concentración de personas con altos ingresos en municipios vecinos como <strong>Pachuca</strong> podrían estar limitando la absorción de propiedades residenciales premium en estos segmentos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- g_piramid_poblacion con un solo desplegable y dos iframes para Hidalgo y Tulancingo -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Demográfico: Distribución de la población por género y rango de edad</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select me-2" id="locationSelect" onchange="updateGraphs()">
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Tulancingo">Tulancingo</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPiramid">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonPiramid" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>

            <!-- Espacios para los dos iframes -->
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/compartidas/assets/graficas/g_piramid_poblacion_hgo.html" width="100%" height="400" frameborder="0" id="iframeHidalgo" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_piramid_poblacion.html" width="100%" height="400" frameborder="0" id="iframeTulancingo" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalPiramid" tabindex="-1" aria-labelledby="descriptionModalLabelPiramid" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelPiramid">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica proporciona una representación visual de la población segmentada por rangos de edad y género en la ubicación seleccionada para observar cómo se distribuye la población en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation Hidalgo -->
<div class="modal fade" id="interpretationModalPiramidHidalgo" tabindex="-1" aria-labelledby="interpretationModalLabelHidalgo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelHidalgo">Interpretación Hidalgo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la pirámide poblacional de <strong>Hidalgo</strong>, se observa una distribución mayoritaria en los rangos de <strong>20 a 49 años</strong>, lo que indica una población en edad productiva. Este grupo es clave para la demanda de viviendas y desarrollo inmobiliario en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation Tulancingo -->
<div class="modal fade" id="interpretationModalPiramidTulancingo" tabindex="-1" aria-labelledby="interpretationModalLabelTulancingo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelTulancingo">Interpretación Tulancingo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la pirámide poblacional de <strong>Tulancingo de Bravo</strong>, se observa una mayor concentración en el rango de <strong>15 a 19 años</strong>, pero también una fuerte presencia en el rango de <strong>20 a 49 años</strong>, lo que representa una alta demanda potencial de viviendas en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para actualizar los iframes y modales según la ubicación seleccionada -->
<script>
    function updateGraphs() {
        const location = document.getElementById('locationSelect').value;

        // Mostrar/ocultar iframes según la ubicación seleccionada
        if (location === 'Hidalgo') {
            document.getElementById('iframeHidalgo').style.display = 'block';
            document.getElementById('iframeTulancingo').style.display = 'none';
        } else if (location === 'Tulancingo') {
            document.getElementById('iframeHidalgo').style.display = 'none';
            document.getElementById('iframeTulancingo').style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonPiramid');
        if (location === 'Hidalgo') {
            interpretationButton.setAttribute('data-bs-target', '#interpretationModalPiramidHidalgo');
        } else if (location === 'Tulancingo') {
            interpretationButton.setAttribute('data-bs-target', '#interpretationModalPiramidTulancingo');
        }
    }

    // Cargar las gráficas de Hidalgo por defecto al iniciar la página
    window.onload = function() {
        updateGraphs();
    };
</script>



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