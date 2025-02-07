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
                    <h1>Proyecciones y oportunidades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Puebla, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<!-- Sección Colonias y Potencial de Inversión -->


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
                <!--<button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonBanos" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>-->
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_precio_promedio_banos.html" width="100%" height="400" frameborder="0" id="bathroomDataBanos" style="display: block; min-height: 430px; border: 0;"></iframe>
                <!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_precio_promedio_banos_14.html" width="100%" height="400" frameborder="0" id="bathroomDataCuatroBanos" style="display: none; min-height: 430px; border: 0;"></iframe>-->            
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
                <p>Se muestra la relación entre el número de baños y el precio promedio de las propiedades en la ciudad de Puebla. Esta información es útil para identificar como el precio promedio de los inmuebles en la ciudad de Puebla varía en función del número de baños, permitiendo segmentar las propiedades. Además ayuda a determinar comprender que tipos de propiedades predominan el mercado y cómo de alinean con las preferencias de los compradores. </p>
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
                <p>Como podría esperarse, el valor de las propiedades incrementa significativamente a medida que estas tienen más baños, y entre más de estos, son cada vez mayores los incrementos en el precio promedio. Es decir, mientras que el precio medio incrementa poco entre las propiedades con un solo baño y las de dos baños, el incremento del precio medio de las propiedades de 5 baños a las de más de 6 es muy grande, por esto mismo es enorme la diferencia entre el precio medio de la primera categoría y la última.</p>

                <p>Mientras que los inmuebles con un baño tienen un precio promedio de <strong>$2,718,721.18 MXN</strong>, las de seis baños o más alcanzan un valor medio de <strong>$13,293,127.75 MXN</strong>. Tal patrón sugiere que los compradores asocian un mayor número de baños con propiedades más lujosas, orientadas a segmentos de mayor poder adquisitivo.</p>

                <p>Lo anterior puede deberse, en parte, al enfoque del mercado inmobiliario poblano en propiedades con comodidades adicionales, las cuales suelen ser más atractivas para familias numerosas o individuos que buscan características premium. Factores socioeconómicos como el relativamente alto porcentaje de población de clase media en la ciudad y la demanda de viviendas con ciertas características específicas pueden explicar este creciente incremento en los precios conforme aumenta la cantidad de baños en la propiedad.</p>
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
                <p>Podemos notar que a medida que aumenta el número de baños, se incrementa el precio medio de los inmuebles, y que los incrementos en los precios son cada vez mayores para cada sección. Es decir, mientras que el precio medio incrementa poco entre las propiedades con un solo baño y las de dos baños (de <strong>$2.7 millones</strong> a <strong>$2.9 millones</strong> de pesos), el incremento del precio medio de las propiedades de 3 baños a las de más de 4 es muy grande (de <strong>$4.6 millones</strong> a <strong>$6.8 millones</strong> de pesos).</p>

                <p>Tal patrón sugiere que los compradores asocian un mayor número de baños con propiedades más valiosas, orientadas a segmentos de mayor poder adquisitivo. Lo cual en parte puede deberse al enfoque del mercado inmobiliario poblano en propiedades con comodidades adicionales, las cuales suelen ser más atractivas para familias numerosas.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_MonthSupply.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_proyeccion_dias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_proyeccion_dias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
            La siguiente gráfica muestra el promedio de días que permanecen en oferta los inmuebles para los meses del 2024 en la ciudad de Puebla.
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
                <p>La gráfica muestra una tendencia ascendente en el promedio de días que los inmuebles permanecen en oferta en <strong>Puebla</strong> durante los primeros meses de <strong>2024</strong>. Esto indica que, en general, los inmuebles están tardando más tiempo en venderse en comparación con el inicio del año. </p>
                <p>El mercado inmobiliario de <strong>Puebla</strong> experimentó una variabilidad significativa en el primer semestre de <strong>2024</strong>. Iniciando el año con un tiempo promedio de venta relativamente bajo (<strong>154</strong> días en marzo), se observó una breve recuperación en abril (<strong>189</strong> días). Sin embargo, a partir de julio se registró un aumento considerable en los días que las propiedades permanecieron en el mercado, alcanzando un máximo de <strong>306</strong> días en septiembre. Esta tendencia ascendente sugiere una desaceleración en la demanda y dificultades para encontrar compradores, lo cual podría estar relacionado con factores como cambios en las tasas de interés, menor disponibilidad de compradores o un aumento en la oferta de propiedades.</p>

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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_riesgo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica muestra la proporción del tiempo que las propiedades han permanecido en el mercado inmobiliario en Puebla, dividiéndose en dos categorías: Menos de un año en stock y más de un año en stock. El tamaño de cada segmento refleja el porcentaje de propiedades en cada categoría.</p>

                <p>Esto es útil para analizar el riesgo en el mercado inmobiliario. Si un gran porcentaje de los inmuebles permanecen en stock por más de un año, podríamos suponer un bajo nivel de demanda, que en términos de riesgo indicaría una alta probabilidad de que los precios disminuyan o se estanquen.</p>
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
                <p>El gráfico muestra que el <strong>85%</strong> de las propiedades en Puebla han estado en el mercado por menos de un año, mientras que el <strong>14.4%</strong> ha permanecido por más de un año.</p>

                <p>Esto sugiere que la mayoría de las propiedades se han listado recientemente, lo cual refleja una dinámica de mercado activo con alta oferta de nuevos inmuebles o una demanda más activa que en otras zonas.</p>

                <p>Sin embargo, el <strong>14.4%</strong> de las propiedades que han estado más de un año en el mercado indican un riesgo de estancamiento, lo que podría deberse a factores como sobreprecio, localización poco atractiva, o exceso de oferta en segmentos específicos.</p>

                <p>La distribución también refleja que, aunque hay alta actividad de ventas y entradas nuevas al mercado, aún existen desafíos que no logran satisfacer las preferencias de los compradores.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_proy_poblacion.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <h5 class="modal-title" id="interpretationModal10">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                A lo largo de los años que se analizan se revela un crecimiento progresivo en la ciudad de <strong>Querétaro</strong> para los próximos años. En <strong>2021</strong>, la ciudad contaba con una población total aproximada de <strong>2,442,205</strong>, y para <strong>2027</strong> se proyecta que esta población aumentará a <strong>2,723,968</strong>.
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

<!-- Comentado para no ser visible -->
<!-- <div class="container-fluid">
    <div class="row">
        <!-- Mitad izquierda: Forecast Casas y Departamentos 
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Forecast Casas y Departamentos</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal11">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal11">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_forecast_casas_departamentos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mitad derecha: Forecast créditos generales (valor) [V2_PROMEDIO] 
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Forecast créditos generales (valor) [V2_PROMEDIO]</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_forecast_creditos_v2_promedio.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Sección Plusvalía & Proyección Anual -->
<!-- <div class="container-fluid">
    <div class="row">
        <!-- Mitad izquierda: Plusvalía estimada (5 años) [%]
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Plusvalía estimada (5 años) [%]</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal13">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal13">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_plusvalia_estimada_5_anos_porcentaje.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
        Estas van en un desplegable, porcentaje/total
        <!-- Mitad derecha: Plusvalía estimada (5 años) [Total]
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Plusvalía estimada (5 años) [Total]</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal14">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal14">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_plusvalia_estimada_5_anos_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid">
    <div class="row">
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
            <!--  <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_forecast_credit_promedio.html" width="100%" height="400" frameborder="0" id="fcp" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_forecast_credit_cantidad.html" width="100%" height="400" frameborder="0" id="fcc" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>La siguiente gráfica muestra el pronóstico de los montos de los créditos generales para los próximos años en la ciudad de Puebla; estos se subdividen en 2 categorías, vivienda nueva y vivienda usada.</p>
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
                <p>La siguiente gráfica muestra el pronóstico de la cantidad de créditos para los próximos años en la ciudad de Puebla; estos se subdividen en 3 categorías, Créditos generales, para Vivienda Nueva y Vivienda Usada.   </p>
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
                <p>Según los datos históricos disponibles, el panorama de los créditos seguirá una tendencia negativa a lo largo del año. Se prevé un aumento constante en los créditos totales para 2025, aproximadamente de 1910. Estos créditos se dividen en dos categorías principales: Vivienda Nueva y Vivienda Usada.</p>
                <p>En cuanto a los créditos otorgados para viviendas nuevas, se estima una disminución moderada del año 2024 al 2025, de unos 619 créditos, y una disminución adicional de 231 créditos del año 2025 al 2026. Estas proyecciones sugieren un entorno complejo para la adquisición de viviendas nuevas en la ciudad de Puebla.</p>
                <p>Por otro lado, los créditos para viviendas usadas experimentarán una disminución de 216 créditos al pasar del año 2024 a 2025; sin embargo, se espera un aumento de 68 créditos del año 2025 al 2026.</p>
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
                <p>Para los créditos otorgados de Vivienda Nueva se puede observar que los créditos tendrán un aumento sostenido de <strong>$92,626</strong> de 2025 a 2026. Esto es señal del aumento de los precios de las viviendas en la ciudad, debido a factores como tasas de interés, inflación o equilibrio entre la demandada y la oferta.</p>
                <p>Por su parte, los créditos otorgados de Vivienda Usada igual presentarán un aumento en su valor de 2025 a 2026, aproximadamente de <strong>$143,206</strong>; esto implica que para las viviendas de la ciudad será más accesible el mejoramiento.</p>
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
            iframe.src = "/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_forecast_credit_promedio.html";
            document.getElementById('DescFCG').setAttribute('data-bs-target', '#descriptionModalPromedio');
        } else if (option === 'forecastcc') {
            iframe = document.createElement('iframe');
            iframe.src = "/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_forecast_credit_cantidad.html";
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_plusvaliaestimada_ano.html" width="100%" height="400" frameborder="0" id="plusvalia_ano" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_plusvaliaestimada_mes24.html" width="100%" height="400" frameborder="0" id="plusvalia_mes" style="display: none; min-height: 430px; border: 0;"></iframe>
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
    </div>













<!-- Proyección Forecast Media Anual -->
<div class="container-fluid">
    <div class="row">        
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
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonColonias" data-bs-toggle="modal" data-bs-target="#interpretationModalColoniasMasBaratas">Interpretación</button>
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
                <p>El gráfico muestra una comparación de los precios medios de los inmuebles ubicados en las colonias con los costos más bajos en la ciudad de <strong>Puebla</strong>. Las colonias representadas en el gráfico son <strong>San Ramón Infonavit</strong>, <strong>Santa Bárbara</strong>, <strong>Santa María La Ribera</strong>, <strong>Lomas de San Valentín</strong> y <strong>San Juan Bosco</strong>.</p>

                <p>Cada barra corresponde a una colonia y su longitud indica el precio medio de los inmuebles en esa ubicación. La información es útil para entender el posicionamiento relativo de estas colonias dentro del mercado económico de la ciudad.</p>

                <p>Este análisis permite a los inversores y compradores identificar las áreas de mayor accesibilidad económica y demanda en <strong>Puebla</strong>.</p>
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
                <p>La gráfica refleja cómo, incluso dentro de las zonas con los precios más accesibles, existe una considerable variabilidad en el costo de los inmuebles.</p>

                <p><strong>San Ramón Infonavit</strong> presenta el precio medio más bajo con <strong>$326,622</strong> pesos. Se trata de una colonia que ha sido históricamente considerada como una zona de vivienda social con infraestructura limitada y mayor densidad de población.</p>

                <p>En contraste, <strong>San Juan Bosco</strong> tiene un costo superior, con una media de <strong>$502,333.33</strong> pesos, probablemente debido a una mejor ubicación y un entorno urbano más desarrollado.</p>

                <p>Además, factores como la conectividad vial, el acceso a servicios y la percepción de seguridad influyen en los precios de estas colonias en particular.</p>

                <p>Esto sugiere que, aunque todas estas áreas se encuentran en la parte baja del espectro de precios en <strong>Puebla</strong>, las condiciones y características de cada colonia crean diferencias de valor significativas.</p>
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
                <p>El gráfico muestra una comparación de los precios medios de los inmuebles ubicados en las colonias con los costos más altos en la ciudad de <strong>Puebla</strong>. Las colonias representadas en el gráfico son <strong>Villa Magna</strong>, <strong>Club de Golf de Puebla</strong>, <strong>Santa Cruz</strong>, <strong>Bosques de Angelópolis</strong> y <strong>San Rafael Poniente</strong>.</p>

                <p>Cada barra corresponde a una colonia y su longitud indica el precio medio de los inmuebles en esa ubicación. La información es útil para entender el posicionamiento relativo de estas colonias dentro del mercado premium de la ciudad.</p>

                <p>Este análisis permite a los inversores y compradores identificar las áreas de mayor exclusividad y demanda en <strong>Puebla</strong>, proporcionando una visión clara de las zonas más cotizadas del mercado inmobiliario local.</p>
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
                <p>Las colonias más exclusivas de Puebla presentan precios elevados, lo que refleja su alta demanda y posicionamiento dentro del mercado inmobiliario local. Esto se puede atribuir a la calidad de vida que ofrecen, incluyendo una infraestructura moderna, servicios de alto nivel y seguridad.</p>

                <p><strong>Villa Magna</strong> (<strong>$17,935,294.12</strong>), al ser la colonia con el precio promedio más alto, destaca por sus grandes desarrollos residenciales y la cercanía a centros de esparcimiento de lujo, lo cual la convierte en una de las áreas más exclusivas de la ciudad.</p>

                <p><strong>Club de Golf Puebla</strong> (<strong>$15,824,450</strong>) y <strong>Bosques de Angelópolis</strong> (<strong>$13,375,165.92</strong>) también se caracterizan por su orientación hacia un público de alto poder adquisitivo, al contar con amplias áreas verdes, lo que incrementa su atractivo.</p>

                <p>La diferencia de precios refleja tanto el prestigio asociado a cada colonia como la limitada oferta de propiedades disponibles, lo que aumenta el valor de mercado de las mismas.</p>
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
        let srcPath = "/datalpine/resources/Ciudades/Puebla/assets/graficas/";
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


        <!-- Gráfica: Tiempo en el mercado -->
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_colonias_predominantes.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                Se muestra una relación de las colonias en las cuales hay una mayor concentración de propiedades en oferta dentro de la zona de Puebla. Estas colonias podrían ser percibidas como zonas con mayor plusvalía o potencial de crecimiento, lo que atrae a más inversionistas y propietarios que buscan vender sus propiedades.                </p>
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
                La colonia <strong>Puebla</strong> es la que tiene la mayor participación en el mercado inmobiliario con un <strong>4.1%</strong> seguida por <strong>Jardines de San Manuel</strong> con <strong>3.1%</strong>. Estos relativamente altos porcentajes pueden explicarse por la ubicación de las mismas, ya que ambas colonias están bien conectadas con el resto de la ciudad y poseen características de urbanización desarrollada como  acceso conveniente a servicios, escuelas y zonas comerciales, lo cual las hace atractivas para compradores potenciales y proyectos de vivienda. El <strong>centro histórico</strong> con un <strong>2.4%</strong> está por debajo de las dos primeras, posiblemente por restricciones de desarrollo y altos costos de mantenimiento asociados con las regulaciones de preservación patrimonial.  <strong>La Paz</strong> y <strong>Bello Horizonte</strong>, con <strong>2.3%</strong> y <strong>2%</strong> respectivamente, podrían estar limitadas en oferta por su menor extensión territorial o por que se concentran en propiedades residenciales de menor densidad y baja rotación en el mercado.
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_tiempo_mercado.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico muestra el tiempo que las propiedades han estado en el mercado en la ciudad de Puebla, dividido en diferentes rangos de días.</p>

                <p>El eje horizontal indica los rangos de tiempo en el mercado (0-30 días, 31-120 días, 121-240 días, 241-364 días y más de 365 días), mientras que el eje vertical muestra la cantidad de propiedades dentro de cada categoría.</p>

                <p>La utilidad del gráfico radica en identificar cuántas propiedades permanecen en el mercado durante un periodo de tiempo específico, para así evaluar la velocidad de ventas y la demanda inmobiliaria en diferentes periodos.</p>
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
                <p>La mayoría de las propiedades se venden en un periodo de corto a medio, teniendo <strong>1,165</strong> vendidas entre 0 y 30 días y <strong>975</strong> entre 31 y 120 días. Esto indica un mercado dinámico, en el cual una gran parte de las viviendas encuentra comprador en los primeros meses de su oferta. Sin embargo, a partir de los 121 días (<strong>580</strong> propiedades), la cantidad de inmuebles vendidos disminuye significativamente, lo cual puede indicar un estancamiento progresivo para inmuebles que no se vendieron en un periodo temprano.</p>

                <p>Finalmente, se observa un ligero aumento en el número de propiedades que han estado en el mercado por más de 365 días (<strong>499</strong> inmuebles). Este fenómeno puede deberse a algunas propiedades que no se ajustan a la demanda predominante por diversos factores. Además, la alta competencia y la sobreoferta de inmuebles en ciertos segmentos pueden provocar que algunas propiedades permanezcan en el mercado durante un año o más.</p>

                <p>La tendencia general revela que, aunque la mayoría de propiedades se venden relativamente rápido, hay una proporción significativa que enfrenta dificultades para encontrar compradores, lo cual puede estar influido por factores económicos locales y la saturación del mercado inmobiliario de la ciudad.</p>
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