<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
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
                    <h1>Proyecciones y Tendencias</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Pachuca de Soto, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>



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
                <!--
                <div class="mb-3">
                    <select class="form-select" id="bathroomSelect" onchange="showBathroomData(this.value)">
                        <option value="banos">General</option>
                        <option value="cuatrobanos">Cuatro Baños</option>
                    </select>
                </div>-->
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalBanos">Descripción</button>
                <!--                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonBanos" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>-->
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                </div>
                
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_precio_promedio_banos.html" width="100%" height="400" frameborder="0" id="bathroomDataBanos" style="display: block; min-height: 430px; border: 0;"></iframe>
                <!--                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_precio_promedio_banos_14.html" width="100%" height="400" frameborder="0" id="bathroomDataCuatroBanos" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico barras muestra la relación entre el número de baños en una propiedad y su precio promedio. Cada barra representa un rango de número de baños (<strong>1</strong>, <strong>2</strong>, <strong>3</strong>, <strong>4</strong>, <strong>5</strong> o <strong>6</strong> o más) y su altura corresponde al precio promedio de las propiedades con ese número de baños.</p>
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
                <p>Existe una clara relación positiva entre el número de baños y el precio promedio de las propiedades. A medida que aumenta el número de baños, también lo hace el precio promedio.</p>

                <p>Para las propiedades con <strong>1</strong>, <strong>2</strong> o <strong>3</strong> baños presentan precios promedio de <strong>2.2</strong>, <strong>2.0</strong> y <strong>1.9</strong> millones de pesos, respectivamente. Esto podría indicar que el precio relativamente bajo de las propiedades es correspondiente al número menor de baños que posee cada propiedad.</p>

                <p>Por otra parte las propiedades que poseen <strong>4</strong>, <strong>5</strong>, <strong>6</strong> o más baños tienen un precio promedio alto, <strong>2.4</strong> y <strong>3.0</strong> millones de pesos, respectivamente. Esto justifica su precio ya que son consideradas más exclusivas y de lujo.</p>
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
                <p>Se puede observar que en la ciudad de Pachuca de Soto las viviendas que cuentan con <strong>1</strong>, <strong>2</strong>, <strong>3</strong> o <strong>4</strong> baños tienen precios promedios similares, alrededor de los <strong>2 millones de pesos</strong>.</p>

                <p>Sin embargo, las viviendas que cuentan con <strong>4</strong> baños muestran un cambio significativo en su precio promedio, aproximándose a los <strong>$2,500,000</strong>.</p>

                <p>Esta diferencia podría atribuirse a diversos factores inmobiliarios como:</p>
                <ul>
                    <li>El público al que le interesa este segmento</li>
                    <li>El tamaño del terreno</li>
                    <li>Las características específicas de las viviendas</li>
                    <li>La antigüedad de esas viviendas</li>
                </ul>
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


<!-- Sección Meses de Oferta & Proyecciones -->

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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_MonthSupply.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                Esta métrica refleja cuántos meses tomaría agotar todas las propiedades listadas en el mercado si se utilizaran todos los créditos disponibles de cada mes para comprarlas.  Se calcula dividiendo el total de propiedades del mes listadas en el mercado inmobiliario entre el promedio mensual del volumen de créditos demandados durante dicho mes. El gráfico permite observar las variaciones en la oferta de propiedades a lo largo del tiempo, lo que puede estar influenciado por cambios en la demanda de créditos, fluctuaciones estacionales o variaciones en la disponibilidad de inmuebles.                </p>
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
            La gráfica muestra una variabilidad a lo largo del año <strong>2024</strong>, durante los primeros meses es notorio que una progresión entre la oferta y la demanda de propiedades, lo que sugiere estabilidad. Sin embargo, para los meses de <strong>abril</strong> y <strong>mayo</strong> se registran caídas en el mercado, esto puede deberse a factores estacionales, donde la dinámica económica se mantiene en un nivel bajo. Para los meses siguientes, <strong>junio</strong> y <strong>julio</strong>, se refleja un incremento significativo vinculado a factores como la sobreoferta de inmuebles o cambios en las políticas crediticias pueden haber influido en este aumento.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_riesgo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El riesgo de que las viviendas se queden en Stock (sin venderse) por un lapso de tiempo de más de un año, es importante analizarlo ya que nos ofrece una vista rápida de la oferta y la demanda de las viviendas en Pachuca de Soto.</p>
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
                <p>La porción más grande del gráfico corresponde a los productos que han estado en stock menos de un año, con un <strong>82.4%</strong>. Esto indica que la mayoría de los productos se venden con rapidez, lo que sugiere una buena rotación de inventario y una alta demanda.</p>

                <p>La porción restante, correspondiente a productos en stock más de un año, representa el <strong>17.6%</strong> del total. Aunque es una porción menor, sigue siendo relevante y puede indicar la existencia de productos con menor rotación o que podrían requerir acciones específicas para acelerar su venta.</p>
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
            <p>
                A lo largo de los años que se analizan, se revela un crecimiento progresivo en la ciudad de <strong>Pachuca</strong> para los próximos años. En <strong>2021</strong>, la ciudad contaba con una población total aproximada de <strong>3,144,514</strong>, y para <strong>2027</strong> se proyecta que esta población aumentará a <strong>3,350,825</strong>.
            </p>
            <p>
                Este crecimiento de la población propone un escenario favorecedor para la ciudad, ya que influye directamente en la demanda de viviendas, lo que podría ser una oportunidad para la construcción de nuevos proyectos inmobiliarios. Además, la dinámica económica de la zona también tiene impacto debido a la distribución de edades, ingresos y estilo de vida que trae el crecimiento demográfico.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" id="DescFCG" data-bs-target="#descriptionModalPromedio">Interpretación</button>
                        <!--<button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalpromedio">Promedio</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalLabelcantidad">Cantidad</button>-->
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="fcgenerales"></div>
            <!-- <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_forecast_credit_promedio.html" width="100%" height="400" frameborder="0" id="fcp" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_forecast_credit_cantidad.html" width="100%" height="400" frameborder="0" id="fcc" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>Pronóstico de los montos de los créditos generales para los próximos años en la ciudad de <strong>Querétaro</strong>; estos se subdividen en 2 categorías, vivienda nueva y vivienda usada.</p>
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
                <p>Pronóstico de la cantidad de créditos para los próximos años en la ciudad de <strong>Querétaro</strong>; estos se subdividen en 3 categorías, Créditos generales, para Vivienda Nueva y Vivienda Usada.  </p>
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
                <p>Para los créditos que se otorgan para viviendas nuevas se estima una ligera disminución del año 2024 al 2025 de alrededor de 482 créditos, y del año 2025 a 2026 también disminuirán 76 créditos. Estas estimaciones proponen un contexto complejo para la adquisición de viviendas nuevas en la ciudad de <strong>Santiago de Querétaro</strong>. </p>
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
<script>
    function showBathroomData(option) {
              // Crear el iframe dinámicamente
       let iframe;
       if (option === 'forecastcp') {
           iframe = document.createElement('iframe');
           iframe.src = "/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_forecast_credit_promedio.html";
           document.getElementById('DescFCG').setAttribute('data-bs-target', '#descriptionModalPromedio');
       } else if (option === 'forecastcc') {
           iframe = document.createElement('iframe');
           iframe.src = "/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_forecast_credit_cantidad.html";
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
        // Update the interpretation button to open the correct modal based on the selected filter
        const interpretationButton = document.getElementById('DescFCG');
        if (option === 'forecastcp') {
            interpretationButton.setAttribute('data-bs-target', '#interpretationModalpromedio');
        } else if (option === 'forecastcc') {
            interpretationButton.setAttribute('data-bs-target', '#interpretationModalLabelcantidad');
        }
        
    }

      // Mostrar la gráfica de 2019 por defecto al cargar la página
      document.addEventListener('DOMContentLoaded', function() {
        showBathroomData('forecastcp');
    });
</script>


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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_plusvaliaestimada_ano.html" width="100%" height="400" frameborder="0" id="plusvalia_ano" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_plusvaliaestimada_mes24.html" width="100%" height="400" frameborder="0" id="plusvalia_mes" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>Pronóstico de la plusvalía que tendrá el área de inmuebles para los próximos años y meses en la ciudad de Puebla.<p>
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
                <p>De acuerdo a los datos que se pronostica tener en los próximos 3 años en la ciudad de Puebla, la evolución del panorama de precios de los inmuebles tendrá una tendencia positiva. Los datos proyectados para los próximos dos años en Puebla indican una tendencia al alza en el valor de los inmuebles. Para el 2025 las viviendas aumentarán aproximadamente <strong>$709,208.76</strong>; y para 2026 el aumento será de <strong>$858,704.76</strong>. Esta apreciación de las propiedades en la ciudad representa una oportunidad para hacer inversiones, en donde se obtienen ganancias significativas para el futuro.</p>
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
                <p>De acuerdo a los datos que se pronostica tener en el próximo año en la ciudad de Puebla, la evolución del panorama de precios de los inmuebles tendrá una tendencia positiva, con ligeras variaciones en meses que en los cuales el precio se mantuvo constante. Esto significa que, en promedio, el monto ha ido aumentando mes a mes. Sin embargo, es importante notar que el crecimiento no es constante y hay algunos meses donde el aumento es más pronunciado que en otros. Los últimos meses del año muestran un crecimiento más acelerado en comparación con los primeros meses. Si la tendencia actual se mantiene, es probable que el monto continúe aumentando en los años siguientes. </p>
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
                <!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_colonias_baratas.html" width="100%" height="400" frameborder="0" id="coloniasDataMasBaratas" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_colonias_caras.html" width="100%" height="400" frameborder="0" id="coloniasDataMasCaras" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>La grafica nos muestra las cinco colonias las cuales tienen en promedio los precios más bajos respecto a todas las colonias en las que se ofertan inmuebles en Pachuca de Soto.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: Colonias Más Baratas -->
<div class="modal fade" id="interpretationModalColoniasBaratas" tabindex="-1" aria-labelledby="interpretationModalLabelColoniasBaratas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelColoniasBaratas">Interpretación - Colonias Más Baratas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Las colonias que más barato ofertan sus inmuebles son El Atorón, La Surtidora y Unión Popular; esto puede deberse a dos importantes razones: las zonas se encuentran en las salidas de Pachuca de Soto, lo que significa que,  hay un difícil el acceso a los diferentes servicios tanto de transporte, entretenimiento, educación, entre otras. Otro factor importante es que en estas zonas se encuentran detrás de zonas industriales, lo cual hace que disminuyan sus precios.</p>

                <p>De la misma forma, se puede observar que, la colonia  Villa Elena y Lomas de Nueva Airosa ofrecen precios bajos alrededor del medio millón de pesos, esto también podría relacionarse con su lejanía a la zona metropolitana y difícil acceso a servicios públicos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation: Colonias Más Caras -->
<div class="modal fade" id="interpretationModalColoniasCaras" tabindex="-1" aria-labelledby="interpretationModalLabelColoniasCaras" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelColoniasCaras">Interpretación - Colonias Más Caras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se puede ver que la colonia que más alto oferta sus inmuebles en la ciudad de Pachuca de Soto es Francisco Arboledas Santa Elena superando en promedio los <strong>24 millones de pesos</strong>; esto es posible que sea a que esta zona se encuentra una exclusiva y limitada población que puede acceder a estas propiedades.</p>

                <p>En cuanto a la colonia que sigue es Fraccionamiento Ex hacienda de Coscotitlán con un precio promedio de <strong>$11,500,000</strong>; lo más probable es que debido a la ubicación y el origen de hace que se eleven sus precios.</p>

                <p>Por su parte, Campo de Golf, Dolores e Industrial La Paz son zonas residenciales de alto prestigio y debido a esa razón es que sus precios están alrededor de los <strong>11</strong>, <strong>10</strong> y <strong>8 millones de pesos</strong> en promedio.</p>
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
        let srcPath = "/datalpine/resources/Ciudades/Pachuca/assets/graficas/";
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


        <!-- Gráfica: Colonias predominantes -->
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_colonias_predominantes.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                Se muestra una relación de las colonias en las cuales hay una mayor concentración de propiedades en oferta dentro de la zona de Pachuca de Soto. Estas colonias podrían ser percibidas como zonas con mayor plusvalía o potencial de crecimiento, lo que atrae a más inversionistas y propietarios que buscan vender sus propiedades.
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
                Las colonias de <strong>Centro</strong> y <strong>El Tezontle</strong> presentan los porcentajes más altos, lo que sugiere que son las zonas más predominantes, la ubicación estratégica de estas colonias, con buena conectividad a vías principales y servicios, las hace más atractivas. Como siguiente las colonias de <strong>San Antonio el Desmonte</strong>, <strong>Valle del Sol</strong> y <strong>Zona Plateada</strong> presentan porcentaje de participación similar, aunque hay un porcentaje menor los nuevos desarrollos inmobiliarios provocan que las colonias sean altamente potenciales en Pachuca de Soto.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_tiempo_mercado.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                El grafico de barras muestra el número de propiedades en función del tiempo que llevan en el mercado. Cada barra representa el número de propiedades que han estado en venta durante un rango de días específico en el mercado inmobiliario de Pachuca de Soto.
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
                La barra más alta corresponde al rango de <strong>121-240</strong> días, lo que indica que una gran cantidad de propiedades se venden medianamente rápido, entre <strong>4</strong> a <strong>8</strong> meses.
                </p>
                <p>
                Como siguiente, hay propiedades que se venden de entre <strong>31-120</strong> días, de ahí están las propiedades que se venden en más de <strong>1</strong> año.
                </p>
                <p>
                Esto sugiere que existe una demanda activa en el mercado y donde las propiedades se quedan un periodo medio-corto.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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