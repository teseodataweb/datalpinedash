<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

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
                    <h1>Proyecciones y Oportunidades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Querétaro, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<!-- Sección Colonias y Potencial de Inversión -->
<div class="container-fluid">
    <div class="row">



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
                <!--<div class="mb-3">
                    <select class="form-select" id="bathroomSelect" onchange="showBathroomData(this.value)">
                        <option value="banos">General</option>
                        <option value="cuatrobanos">Cuatro Baños</option>
                    </select>
                </div>-->
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalBanos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill"  data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_precio_promedio_banos.html" width="100%" height="400" frameborder="0" id="bathroomDataBanos" style="display: block; min-height: 430px; border: 0;"></iframe>
                <!--                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_precio_promedio_banos_14.html" width="100%" height="400" frameborder="0" id="bathroomDataCuatroBanos" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <h5 class="modal-title" id="interpretationModalLabelBanosGeneral">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Primeramente, se observa una tendencia ascendente en la relación de precio-número de baños, lo cual es coherente ya que, a mayor número de baños, mayor debería de ser el precio promedio de las viviendas, entonces es claro que la cantidad de baños es un factor que influye directamente en el valor de una vivienda.</p>
                <p>Aunque se observa un cambio considerable en el valor de las viviendas al pasar de <strong>5</strong> a <strong>5.5</strong> baños, esto posiblemente se deba a que a partir de <strong>5.5</strong> baños o más se podrían considerar propiedades de lujo, aunque también se debe tener claro que podrían estar influyendo otros factores externos o directamente de las propiedades; tales como el tamaño de la vivienda o terreno, propiedades en zonas privadas con zonas de uso común dentro, entre otras.</p>
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
                <p>Se puede observar que en cuanto a las viviendas la ciudad de Querétaro que cuentan con 1, 2, 3 o 4 baños los precios promedios son similares, alrededor de los 5 millones de pesos, a diferencia de las viviendas que cuentan con 3 baños que tiene un cambio en su precio promedio de vivienda aproximando de $1,500,000; eso podría ser por diversos factores así como el público al que le interesan este segmento, el tamaño del terreno, las viviendas o la antigüedad de esas viviendas</p>
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_MonthSupply.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                        <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_proyeccion_dias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
            La siguiente gráfica muestra el promedio de días que permanecen en oferta los inmuebles para los meses del 2024 en la ciudad de Querétaro.            </div>
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
                <p>La gráfica muestra una tendencia ascendente en el promedio de días que los inmuebles permanecen en oferta en <strong>Querétaro</strong> durante los primeros meses de <strong>2024</strong>. Esto indica que, en general, los inmuebles están tardando más tiempo en venderse en comparación con el inicio del año. </p>
                <p>El mercado inmobiliario de <strong>Querétaro</strong> experimentó una variabilidad significativa en el primer semestre de <strong>2024</strong>. Iniciando el año con un tiempo promedio de venta relativamente bajo (<strong>199</strong> días en marzo), se observó una breve recuperación en abril (<strong>189</strong> días). Sin embargo, a partir de mayo se registró un aumento considerable en los días que las propiedades permanecieron en el mercado, alcanzando un máximo de <strong>304</strong> días en agosto. Esta tendencia ascendente sugiere una desaceleración en la demanda y dificultades para encontrar compradores, lo cual podría estar relacionado con factores como cambios en las tasas de interés, menor disponibilidad de compradores o un aumento en la oferta de propiedades.</p>


                
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_riesgo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                El riesgo de que las viviendas se queden en Stock (sin venderse) por un lapso de tiempo de más de un año, es importante analizarlo ya que nos ofrece una vista rápida de la oferta y la demanda de las viviendas en Santiago de Querétaro. 
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
                <p>La porción más grande del gráfico corresponde a los productos que han estado en stock menos de un año, con un <strong>67.2%</strong>. Esto indica que la mayoría de los productos se venden con rapidez, lo que sugiere una buena rotación de inventario y una alta demanda.</p>            
                <p>La porción restante, correspondiente a productos en stock más de un año, representa el <strong>32.8%</strong> del total. Aunque es una porción menor, sigue siendo relevante y puede indicar la existencia de productos con menor rotación o que podrían requerir acciones específicas para acelerar su venta.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_proy_poblacion.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras muestra una estimación del crecimiento de la población en la ciudad para los próximos años. Cada barra representa un año y su altura indica el numero de personas que se esperan vivan en determinada región cada año. Las barras que se extienden hacia arriba indican un aumento en el número de personas, mientras que las que se extienden hacia abajo indican una disminución de las mismas. </p>
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
            A lo largo de los años que se analizan se revela un crecimiento progresivo en la ciudad de Querétaro para los próximos años. En 2021 la ciudad contaba con una población total aproximada de 2,442,205, y para 2027 se proyecta que esta población aumenté a 2,723,968. Este crecimiento de la población propone un escenario favorecedor para la ciudad, ya que influye directamente en la demanda de viviendas, lo que podría ser una oportunidad para la construcción de nuevos proyectos inmobiliarios. Además de que, la dinámica económica que hay en la zona también tiene impacto debido a la distribución de edades, ingresos y estilo de vida que trae el crecimiento demográfico.
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
                    <!-- <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalpromedio">Promedio</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalLabelcantidad">Cantidad</button>-->
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="fcgenerales"></div>
                <!--<iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_forecast_credit_promedio.html" width="100%" height="400" frameborder="0" id="fcp" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_forecast_credit_cantidad.html" width="100%" height="400" frameborder="0" id="fcc" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>Pronóstico de los montos de los créditos generales para los próximos años en la ciudad de Querétaro; estos se subdividen en 2 categorías, vivienda nueva y vivienda usada.</p>
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
                <p>Pronóstico de la cantidad de créditos para los próximos años en la ciudad de Querétaro; estos se subdividen en 3 categorías, Créditos generales, para Vivienda Nueva y Vivienda Usada.  </p>
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
                <p>De acuerdo a los datos históricos con los que se cuentan, la evolución del panorama de créditos seguirá una crecimiento positivo. Los créditos totales continuarán con un aumento consistente para 2025 y 2026 de aproximadamente 9,264 y 9,288, respectivamente para cada año. Esta totalidad de créditos se subdivide en 2 grandes categorías, Vivienda Nueva y Vivienda Usada.</p>
                <p>Para los créditos que se otorgan para viviendas nuevas se estima una ligera disminución del año 2024 al 2025 de alrededor de 482 créditos, y del año 2025 a 2026 también disminuirán 76 créditos. Estas estimaciones proponen un contexto complejo para la adquisición de viviendas nuevas en la ciudad de Santiago de Querétaro. </p>
                <p>Por su parte, los créditos para viviendas usadas tendrán una disminución de 335 créditos al pasar del año 2024 a 2025; sin embargo del año 2025 al 2026 se espera que esto aumente 113 créditos.</p>
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
                <p>De acuerdo a los datos históricos con los que se cuentan, la evolución del panorama de créditos seguirá una crecimiento positivo. Los créditos totales continuarán con un aumento consistente para 2025 y 2026. Esta totalidad de créditos se subdivide en 2 grandes categorías, Vivienda Nueva y Vivienda Usada.</p>
                <p>Para los créditos otorgados de Vivienda Nueva se puede observar que los créditos tendrán un aumento sostenido de <strong>$213,229</strong> de 2025 a 2026. Esto es señal del aumento de los precios de las viviendas en la ciudad, debido a factores como tasas de interés, inflación o equilibrio entre la demandada y la oferta.</p>
                <p>Por su parte, los créditos otorgados de Vivienda Usada igual presentarán un aumento en su valor de 2025 a 2026, aproximadamente de <strong>$232,30</strong>; esto implica que para las viviendas de la ciudad será mas accesible el mejoramiento.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<!-- Script para controlar la visualización de gráficas -->
<script>
    function showBathroomData(option) {
        // Crear el iframe dinámicamente
        let iframe;
        if (option === 'forecastcp') {
            iframe = document.createElement('iframe');
            iframe.src = "/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_forecast_credit_promedio.html"; // Cambiado de Queretaro a Puebla
            document.getElementById('DescFCG').setAttribute('data-bs-target', '#descriptionModalPromedio');
        } else if (option === 'forecastcc') {
            iframe = document.createElement('iframe');
            iframe.src = "/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_forecast_credit_cantidad.html"; // Cambiado de Queretaro a Puebla
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


    </div>
</div>











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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_plusvaliaestimada_ano.html" width="100%" height="400" frameborder="0" id="plusvalia_ano" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_plusvaliaestimada_mes24.html" width="100%" height="400" frameborder="0" id="plusvalia_mes" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>Esta sección proporciona un pronóstico de la plusvalía para el sector inmobiliario en la ciudad de Querétaro.<p>
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
                <p>De acuerdo a los datos que se pronostica tener en los próximos 3 años en la ciudad de Querétaro, la evolución del panorama de precios de los inmuebles tendrá una tendencia positiva. Los datos proyectados para los próximos dos años en Querétaro indican una tendencia al alza en el valor de los inmuebles. Para el 2025 las viviendas aumentarán aproximadamente $475,909.46; y para 2026 el aumento será de $ 527,101.39. Esta apreciación de las propiedades en la ciudad representa una oportunidad para hacer inversiones, en donde se obtienen ganancias significativas para el futuro.</p>
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
                <p>De acuerdo a los datos que se pronostica tener en el próximo año en la ciudad de Querétaro, la evolución del panorama de precios de los inmuebles tendrá una tendencia positiva, con ligeras variaciones en meses que en los cuales el precio se mantuvo constante. Esto significa que, en promedio, el monto ha ido aumentando mes a mes. Sin embargo, es importante notar que el crecimiento no es constante y hay algunos meses donde el aumento es más pronunciado que en otros. Los últimos meses del año muestran un crecimiento más acelerado en comparación con los primeros meses. Si la tendencia actual se mantiene, es probable que el monto continúe aumentando en los años siguientes.</p>
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



<div class="container-fluid">
    <div class="row">
        <!-- Columna derecha: Colonias más baratas -->
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalColonias">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonColonias" data-bs-toggle="modal" data-bs-target="#interpretationModalColoniasBaratas">Interpretación</button>

                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
            <div id="coloniasDataMasBaratas"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalColonias" tabindex="-1" aria-labelledby="descriptionModalLabelColonias" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelColonias">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Las gráficas muestran las cinco colonias con los precios más altos y más bajos respecto a todas las colonias en las que se ofertan inmuebles en Santiago de Querétaro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation Más Baratas -->
<div class="modal fade" id="interpretationModalColoniasMasBaratas" tabindex="-1" aria-labelledby="interpretationModalLabelColoniasMasBaratas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelColoniasMasBaratas">Interpretación Más Baratas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Las colonias que más barato ofertan sus inmuebles son <strong>Andadores Satélite</strong> y <strong>Satélite Sección 3N S</strong>; esto es posible debido a dos importantes razones: ambas zonas se encuentran en las salidas de <strong>Santiago de Querétaro</strong>, lo que significa que hay un difícil acceso a los diferentes servicios, tanto de transporte, entretenimiento, educación, entre otros. Otro factor importante es que ambas zonas se encuentran detrás de zonas industriales, lo cual hace que disminuyan sus precios.
            </p>
            <p>
                Además, se puede observar que la colonia <strong>Rinconada del Capricho</strong>, <strong>San Pedro Martin</strong> y <strong>Unidad Roma</strong> ofrecen precios bajos, alrededor del <strong>medio millón de pesos</strong> las tres zonas. Esto también podría relacionarse con su lejanía a la zona metropolitana y el difícil acceso a servicios públicos.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation Más Caras -->
<div class="modal fade" id="interpretationModalColoniasMasCaras" tabindex="-1" aria-labelledby="interpretationModalLabelColoniasMasCaras" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelColoniasMasCaras">Interpretación Más Caras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                Se puede ver que la colonia que más alto oferta sus inmuebles es <strong>Francisco Villa</strong>, superando en promedio los <strong>200 millones de pesos</strong>; esto es posible debido a que esta zona se encuentra cerca de diferentes destinos y con rápido acceso a servicios públicos. Las actividades turísticas representan un elemento importante dentro de los alrededores de la zona, como el <strong>Cerro de Lira</strong>, <strong>Cerro la Capilla</strong>, <strong>Peña Colorada</strong> y <strong>Cerro la Carbonera</strong>.
            </p>
            <p>
                En cuanto a la colonia que sigue, es <strong>Centro de Querétaro</strong> con un promedio de <strong>$75,000,000</strong>. Lo más probable es que debido a que los inmuebles que se ofertan en esta zona están justo en plena zona turística de <strong>Santiago de Querétaro</strong>, lo cual hace que se eleven sus precios. Por su parte, <strong>Vista Lago</strong>, <strong>Progreso</strong> y <strong>Fraccionamiento Balcones de Juriquilla</strong> son zonas residenciales de alto prestigio y debido a esa razón es que sus precios están alrededor de los <strong>20 millones de pesos</strong> en promedio.
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
   function showColoniasData(option) {
        // Crear el iframe dinámicamente
        let iframe;
        let srcPath = "/datalpine/resources/Ciudades/Queretaro/assets/graficas/";
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_colonias_predominantes.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                Se muestra una relación de las colonias en las cuales hay una mayor concentración de propiedades en oferta dentro de la zona de Santiago de Querétaro. Estas colonias podrían ser percibidas como zonas con mayor plusvalía o potencial de crecimiento, lo que atrae a más inversionistas y propietarios que buscan vender sus propiedades.
                </p>
            </div>
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
                Se observa que la colonia de <strong>Cumbres del Lago</strong> es el que lidera la oferta dentro de la zona de Santiago de Querétaro, ya que tiene un mayor número de propiedades en venta con un <strong>10.2%</strong> de la oferta total de la zona, posiblemente debido a una mayor oferta de nuevos desarrollos o por una mayor disposición de los propietarios de los inmuebles a vender sus viviendas.
                </p>
                <p>
                Además, las primeras tres colonias (<strong>Cumbres del Lago</strong>, <strong>El Refugio</strong> y <strong>Zibatá</strong>) aglutinan una parte significativa de la oferta total, lo que sugiere que la oferta de propiedades en venta no está distribuida de manera uniforme en toda la ciudad, lo que podría estar relacionado con factores como el nivel socioeconómico de la zona, la disponibilidad de servicios, el tipo de vivienda predominante y el atractivo para los compradores.
                </p>
                <p>
                - Podría haber nuevos desarrollos inmobiliarios, lo que aumentaría la oferta de viviendas disponibles para la venta.
                </p>
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_tiempo_mercado.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                El grafico de barras muestra el número de propiedades en función del tiempo que llevan en el mercado. Cada barra representa el número de propiedades que han estado en venta durante un rango de días específico en el mercado inmobiliario de la ciudad de Santiago de Querétaro.
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
                <p>La barra más alta corresponde al rango de 0-30 días, lo que indica que una gran cantidad de propiedades se venden rápidamente. Esto sugiere que existe una demanda activa en el mercado y que muchas propiedades encuentran a su comprador en un corto período de tiempo.</p>
                <p>Aunque menor que el rango anterior, el rango de 31 a 120 días también tiene un número significativo de propiedades, lo que indica que un porcentaje considerable de propiedades se venden entre el primer y cuarto mes. Los rangos superiores a <strong>120 días</strong> presentan una disminución en el número de propiedades, lo que sugiere que a partir de este punto, la probabilidad de que una propiedad se venda disminuye.
                    
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