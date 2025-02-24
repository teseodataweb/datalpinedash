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
                    <h1>Proyecciones y oportunidades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Tulancingo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<!-- Sección Colonias y Potencial de Inversión -->
<div class="container-fluid">
    <div class="row">

    </div>
</div>

<!-- Sección Tendencias de Mercado -->
<div class="container-fluid">
    <div class="row">


<!-- Gráfica: Precio Promedio de Baños -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Precio Promedio de Baños</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <!-- <div class="mb-3">
                    <select class="form-select" id="bathroomSelect" onchange="showBathroomData(this.value)">
                        <option value="banos">General</option>
                        <option value="cuatrobanos">Cuatro Baños</option>
                    </select>
                </div>-->
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalBanos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonBanos" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_precio_promedio_banos.html" width="100%" height="400" frameborder="0" id="bathroomDataBanos" style="display: block; min-height: 430px; border: 0;"></iframe>
                <!--                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_precio_promedio_banos_14.html" width="100%" height="400" frameborder="0" id="bathroomDataCuatroBanos" style="display: none; min-height: 430px; border: 0;"></iframe>
-->            </div>
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
                <p>La gráfica muestra el precio promedio de los inmuebles en relación con la cantidad de baños que contiene la vivienda que se está ofertando.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: General -->
<div class="modal fade" id="interpretationModalBanosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelBanosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelBanosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Primeramente, se observa una tendencia ascendente en la relación de precio-número de baños, lo cual es coherente ya que, a mayor número de baños, mayor debería de ser el precio promedio de las viviendas. Entonces, es claro que la cantidad de baños es un factor que influye directamente en el valor de una vivienda.</p>
                <p>Aunque se observa un cambio considerable en el valor de las viviendas al pasar de <strong>5</strong> a <strong>6</strong> baños, esto posiblemente se deba a que a partir de <strong>6</strong> baños o más se podrían considerar propiedades de lujo. Sin embargo, también se debe tener claro que podrían estar influyendo otros factores externos o directamente relacionados con las propiedades, tales como el tamaño de la vivienda o terreno, propiedades en zonas privadas con áreas de uso común, entre otras.</p>
                <p>La gráfica muestra una correlación positiva entre el número de baños y el precio promedio de las propiedades. Esto indica que la cantidad de baños es un factor importante a considerar al evaluar el valor de una vivienda.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: Cuatro Baños -->
<div class="modal fade" id="interpretationModalCuatroBanos" tabindex="-1" aria-labelledby="interpretationModalLabelCuatroBanos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelCuatroBanos">Interpretación Cuatro Baños</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se puede observar que en cuanto a las viviendas que cuentan con 1, 2, 3 baños, los precios promedios son similares, alrededor de los <strong>$2,000,000</strong> (dos millones de pesos). A diferencia de las viviendas que cuentan con 4 baños, que tienen un cambio significativo en su precio promedio, aproximándose a los <strong>$4,000,000</strong> (cuatro millones de pesos). Este aumento podría deberse a diversos factores, como el público al que le interesa este segmento, el tamaño del terreno, las características de las viviendas o la antigüedad de las mismas.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showBathroomData(option) {
        // Ocultar todas las gráficas
        document.getElementById('bathroomDataBanos').style.display = 'none';
        document.getElementById('bathroomDataCuatroBanos').style.display = 'none';

        // Mostrar la gráfica correspondiente a la opción seleccionada
        if (option === 'banos') {
            document.getElementById('bathroomDataBanos').style.display = 'block';
            document.getElementById('interpretationButtonBanos').setAttribute('data-bs-target', '#interpretationModalBanosGeneral');
        } else if (option === 'cuatrobanos') {
            document.getElementById('bathroomDataCuatroBanos').style.display = 'block';
            document.getElementById('interpretationButtonBanos').setAttribute('data-bs-target', '#interpretationModalCuatroBanos');
        }
    }

    // Mostrar la gráfica "Baños" por defecto al cargar la página
    window.onload = function() {
        showBathroomData('banos');
    };
</script>


    </div>
</div>

<!-- Sección Mercado & Precios -->


<!-- Sección Meses de Oferta & Proyecciones -->
<div class="container-fluid">
    <div class="row">
        <!-- Mitad izquierda: Meses de oferta (Month of Supply) -->
<!-- Gráfica: Meses de oferta (Month of Supply) -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Meses de oferta (Month of Supply)</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_MonthSupply.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>
                Esta métrica refleja cuántos meses tomaría agotar todas las propiedades listadas en el mercado si se utilizaran todos los créditos disponibles de cada mes para comprarlas.  Se calcula dividiendo el total de propiedades del mes listadas en el mercado inmobiliario entre el promedio mensual del volumen de créditos demandados durante dicho año. El gráfico permite observar las variaciones en la oferta de propiedades a lo largo del tiempo, lo que puede estar influenciado por cambios en la demanda de créditos, fluctuaciones estacionales o variaciones en la disponibilidad de inmuebles.
                </p>
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
            La gráfica muestra una relativa estabilidad en los primeros meses de 2023, con algunos picos y caídas menores, lo que sugiere que el mercado inmobiliario estaba funcionando de manera regular. Sin embargo, a partir de noviembre de 2023, se observa un aumento significativo en los meses de oferta, alcanzando su punto más alto en abril de 2024. Este incremento puede estar vinculado a una disminución temporal en la demanda de créditos o a un aumento en la cantidad de propiedades disponibles en el mercado. Factores como la sobreoferta de inmuebles o cambios en las políticas crediticias pueden haber influido en este aumento Posteriormente, la métrica se estabiliza en torno a los 2 meses, lo que indica que el mercado inmobiliario se ajusta primero con una caída y luego una subida bruscas, para equilibrar la oferta y la demanda hacia mediados de 2024.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


        <!-- Mitad derecha: Proyección días -->
        <!-- <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Proyección días</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_proyeccion_dias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mitad derecha: Proyección días -->
<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Proyección días</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_proyeccion_dias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modales de Descripción e Interpretación -->
<div class="modal fade" id="descriptionModal8" tabindex="-1" aria-labelledby="descriptionModal8Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal8Label">Descripción: Proyección días</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            La siguiente gráfica muestra el promedio de días que permanecen en oferta los inmuebles para los meses del 2024 en la ciudad de Tulancingo.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModal8" tabindex="-1" aria-labelledby="interpretationModal8Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal8Label">Interpretación: Proyección días</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra una tendencia no constante en el promedio de días que los inmuebles permanecen en oferta en Tulancingo de Bravo durante los meses de 2024. Esto indica que, en general, los inmuebles están tardando más tiempo en venderse en algunos meses del año, en cuanto a otros meses los cuales su promedio es menor el tiempo promedio de días en el mercado. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

    </div>
</div>


<!-- Sección Riesgo & Poblacional -->
<div class="container-fluid">
    <div class="row">
        <!-- Mitad izquierda: Riesgo -->
<!-- Gráfica: Riesgo -->
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Riesgo</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_riesgo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El riesgo de que las viviendas se queden en Stock (sin venderse) por un lapso de tiempo de más de un año, es importante analizarlo ya que nos ofrece una vista rápida de la oferta y la demanda de las viviendas en Tulancingo de Bravo.</p>
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
                <p>El <strong>87%</strong> de las viviendas que se han ofertado en Tulancingo de Bravo se han vendido en menos de un año, esto indica que el mercado inmobiliario de la ciudad es bastante dinámico y que la demanda por viviendas es alta.</p>
                <p>Esto podría ser por diversas razones tales como una alta rotación del mercado inmobiliario de la ciudad, el cual también podría estar relacionado a factores como el crecimiento económico, el desarrollo urbano, precios accesibles, entre otros.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


        <!-- Mitad derecha: Proyección poblacional -->
<!-- Gráfica: Proyección poblacional -->
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Proyección poblacional</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal10">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal10">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/compartidas/assets/graficas/g_bar_proy_poblacion_hgo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal10" tabindex="-1" aria-labelledby="descriptionModalLabel10" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel10">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            El gráfico de barras muestra una estimación del crecimiento de la población en la ciudad para los próximos años. Cada barra representa un año y su altura indica el numero de personas que se esperan vivan en determinada región cada año. Las barras que se extienden hacia arriba indican un aumento en el número de personas, mientras que las que se extienden hacia abajo indican una disminución de las mismas. 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal10" tabindex="-1" aria-labelledby="interpretationModalLabel10" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel10">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                A lo largo de los años que se analizan se revela un crecimiento progresivo en la ciudad de <strong>Pachuca</strong> para los próximos años. En <strong>2021</strong>, la ciudad contaba con una población total aproximada de <strong>3,144,514</strong>, y para <strong>2027</strong> se proyecta que esta población aumentará a <strong>3,350,825</strong>.
            </p>
            <p>
                Este crecimiento de la población propone un escenario favorecedor para la ciudad, ya que influye directamente en la demanda de viviendas, lo que podría ser una oportunidad para la construcción de nuevos proyectos inmobiliarios. Además, la dinámica económica que hay en la zona también tiene impacto debido a la distribución de edades, ingresos y estilo de vida que trae el crecimiento demográfico.
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



<!-- Gráfica: Forecast créditos generales -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Forecast créditos generales</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="bathroomSelect" onchange="showBathroomData(this.value)">
                        <option value="forecastcp">Valor Promedio</option>
                        <option value="forecastcc">Cantidad</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPromedio">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" id="DescFCG" data-bs-target="#descriptionModalPromedio">Interpretación</button>
                    <!--<button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalpromedio">Promedio</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalLabelcantidad">Cantidad</button>-->
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="fcgenerales"></div>
                <!--<iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_forecast_credit_promedio.html" width="100%" height="400" frameborder="0" id="fcp" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_forecast_credit_cantidad.html" width="100%" height="400" frameborder="0" id="fcc" style="display: none; min-height: 430px; border: 0;"></iframe>-->
            </div>
        </div>
    </div>
</div>

<!-- Modal for promedio -->
<div class="modal fade" id="descriptionModalPromedio" tabindex="-1" aria-labelledby="descriptionModalPromedio" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalPromedio">Descripción Promedio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La siguiente gráfica muestra el pronóstico de los montos de los créditos generales para los próximos años en la ciudad de Tulancingo de Bravo; estos se subdividen en 2 categorías, vivienda nueva y vivienda usada.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for cantidad -->
<div class="modal fade" id="descriptionModalCantidad" tabindex="-1" aria-labelledby="descriptionModalCantidad" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalCantidad">Descripción Cantidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La siguiente gráfica muestra el pronóstico de la cantidad de créditos para los próximos años en la ciudad de Tulancingo de Bravo; estos se subdividen en 3 categorías, Créditos generales, para Vivienda Nueva y Vivienda Usada.  </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: CANTIDAD -->
<div class="modal fade" id="interpretationModalLabelcantidad" tabindex="-1" aria-labelledby="interpretationModalLabelcantidad" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelcantidad">Interpretación Cantidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>De acuerdo a los datos históricos con los que se cuentan, la evolución del panorama de créditos seguirá una tendencia negativa. Los créditos totales tendrán una disminución consistente para 2025 y 2026 de aproximadamente 16 y 19, respectivamente para cada año. Esta totalidad de créditos se subdivide en 2 grandes categorías, Vivienda Nueva y Vivienda Usada.</p>
                <p>Para los créditos que se otorgan para viviendas nuevas se estima una ligera disminución del año 2024 al 2025 de alrededor de 23 créditos, y del año 2025 a 2026 también disminuirán 7 créditos. Estas estimaciones proponen un contexto complejo para la adquisición de viviendas nuevas en la ciudad de Tulancingo. </p>
                <p>Por su parte, los créditos para viviendas usadas tendrán una disminución de 10 créditos al pasar del año 2024 a 2025; sin embargo, del año 2025 al 2026 se espera que esto disminuya 7 créditos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: Promedio -->
<div class="modal fade" id="interpretationModalpromedio" tabindex="-1" aria-labelledby="interpretationModalpromedio" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalpromedio">Interpretación Promedio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>De acuerdo a los datos históricos con los que se cuentan, la evolución del panorama de créditos seguirá un crecimiento positivo. Los créditos totales continuarán con un aumento consistente para 2025 y 2026. Esta totalidad de créditos se subdivide en 2 grandes categorías, Vivienda Nueva y Vivienda Usada.</p>
                <p>Para los créditos otorgados de Vivienda Nueva se puede observar que los créditos tendrán un aumento sostenido de <strong>$39,512</strong> de 2025 a 2026. Esto es señal del aumento de los precios de las viviendas en la ciudad, debido a factores como tasas de interés, inflación o equilibrio entre la demandada y la oferta.</p>
                <p>Por su parte, los créditos otorgados de Vivienda Usada igual presentarán un aumento en su valor de 2025 a 2026, aproximadamente de <strong>$51,232</strong>; esto implica que para las viviendas de la ciudad será más accesible el mejoramiento.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showBathroomData(option) {
        // Crear el iframe dinámicamente
        let iframe;
        if (option === 'forecastcp') {
            iframe = document.createElement('iframe');
            iframe.src = "/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_forecast_credit_promedio.html"; // Cambiado de Queretaro a Puebla
            document.getElementById('DescFCG').setAttribute('data-bs-target', '#descriptionModalPromedio');
        } else if (option === 'forecastcc') {
            iframe = document.createElement('iframe');
            iframe.src = "/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_forecast_credit_cantidad.html"; // Cambiado de Queretaro a Puebla
            document.getElementById('DescFCG').setAttribute('data-bs-target', '#descriptionModalCantidad');
        }
        if (iframe) {
            iframe.width = '100%';
            iframe.height = '400';
            iframe.frameborder = '0';
            document.getElementById('fcgenerales').innerHTML = ''; // Actualizar el contenedor
            document.getElementById('fcgenerales').appendChild(iframe);
        } else {
            console.error('El directorio especificado no existe.');
        }
    }

    // Mostrar la gráfica de 2019 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showBathroomData('forecastcp');
    });
</script>


<!-- Sección Plusvalía & Proyección Anual -->
<!-- Gráfica: Plusvalía estimada -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Plusvalía estimada</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="plusvaliaSelect" onchange="showPlusvaliaData(this.value)">
                        <option value="plusvaliaa">Anual</option>
                        <option value="plusvaliam">Mensual</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalplusvalia_ano">Descripción</button>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" id="interpretationButtonPlusvalia" data-bs-target="#interpretationModalplusvalia_ano">Interpretación</button>
                    <!--<button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalplusvalia_ano">Interp.Anual</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalLabelplusvalia_mes">Interp. Mensual</button>-->
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_plusvaliaestimada_ano.html" width="100%" height="400" frameborder="0" id="plusvalia_ano" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_plusvaliaestimada_mes24.html" width="100%" height="400" frameborder="0" id="plusvalia_mes" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>


<!-- Modal for descripcion general -->
<div class="modal fade" id="descriptionModalplusvalia_ano" tabindex="-1" aria-labelledby="descriptionModalplusvalia_ano" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalplusvalia_anoo">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La siguiente gráfica muestra el pronóstico de la plusvalía que tendrá el área de inmuebles para los próximos años en la ciudad de Tulancingo.<p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: año -->
<div class="modal fade" id="interpretationModalplusvalia_ano" tabindex="-1" aria-labelledby="interpretationModalplusvalia_ano" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalplusvalia_anoo">Interpretación Anual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>De acuerdo a los datos que se pronostica tener en los próximos 3 años en la ciudad de Tulancingo, la evolución del panorama de precios de los inmuebles tendrá una tendencia positiva. Los datos proyectados para los próximos dos años en Tulancingo indican una tendencia al alza en el valor de los inmuebles. Para el 2025 las viviendas aumentarán aproximadamente $367,152.27; y para 2026 el aumento será de $444,598.45. Esta apreciación de las propiedades en la ciudad representa una oportunidad para hacer inversiones, en donde se obtienen ganancias significativas para el futuro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: mes -->
<div class="modal fade" id="interpretationModalLabelplusvalia_mes" tabindex="-1" aria-labelledby="interpretationModalLabelplusvalia_mes" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelplusvalia_mess">Interpretación  Mensual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>De acuerdo a los datos que se pronostica tener en el próximo año en la ciudad de Tulancingo de Bravo, la evolución del panorama de precios de los inmuebles tendrá una tendencia negativa, con variaciones en meses que en los cuales el precio se mantuvo por debajo del precio pronosticado para el primer mes del 2024. Esto significa que, en promedio, el monto ha ido disminuido mes a mes. Sin embargo, es importante notar que el impacto negativo no es constante y hay algunos meses donde la disminución es más pronunciada que en otros. Los últimos meses del año muestran un crecimiento más acelerado en comparación con los primeros meses. Para al final del año terminar en el mismo punto en el cual comenzaría el año. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

    <!-- Script para controlar la visualización de gráficas -->
    <script>
        function showPlusvaliaData(option) {
            // Ocultar todas las gráficas
            document.getElementById('plusvalia_ano').style.display = 'none';
            document.getElementById('plusvalia_mes').style.display = 'none';

         // Mostrar la gráfica correspondiente a la opción seleccionada
         const interpretationButton = document.getElementById('interpretationButtonPlusvalia');
            switch (option) {
                case 'plusvaliaa':
                    document.getElementById('plusvalia_ano').style.display = 'block';
                    interpretationButton.setAttribute('data-bs-target', '#interpretationModalplusvalia_ano');
                    break;
                case 'plusvaliam':
                    document.getElementById('plusvalia_mes').style.display = 'block';
                    interpretationButton.setAttribute('data-bs-target', '#interpretationModalLabelplusvalia_mes');
                    break;
            }
        }

        // Mostrar la gráfica "Plusvalía estimada" por defecto al cargar la página
        window.onload = function() {
            showPlusvaliaData('plusvaliaa');
        };
    </script>
    </div>


<!-- Proyección Forecast Media Anual -->
<div class="container-fluid">
    <div class="row">
        <!-- Columna izquierda: Proyección Forecast Media Anual
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Proyección Forecast Media Anual</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal15">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal15">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_forecast_media_anual.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Columna derecha: Colonias más baratas -->
<!-- Gráfica: Colonias -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Colonias</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="coloniasSelect" onchange="showColoniasData(this.value)">
                        <option value="masbaratas">Más Baratas</option>
                        <option value="mascaras">Más Caras</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonColonias" data-bs-toggle="modal" data-bs-target="#descriptionModalColoniasMasBaratas">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonColonias" data-bs-toggle="modal" data-bs-target="#interpretationModalColoniasBaratas">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
            <div id="coloniasDataMasBaratas"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modals for Description: Más Baratas -->
<div class="modal fade" id="descriptionModalColoniasMasBaratas" tabindex="-1" aria-labelledby="descriptionModalLabelColoniasMasBaratas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelColoniasMasBaratas">Descripción (Más Baratas)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La grafica nos muestra las cinco colonias las cuales tienen en promedio los precios más bajos respecto a todas las colonias en las que se ofertan inmuebles en Tulancingo de Bravo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation: Más Baratas -->
<div class="modal fade" id="interpretationModalColoniasMasBaratas" tabindex="-1" aria-labelledby="interpretationModalLabelColoniasMasBaratas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelColoniasMasBaratas">Interpretación (Más Baratas)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Las colonias que más barato ofertan sus inmuebles son <strong>Paseos de Chavarría</strong> y <strong>Villa Elena</strong>; esto es posible que sea a dos importantes razones las cuales son que ambas zonas se encuentran en las salidas de <strong>Tulancingo de Bravo</strong>, lo que significa que, hay un difícil el acceso a los diferentes servicios tanto de transporte, entretenimiento, educación, entre otras. Otro factor importante es ambas zonas se encuentran detrás de zonas industriales, lo cual hace que disminuyan sus precios. </p>
                <p>Además, se puede observar que, la colonia <strong>Hacienda Margarita</strong>, <strong>Jardines del Paraíso</strong> y <strong>Fracc Jardines del Paraíso</strong> ofrecen precios bajos alrededor del <strong>medio millón de pesos</strong> las tres zonas, esto también podría relacionarse con su lejanía a la zona metropolitana y difícil acceso a servicios públicos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Description: Más Caras -->
<div class="modal fade" id="descriptionModalColoniasMasCaras" tabindex="-1" aria-labelledby="descriptionModalLabelColoniasMasCaras" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelColoniasMasCaras">Descripción (Más Caras)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La grafica muestra las cinco colonias las cuales tienen en promedio los precios más altos respecto a todas las colonias en las que se ofertan inmuebles en Pachuca de Soto.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation: Más Caras -->
<div class="modal fade" id="interpretationModalColoniasMasCaras" tabindex="-1" aria-labelledby="interpretationModalLabelColoniasMasCaras" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelColoniasMasCaras">Interpretación (Más Caras)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se puede ver que la colonia que más alto oferta sus inmuebles es <strong>Centro</strong>, superando en promedio los <strong>$7,000,000</strong>; esto es posible que sea a que esta zona se encuentra cerca de diferentes destinos y rápido acceso a servicios públicos. </p>
                <p>En cuanto a la colonia que sigue es <strong>Felipe Ángeles</strong> con un promedio de <strong>$7,000,000</strong>, lo más probable es que debido a que los inmuebles que se ofertan en esta zona justo están en plena zona turística de <strong>Tulancingo de Bravo</strong> lo cual hace que se eleven sus precios. Por su parte, <strong>Tulancingo</strong>, <strong>Lindavista</strong> y <strong>Residencial la Quinta</strong> son zonas residenciales de alto prestigio y debido a esa razón es que sus precios están alrededor de los <strong>$5,000,000</strong> en promedio.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas y los modales -->
<script>
    function showColoniasData(option) {
        // Crear el iframe dinámicamente
        let iframe;
        let srcPath = "/datalpine/resources/Ciudades/Tulancingo/assets/graficas/";
        let modalTarget;
        switch (option) {
            case 'masbaratas':
                iframe = document.createElement('iframe');
                iframe.src = srcPath + "g_bar_colonias_baratas.html";
                modalTarget = '#interpretationModalColoniasBaratas';
                break;
            case 'mascaras':
                iframe = document.createElement('iframe');
                iframe.src = srcPath + "g_bar_colonias_caras.html";
                modalTarget = '#interpretationModalColoniasCaras';
                break;
            default:
                console.error('Opción no válida.');
                return;
        }
        if (iframe) {
            iframe.width = '100%';
            iframe.height = '400';
            iframe.frameborder = '0';
            document.getElementById('coloniasDataMasBaratas').innerHTML = ''; // Actualizar el contenedor
            document.getElementById('coloniasDataMasBaratas').appendChild(iframe);
            document.getElementById('interpretationButtonColonias').setAttribute('data-bs-target', modalTarget);
        } else {
            console.error('El directorio especificado no existe.');
        }
    }
    // Mostrar la gráfica de colonias más baratas por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showColoniasData('masbaratas');
    });
</script>





        <!-- Gráfica: Colonias Predominantes -->
        <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Colonias Predominantes</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal33">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal33">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_colonias_predominantes.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal33" tabindex="-1" aria-labelledby="descriptionModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel3">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                Se muestra una relación de las colonias en las cuales hay una mayor concentración de propiedades en oferta dentro de la zona de Tulancingo de Bravo.            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal33" tabindex="-1" aria-labelledby="interpretationModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel3">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                Se observa que la colonia de <strong>Jardines del Sur</strong> es el que lidera la oferta dentro de la zona, ya que tiene un mayor número de propiedades en venta con un <strong>7.5%</strong> de la oferta total de la zona, posiblemente debido a una mayor oferta de nuevos desarrollos o por una mayor disposición de los propietarios de los inmuebles a vender sus viviendas.
                </p>
                <p>
                Además, las cinco colonias aglutinan una parte significativa de la oferta total, lo que sugiere que la oferta de propiedades en venta no está distribuida de manera uniforme en toda la ciudad, lo que podría estar relacionado con factores como el nivel socioeconómico de la zona, la disponibilidad de servicios, el tipo de vivienda predominante y el atractivo para los compradores.
                </p>
                <p>
                En general las cinco zonas mostradas en el grafico son las que predominan la oferta por diferentes razones las cuales podrían ser algunas de las que menciono a continuación: 
                </p>
                <ul>
                    <li>Podría haber nuevos desarrollos inmobiliarios, lo que aumentaría la oferta de viviendas disponibles para la venta.</li>
                    <li>Estas colonias podrían ser percibidas como zonas con mayor plusvalía o potencial de crecimiento, lo que atrae a más inversionistas y propietarios que buscan vender sus propiedades.</li>
                    <li>La ubicación estratégica de estas colonias, con buena conectividad a vías principales y servicios, las hace más atractivas para los compradores y puede contribuir a una mayor rotación de propiedades.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>







        <!-- Gráfica 3: Tiempo en el mercado -->
        <!-- Gráfica: Tiempo en el mercado -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Tiempo en el mercado</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_tiempo_mercado.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal3" tabindex="-1" aria-labelledby="descriptionModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel3">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                El grafico de barras muestra el número de propiedades en función del tiempo que llevan en el mercado. Cada barra representa el número de propiedades que han estado en venta durante un rango de días específico.
                </p>
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
            <p>
            La mayor concentración de ventas de propiedades se da en los primeros <strong>30 días</strong>, lo que sugiere una demanda activa en el mercado, ya que muchas propiedades encuentran comprador rápidamente. En el rango de <strong>0 a 30 días</strong> se concentra la mayoría de las ventas, lo que indica que muchas propiedades se venden en el primer mes.
        </p>
        <p>
            El rango de <strong>31 a 120 días</strong> sigue un ritmo casi igual al anterior, con solo <strong>5 propiedades menos</strong>, y sigue representando una cantidad significativa de ventas, mostrando que un porcentaje considerable de propiedades se venden entre el primer y cuarto mes.
        </p>
        <p>
            A partir de los <strong>120 días</strong>, los rangos superiores muestran una disminución en el número de ventas, lo que indica que la probabilidad de venta se reduce después de ese período. En el rango de <strong>4 a 8 meses</strong>, las propiedades vendidas ascienden ligeramente por encima de las <strong>200</strong>, mientras que en el rango de <strong>241 a 364 días</strong> se reducen a solo <strong>134 unidades</strong>, lo que demuestra que, tras superar los 240 días en el mercado, la demanda disminuye de manera exponencial.
        </p>
        <p>
            Finalmente, en el rango de <strong>más de 365 días</strong>, solo <strong>65 propiedades</strong> se venden después de este tiempo.
        </p>

            </div>
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