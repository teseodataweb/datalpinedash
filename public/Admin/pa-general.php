<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

    
    <style>
        body{
            overflow-x: hidden; /* Evita el scroll horizontal */
        }
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
                                    <li class="breadcrumb-item active">Pachuca</li>
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
                    <h1>Proyecciones y oportunidades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<div class="container-fluid">
    <div class="row">
<!-- Gráfica: Distribución por segmento -->
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_segmentos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
            <div class="modal-body">
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
            <p>
    La gráfica revela una distribución variada de propiedades en diferentes rangos de precios en el mercado inmobiliario de Pachuca de Soto. El análisis del comportamiento de cada segmento y sus subsegmentos revela patrones interesantes en el mercado inmobiliario.
</p>
<ul>
    <li><strong>Segmento E:</strong> El subsegmento <strong>E2</strong> es el más destacado, mientras que <strong>E1</strong> y <strong>E3</strong> tienen una menor representación, indicando una demanda más limitada en los rangos de precios más altos.</li>
    <li><strong>Segmento D:</strong> Aunque <strong>D1</strong> y <strong>D2</strong> muestran una presencia notable, <strong>D3</strong> tiene una representación más baja, sugiriendo una demanda relativamente menor en los rangos de precios más altos.</li>
    <li><strong>Segmento C:</strong> Los subsegmentos <strong>C1, C2 y C3</strong> muestran una distribución uniforme, reflejando estabilidad en la demanda en la gama media del mercado.</li>
    <li><strong>Segmento B:</strong> Los subsegmentos <strong>B1, B2 y B3</strong> ofrecen una variedad de opciones para compradores con presupuestos variados, mostrando una distribución equilibrada de propiedades en diferentes rangos de precios.</li>
    <li><strong>Segmento A:</strong> <strong>A1, A2 y A3</strong> tienen una representación similar, indicando una demanda estable en los rangos de precios más altos.</li>
    <li><strong>Segmento S:</strong> Este segmento es el <strong>S1</strong> el más prominente, indicando la reducida demanda para propiedades de alto valor.</li>
    <li><strong>Segmento L:</strong> Los subsegmentos de las propiedades L tienen una representación mínima en el mercado lo que no permite distinguir la participación mayoritaria.</li>
    <li><strong>Segmento ELITE:</strong> Tiene una presencia escasa.</li>
</ul>
<p>
    Mientras que los segmentos <strong>E y S</strong> muestran una fuerte presencia en los extremos de la escala de precios, los segmentos <strong>D, C, B y A</strong> muestran una distribución más equilibrada en sus respectivos subsegmentos. Esta información nos permite entender las tendencias de demanda y adaptar estrategias de comercialización y desarrollo de propiedades en consecuencia.
</p>

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
<div class="modal fade" id="descriptionModalSegmentooo" tabindex="-1" aria-labelledby="descriptionModalLabel12" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel12">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica ilustra la distribución de créditos otorgados para inmuebles en diferentes segmentos de precios durante el año. Al analizar esta gráfica, se pueden identificar patrones en la concesión de créditos basados en el valor de las propiedades.</p>
                <p>Una mayor concentración de créditos en un segmento específico sugiere una preferencia por inmuebles dentro de ese rango de precio. Si la mayoría de los créditos se concentran en segmentos de menor valor, esto indica que los compradores prefieren propiedades más asequibles.</p>
                <p>Por otro lado, una mayor concentración en segmentos de precios altos sugiere una demanda por inmuebles de lujo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El predominio de los créditos en el <strong>segmento E</strong> (<strong>54.6%</strong>) refleja una alta demanda por propiedades de menor precio, donde hay una oferta considerable de inmuebles más accesibles; lo cual puede estar relacionado con el nivel adquisitivo de la mayoría de la población en Pachuca de Soto y la estructura del mercado inmobiliario. Esto puede explicarse también por la composición económica de la ciudad, que cuenta con una fuerte participación de sectores como la industria manufacturera, comercio, servicios y construcción; lo que genera una clase trabajadora enfocada en propiedades de bajo a mediano costo.</p>

                <p>El <strong>segmento S</strong>, a pesar de ser uno de los más costoso, representa un <strong>6.41%</strong> de los créditos y el <strong>segmento L</strong> tiene una participación de <strong>1.08%</strong>, lo cual indica un nicho de mercado de alta gama, probablemente impulsado por una pequeña élite económica.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModal2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El <strong>segmento E</strong> continúa siendo el mayor receptor de créditos en 2023, con un <strong>56.5%</strong>, lo que sugiere que sigue existiendo una fuerte demanda por propiedades más económicas. Esto puede estar relacionado con los niveles de ingresos predominantes en la región y una oferta inmobiliaria enfocada en propiedades accesibles para la clase trabajadora de Pachuca de Soto. Sin embargo, la estabilidad del <strong>segmento S</strong>, que recibe el <strong>7.23%</strong> de los créditos, indica la persistencia de un mercado  de precio medio-alto, probablemente dirigido a inversionistas o un grupo de personas que percibe mayores ingresos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModal2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El <strong>segmento E</strong> sigue siendo el más demandado con el <strong>53.5%</strong> de los créditos, pero muestra una tendencia a la baja en comparación con años anteriores. Este descenso podría estar relacionado con un aumento en los precios inmobiliarios, lo que empuja la demanda hacia propiedades de mayor valor.</p>

                <p>El crecimiento del <strong>segmento D</strong> (<strong>20.5%</strong>) y <strong>C</strong> (<strong>8.96%</strong>) refleja una posible mejora en el poder adquisitivo o un incremento en las inversiones en propiedades de rango medio.</p>

                <p>El <strong>segmento S</strong> (<strong>7.2%</strong>) mantiene un mercado estable para propiedades de valor medio-alto, sugiriendo una demanda sostenida en este nicho específico.</p>
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
        iframe.src = `/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_creditos_segmento_${year}_OFICIAL.html`;
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_precio_segmento_tendencias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p><strong>Variabilidad entre segmentos:</strong> Los diferentes segmentos muestran comportamientos de precios bastante distintos, lo que indica que factores específicos afectan a cada uno de manera diferente.</p>
                <p><strong>Dominancia de tendencias a la baja:</strong> La mayoría de los segmentos muestran una disminución en sus precios, lo que sugiere una tendencia general a la baja en los precios del mercado en general.</p>
                <p><strong>Segmentos A, B, y L:</strong> Experimentan pequeñas disminuciones en sus precios (<strong>-0.45%, -0.20%, -1.01%</strong>), lo que sugiere una ligera tendencia a la baja en estos segmentos.</p>
                <p><strong>Segmento C:</strong> Muestra un ligero aumento en su precio(<strong>0.25%</strong>), lo que sugiere una mayor demanda.</p>
                <p><strong>Segmento S:</strong> Presenta la mayor disminución en el precio (<strong>-2.27%</strong>)de todos los segmentos, indicando una caída significativa en sus precios. Esto podría deberse a diversos factores como cambios en las condiciones económicas que afectan específicamente a este segmento.</p>
                <p><strong>Segmentos E y D:</strong> Muestran una disminución igual grande en sus precios (<strong>1.66%, 1.26%</strong>), lo que sugiere una mayor demanda o una escasez de productos o servicios en estos segmentos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


        <!-- Columna completa: Profesiones 
        <div class="col-md-12">
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/Tablas/profesiones.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div> 
                </div>
            </div>
        </div>-->

        <!-- Modal for Description -->
        <div class="modal fade" id="descriptionModal3" tabindex="-1" aria-labelledby="descriptionModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel3">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>La gráfica muestra la distribución de las profesiones más comunes en <strong>Pachuca</strong>, segmentada por sectores como la salud, la educación, la tecnología y los servicios. Cada barra representa un sector profesional y su proporción relativa en el mercado laboral de la ciudad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Interpretation -->
        <div class="modal fade" id="interpretationModal3" tabindex="-1" aria-labelledby="interpretationModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel3">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>La distribución de las profesiones refleja que el sector de la salud y la educación son los más representativos en Pachuca, seguidos por los servicios. Esto indica que la demanda laboral se concentra en estos sectores debido a la presencia de universidades, hospitales y centros educativos. El crecimiento en el sector tecnológico también es notable, lo que sugiere una tendencia al alza en la digitalización y la innovación tecnológica en la región.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Columna completa: Mercado salario parejas (Volumen) 
        <div class="col-md-12">
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_mercadosalario_parejas_vol.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div> C:\xampp\htdocs\datalpine\resources\Ciudades\p\assets\graficas\g_bar_mercadosalario_parejas_vol.html
                </div>
            </div>
        </div>-->

        <!-- Modal for Description -->
        <div class="modal fade" id="descriptionModal4" tabindex="-1" aria-labelledby="descriptionModalLabel4" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel4">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica representa el volumen del mercado salarial para parejas en <strong>Pachuca</strong>. Muestra el número de parejas que caen dentro de distintos rangos salariales, permitiendo una visión clara de cómo se distribuyen los ingresos en la ciudad para este grupo demográfico. Es útil para identificar los segmentos de población que tienen mayor capacidad adquisitiva para acceder a inmuebles.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Interpretation -->
        <div class="modal fade" id="interpretationModal4" tabindex="-1" aria-labelledby="interpretationModalLabel4" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel4">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>La gráfica de mercado salarial para parejas muestra que la mayoría de las parejas en <strong>Pachuca</strong> se concentran en el rango salarial de <strong>25,000 a 35,000 pesos mensuales</strong>, lo que indica una capacidad adquisitiva media-alta en este grupo. Esta distribución refleja que muchas parejas están en condiciones de adquirir viviendas de rango medio-alto, lo que puede influir en el comportamiento del mercado inmobiliario. Las parejas con salarios superiores a <strong>50,000 pesos mensuales</strong> representan una menor proporción, pero también constituyen un segmento de mercado atractivo para propiedades de lujo o de mayor valor.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Columna completa: g_bar_mercadosalario_parejas 
         <div class="col-md-12">
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
        </div>-->

        <!-- Columna completa: Mercado salario por persona 
        <div class="col-md-12">
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_mercadosalario_persona.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>-->

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal6" tabindex="-1" aria-labelledby="descriptionModalLabel6" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel6">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica presenta la distribución del salario individual en <strong>Pachuca</strong>. Los datos segmentan los rangos salariales para ilustrar cómo se distribuye el ingreso entre los habitantes de la ciudad, permitiendo identificar los grupos con mayor o menor poder adquisitivo dentro del mercado inmobiliario.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal6" tabindex="-1" aria-labelledby="interpretationModalLabel6" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel6">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra que la mayoría de las personas en Pachuca se encuentran en un rango salarial de <strong>10,000 a 15,000 pesos mensuales</strong>, lo que representa a una clase media baja con limitaciones en su capacidad de compra de propiedades. Los individuos con ingresos superiores a <strong>25,000 pesos</strong> representan una minoría (<strong>15%</strong>), pero son un grupo importante con mayor poder adquisitivo y acceso a propiedades de mayor valor.</p>
                <p>En los rangos más bajos (<strong>menos de 7,000 pesos</strong>), se observa una participación considerable, lo que indica una franja importante de la población que enfrenta dificultades para acceder al mercado inmobiliario formal, probablemente recurriendo a opciones de alquiler o viviendas de bajo costo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_creditos_genero.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica de pastel refleja la proporción de créditos otorgados a hombres y mujeres de <strong>2019</strong> a <strong>2024</strong>.</p>
                
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
                <p>La gráfica muestra que un mayor porcentaje de créditos es otorgado a hombres <strong>(53.7%)</strong> en comparación con mujeres <strong>(46.3%)</strong> de 2019 a 2024 en la ciudad de Pachuca de Soto. Esta diferencia podría estar relacionada con factores la existencia de una brecha de género en el acceso al crédito, donde las mujeres enfrentan mayores obstáculos para obtener financiamiento.</p>
                <p>Además, en el nivel de ingresos, el empleo y la educación, pueden influir en la capacidad de las mujeres para acceder al crédito. Sin embargo, la participación significativa de mujeres también refleja un creciente acceso al crédito para esta parte de la población y una mayor participación en la adquisición de bienes inmuebles en la región.</p>
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
                <p>Se muestra la distribución porcentual de créditos por categorías de precios durante los cuatro trimestres del año. Esta gráfica revela las tendencias en la concesión de créditos para diferentes rangos de precios de inmuebles en Pachuca de Soto, desde el <strong>segmento E</strong> (<strong>3.25</strong> a <strong>4</strong> millones) hasta el <strong>segmento ELITE</strong> (más <strong>12</strong> millones). Un mayor porcentaje en un trimestre indica una mayor demanda de créditos en ese segmento para ese periodo, y las variaciones entre trimestres muestran cómo las preferencias de los compradores fluctúan a lo largo del año.</p>
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
                <p>Para el año <strong>2022</strong>, el <strong>segmento E</strong> (menos de <strong>500</strong> mil a <strong>1</strong> millón) domina en todos los trimestres, lo que indica una preferencia constante por propiedades más accesibles en Pachuca de Soto. El crecimiento del sector inmobiliario en la zona refleja una fuerte demanda de inmuebles, en especial en la zona metropolitana.</p>

                <p>Conforme aumentan los precios de los segmentos, los créditos otorgados disminuyen. La participación de los <strong>segmentos S</strong> y <strong>L</strong> sugieren un nicho de mercado para adquirir propiedades de lujo, probablemente impulsado por la creciente atracción de inversionistas nacionales e internacionales.</p>

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
                <p>Para el año <strong>2023</strong>, el <strong>segmento E</strong> (menos de <strong>500</strong> mil a <strong>1</strong> millón) domina en todos los trimestres, lo que indica una preferencia constante por propiedades más accesibles en Pachuca de Soto. El crecimiento del sector inmobiliario en la zona refleja una fuerte demanda de inmuebles, en especial en la zona metropolitana.</p>

                <p>La participación de los segmentos de mayor valor <strong>(S y L)</strong> sugiere un nicho de mercado para adquirir propiedades de lujo, probablemente impulsado por la creciente atracción de inversionistas nacionales e internacionales.</p>

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
                <p>Para los primeros 2 trimestres del 2024, el <strong>segmento E</strong> (menos de <strong>500</strong> mil a <strong>1</strong> millón) sigue dominando de manera significativa en ambos trimestres, lo que refuerza la preferencia por propiedades más accesibles, probablemente impulsado por la demanda de jóvenes compradores y familias locales en busca de vivienda económica.</p>

                <p>El <strong>segmento D</strong> (<strong>1</strong> millón a <strong>1.75</strong> millones) también muestra una participación considerable, lo que puede estar relacionado con el crecimiento económico de <strong>Pachuca de Soto</strong>, este atrayendo a compradores con mayor poder adquisitivo.</p>

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
        iframe.src = `/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_${year}.html`;        
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
<!--  // Ocultar todas las gráficas
        document.getElementById('categoriaData2022').style.display = 'none';
        document.getElementById('categoriaData2023').style.display = 'none';
        document.getElementById('categoriaData2024').style.display = 'none';

        // Mostrar la gráfica correspondiente al año seleccionado
        document.getElementById(`categoriaData${year}`).style.display = 'block';

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonCategoria');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalTrimestre${year}`);
    }

    // Mostrar la gráfica de 2022 por defecto al cargar la página
    window.onload = function() {
        showCategoriaData('2022');
    };-->

<!-- Columna completa: g_bar_tiempo_venta -->
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal9">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal9">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_tiempoventa_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras representa el tiempo estimado de venta de propiedades en diferentes segmentos del mercado inmobiliario. Cada grupo representa un segmento específico (identificado por las letras <strong>A, B, C, D, E, L y S</strong>) y barras individuales dentro de cada grupo corresponden a diferentes rango de antigüedad de las propiedades (medido en meses). La altura de cada barra indica el número de casas vendidas en ese segmento y rango de antigüedad.</p>
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
                <p>Es posible notar que el mercado inmobiliario de Pachuca de Soto es consistente en el tiempo que tardan las propiedades en venderse, la mayoría de los segmentos tarda hasta <strong>7 meses</strong>. De manera más particular, el segmento <strong>E</strong> tiene una participación importante de <strong>7</strong> a <strong>9</strong> meses. Un caso muy parecido al segmento <strong>D</strong>, con la diferencia de la cantidad de propiedades se venden. Los segmentos <strong>C</strong>, <strong>B</strong> y <strong>A</strong> poseen tiempos de venta más homogéneos. Mientras que, el segmento <strong>S</strong> comienza a tener participación en periodos más extendidos más de <strong>10</strong> meses y el segmento <strong>L</strong> destaca en un periodo de <strong>19</strong> a <strong>24</strong> meses, esto puede deberse a que es un segmento con precios mucho más altos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Columna completa: g_bar_tiempoventa_total -->
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal8">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal8">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_tiempoventa.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras visualiza el tiempo estimado de venta de propiedades en diferentes segmentos del mercado inmobiliario. Cada grupo representa un segmento específico (identificado por las letras <strong> A, B, C, D, E, L y S</strong>) y las barras individuales dentro de cada grupo corresponden a diferentes rangos de antigüedad de las propiedades (medido en meses). La altura de cada barra indica el número de casas vendidas en ese segmento y rango de antigüedad.</p>
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
                <p>Es posible notar que el mercado inmobiliario de Pachuca de Soto es consistente en el tiempo que que tardas las propiedades en venderse.</p>

                <p>Sin embargo, el segmento <strong>E</strong> tiene una participación importante de <strong>7</strong> a <strong>9</strong> meses. Un caso muy parecido al segmento <strong>D</strong>, con la diferencia de la cantidad de propiedades se venden.</p>

                <p>Los segmentos <strong>C</strong>, <strong>B</strong> y <strong>A</strong> poseen tiempos de venta más homogéneos.</p>

                <p>Mientras que, el segmento <strong>S</strong> comienza a tener participación en periodos más extendidos más de <strong>10</strong> meses, esto puede deberse a que es un segmento con precios altos.</p>
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
                        <option value="Tulancingo">Pachuca</option>
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_piramid_poblacion.html" width="100%" height="400" frameborder="0" id="iframeTulancingo" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <h5 class="modal-title" id="interpretationModalLabelTulancingo">Interpretación Pachuca</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la ciudad de Pachuca de Soto buena parte de la población se encuentra en un rango de edad de 0 a 19 años, esta población considera a los menores de edad. Por su parte, el grupo de edad de 20 a 49 años y de 35 a 49 años tienen una participación similar. Este rango de edad es importante ya que comúnmente se caracteriza por ser población económicamente activa. </p>
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