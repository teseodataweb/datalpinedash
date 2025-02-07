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
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Puebla</a></li>
                                    <li class="breadcrumb-item active">Puebla</li>
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
                    actuales sobre el mercado inmobiliario en Puebla, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<div class="container-fluid">
    <div class="row">

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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_dist_segmentos.html" width="100%" height="400" frameborder="0" id="segmentData" style="display: block; min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica ilustra la distribución de los segmentos en el mercado inmobiliario de Puebla, destacando la participación de cada segmento <strong>(E, D, C, B, A, S, L y ELITE)</strong> en relación con el total, con una representación visual clara de cada sección.</p>
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
                <p>La gráfica revela una distribución variada de propiedades en diferentes rangos de precios en el mercado inmobiliario de Puebla de Zaragoza. El análisis del comportamiento de cada segmento y sus subsegmentos revela patrones interesantes en el mercado inmobiliario.</p>
                <ul>
                    <li><strong>Segmento E:</strong> El subsegmento <strong>E2</strong> es el más destacado, mientras que <strong>E1</strong> y <strong>E3</strong> tienen una menor representación, sin embargo es notoria su fuerte presencia en el mercado.</li>
                    <li><strong>Segmento D:</strong> Aunque <strong>D1</strong> y <strong>D3</strong> muestran una presencia notable, <strong>D2</strong> tiene una representación intermedia sugiriendo una demanda considerable en los rangos de precios más altos.</li>
                    <li><strong>Segmento C:</strong> Los subsegmentos <strong>C1, C2 y C3</strong> muestran una distribución uniforme, reflejando estabilidad en la demanda en la gama media del mercado.</li>
                    <li><strong>Segmento B:</strong> Los subsegmentos <strong>B1, B2 y B3</strong> ofrecen una variedad de opciones para compradores con presupuestos variados, mostrando una distribución equilibrada de propiedades en diferentes rangos de precios.</li>
                    <li><strong>Segmento A:</strong> <strong>A1, A2 y A3</strong> tienen una representación similar, indicando una demanda estable en los rangos de precios más altos.</li>
                    <li><strong>Segmento S:</strong> Este segmento es el <strong>S1</strong> el más prominente, sin embargo, <strong>S2</strong> y <strong>S3</strong> son subsegmentos que tienen alta participación en el mercado, indicando una demanda amplia para propiedades de alto valor.</li>
                    <li><strong>Segmento L:</strong> Los subsegmentos de las propiedades <strong>L</strong> tienen una representación baja en el mercado, sin embargo en L1 las propiedades tienen una presencia destacable.</li>
                    <li><strong>Segmento ELITE:</strong> Tiene una presencia escasa en todo el mercado inmobiliario.</li>
                </ul>
                <p>Mientras que los segmentos <strong>E y S</strong> muestran una fuerte presencia en los extremos de la escala de precios, los segmentos <strong>D, C, B y A</strong> muestran una distribución más equilibrada en sus respectivos subsegmentos. Esta información nos permite entender las tendencias de demanda y adaptar estrategias de comercialización y desarrollo de propiedades en consecuencia.</p>
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
                <p>Se muestra la distribución de créditos en segmentos de precios de inmuebles. Esta gráfica permite identificar las tendencias en la concesión de créditos según el valor de las propiedades. Una mayor concentración de créditos en un segmento indica una preferencia por inmuebles de ese rango de precio. Si se observa una mayor proporción en segmentos de menor valor, sugiere que los compradores se inclinan por propiedades más accesibles. Por el contrario, una concentración en segmentos altos indicaría una demanda por inmuebles de lujo.</p>
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
                <p>En Puebla en el año 2022, el <strong>64.8%</strong> de los créditos otorgados para la compra de bienes inmuebles se destinaron a propiedades dentro del <strong>segmento S</strong>, lo que refleja que una gran parte de la población recurre a diversas instituciones financieras para adquirir su vivienda. El segundo segmento con mayor participación en créditos es el <strong>D</strong>, con un <strong>17.6%</strong>. Los segmentos con menor emisión de créditos son el <strong>A</strong>, con el <strong>1.84%</strong>, y el <strong>segmento L</strong>, con el <strong>0.425%</strong>, debido a que las propiedades de este segmento podrían ser consideradas de lujo.</p>
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
                <p>En Puebla, durante el año 2023, el <strong>59.8%</strong> de los créditos otorgados para la compra de bienes inmuebles se destinaron a propiedades dentro del segmento S, lo que indica que, aunque son créditos de menor valor, existe una alta demanda. Los segmentos D y C ocuparon el segundo y tercer lugar, con una participación del <strong>19.3%</strong> y <strong>8.58%</strong> respectivamente.</p>

                <p>Por otro lado, los segmentos con menor emisión de créditos fueron el <strong>A</strong>, con un <strong>2.3%</strong>, y el <strong>segmento L</strong>, con un <strong>0.563%</strong>, debido a que estos créditos están dirigidos a la adquisición de propiedades de lujo, lo que implica un valor más alto.</p>
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
                <p>En 2024, Puebla destinó el <strong>59.2%</strong> de los créditos otorgados a la compra de propiedades en el segmento inmobiliario <strong>S</strong>, lo que refleja que una gran parte de la población busca inmuebles de bajo valor y opta por financiamiento moderado.</p>

                <p>El segundo segmento con mayor participación fue el <strong>D</strong>, con un <strong>18.9%</strong>, siguiendo la misma tendencia de créditos de menor valor.</p>

                <p>Por otro lado, el segmento inmobiliario Elite recibió menos del <strong>0.5%</strong> de los créditos, debido al alto valor de las propiedades en esta categoría, lo que implicaría financiamientos significativamente elevados.</p>
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
        iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_dist_creditos_segmento_${year}.html`;
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_precio_segmento_tendencia.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La tendencia de los precios en el mercado inmobiliario de Puebla ha mostrado un comportamiento variable, con dos caídas destacadas:</p>

                <p>1. La primera se dio en el segmento E, donde el precio promedio disminuyó un <strong>6,32%</strong>.</p>

                <p>2. La segunda en el segmento L, con una baja del <strong>1,4%</strong>.</p>

                <p>Estas caídas sugieren un posible exceso de oferta en estos segmentos.</p>

                <p>Por otro lado, los segmentos D, C, B y S presentaron variaciones mínimas, con incrementos o disminuciones menores al <strong>0.3%</strong>.</p>

                <p>El único segmento que mostró estabilidad total fue el S, sin ningún cambio en la tendencia de su precio.</p>
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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_profesiones.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_creditos_genero.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica muestra una mayor proporción del <strong>57%</strong> para hombres y un <strong>43%</strong> para mujeres. Esta diferencia indica que los hombres siguen predominando en la obtención de créditos para vivienda en Puebla, lo que podría estar relacionado con varios factores socioeconómicos, como mayores ingresos promedio o acceso a oportunidades laborales que les permiten calificar para financiamiento más fácilmente.</p>

                <p>Por otro lado, el hecho de que las mujeres representen el <strong>43%</strong> muestra una significativa participación en el mercado crediticio, reflejo de su creciente inclusión financiera y una mayor estabilidad económica para el segmento femenino.</p>

                <p>Además, este dato podría reflejar el impacto de programas que promueven la igualdad de género en el acceso a recursos financieros y en la propiedad de bienes inmuebles.</p>
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
        iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_dist_creditos_segmento_percent_${year}.html`;        
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_tiempoventa_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El tiempo de venta en el mercado inmobiliario de Puebla varía considerablemente. Un total de <strong>1,147</strong> propiedades tienen una antigüedad de 10 meses en el mercado, lo que convierte este rango en el más representativo.</p>

                <p>Además, <strong>842</strong> propiedades se venden en el séptimo mes, lo que refleja un dinamismo notable para una cantidad significativa de inmuebles. Siguiendo esta tendencia, la mayoría de las propiedades tardan un año o menos en venderse, con un total de <strong>4,054</strong> inmuebles vendidos en 12 meses o menos.</p>

                <p>Sin embargo, también es relevante mencionar que <strong>1,155</strong> propiedades superan los 16 meses en el mercado, lo que indica la existencia de un segmento que enfrenta tiempos de venta más prolongados.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_tiempoventa.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras visualiza el tiempo estimado de venta de propiedades en diferentes segmentos del mercado inmobiliario. Cada grupo representa un segmento específico (identificado por las letras <strong> A, B, C, D, E, L y S</strong>) y las barras individuales dentro de cada grupo corresponden a diferentes rangos de antigüedad de las propiedades (medido en meses). La altura de cada barra indica el número de casas vendidas en ese segmento y rango de antigüedad.</p>
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
                <p>En Puebla, el tiempo estimado de venta de las propiedades varía según el segmento inmobiliario al que pertenecen.</p>

                <p>El segmento A muestra una alta concentración de inmuebles que tardan <strong>10 meses</strong> en venderse, con <strong>135</strong> propiedades en esta categoría. Esta tendencia también se observa en los segmentos B, C y D, con <strong>143</strong>, <strong>161</strong> y <strong>133</strong> propiedades respectivamente que requieren <strong>10 meses</strong> para venderse.</p>

                <p>Sin embargo, el segmento E presenta un comportamiento diferente, ya que un gran número de sus propiedades se venden en el <strong>séptimo</strong> u <strong>octavo</strong> mes, lo que indica un mayor dinamismo en este mercado en comparación con los segmentos anteriores.</p>

                <p>En el segmento L, el comportamiento es más estable, ya que las propiedades tienen una probabilidad similar de venderse en <strong>7 meses</strong> o más de <strong>19 meses</strong>.</p>

                <p>Finalmente, el mercado S es el que concentra el mayor número de propiedades que tardan en venderse, con <strong>309</strong> propiedades que se comercializan principalmente en un plazo de <strong>10 meses</strong>, siendo el más lento entre todos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- g_piramid_poblacion -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Demográfico: Distribución de la población de Puebla por género y rango de edad</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPiramid">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalPiramid">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_piramid_poblacion.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>La gráfica proporciona una representación visual de la población de Puebla, segmentada por rangos de edad y género para observar cómo se distribuye la población en el estado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalPiramid" tabindex="-1" aria-labelledby="interpretationModalLabelPiramid" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelPiramid">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la ciudad de <strong>Puebla</strong> buena parte de la población se encuentra en un rango de edad de <strong>0 a 19 años</strong>, esta población considera a los menores de edad. Por su parte, el grupo de edad de <strong>20 a 49 años</strong> y de <strong>35 a 49 años</strong> tienen una participación similar. Este rango de edad es importante ya que comúnmente se caracteriza por ser población económicamente activa.</p>
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