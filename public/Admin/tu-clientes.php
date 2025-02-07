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
                    <h1>Identificación de cliente potencial</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Créditos y Segmentación -->


<!-- Sección UMAS y Destino del Crédito -->
<div class="container-fluid">
    <div class="row">
<!-- Mitad izquierda: Créditos por porcentaje de UMAS -->
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Créditos por porcentaje de UMAS</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectUMAS" onchange="showYearlyDataUMAS(this.value)">
                        <option value="2022">Seleccione un año</option>
                        <option value="2022" selected>2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalUMAS">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonUMAS" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="UMASContainer"></div>
                <!--<iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_umas_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2022" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_umas_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_umas_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2024" style="display: none;"></iframe>-->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalUMAS" tabindex="-1" aria-labelledby="descriptionModalLabelUMAS" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelUMAS">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica muestra la distribución de créditos otorgados en Tulancingo, según el nivel de ingreso de los solicitantes medido en UMAs (Unidades de Medida y Actualización). El eje horizontal indica diferentes rangos de ingreso en UMAs, que van desde ≤ <strong>2.60</strong> hasta más de <strong>12.00</strong> UMAs, mientras que el eje vertical refleja el porcentaje de créditos otorgados en cada rango de ingreso. El gráfico es útil para entender cómo se distribuyen los créditos entre diferentes grupos de ingresos y qué porcentaje representa cada uno.</p>
           </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalUMAS2022" tabindex="-1" aria-labelledby="interpretationModalLabelUMAS2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelUMAS2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El segmento de <strong>2.61</strong> a <strong>4.00</strong> UMAs concentra la mayor cantidad de créditos, lo que podría explicarse porque muchos solicitantes de créditos se encuentran en este nivel de ingresos, posiblemente porque tienen la estabilidad económica suficiente para acceder a créditos sin caer en niveles de ingresos más bajos.</p>
                <p>El <strong>15.5%</strong> de los créditos otorgados en el segmento de ingresos menores o iguales a <strong>2.60</strong> UMAs sugiere que una parte considerable de la población de Tulancingo aún depende de créditos accesibles para viviendas más económicas.</p>
                <p>El rango de <strong>6.01</strong> a <strong>9.00</strong> UMAs, con el <strong>20.2%</strong>, destaca también como un sector importante, posiblemente debido a que las personas en este rango de ingresos tienen un mayor poder adquisitivo para financiar viviendas de mayor valor, aunque no tanto como los segmentos superiores.</p>
                <p>El rango de ingresos de <strong>4.01</strong> a <strong>6.00</strong> UMAs representa el <strong>12.8%</strong>, lo que indica que existe un grupo significativo de personas con ingresos medianos que buscan financiamiento, aunque en menor proporción que los rangos inferiores y superiores.</p>
                <p>La menor participación en el segmento de <strong>9.01</strong> a <strong>12</strong> UMAs (<strong>7.7%</strong>) podría reflejar que las personas con ingresos dentro de este rango pueden no requerir tanto financiamiento o prefieren otros métodos.</p>
                <p>Por último, el <strong>20.2%</strong> en el segmento superior a <strong>12</strong> UMAs sugiere que una parte considerable de la población de altos ingresos también está accediendo a créditos para inmuebles de mayor valor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalUMAS2023" tabindex="-1" aria-labelledby="interpretationModalLabelUMAS2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelUMAS2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El segmento más alto en créditos otorgados corresponde a los ingresos entre <strong>2.61</strong> y <strong>4.00</strong> UMAS con un <strong>23.9%</strong>. Lo cual es indicativo de una clase con ingresos relativamente bajos que puede acceder a financiamientos moderados. Le sigue el grupo de ingresos entre <strong>6.01</strong> y <strong>9.00</strong> UMAS, que representa el <strong>19.3%</strong>. Esto puede estar relacionado con un aumento en el número de personas con capacidad de acceder a créditos de mayor monto, impulsado por la estabilidad económica de esta población.</p>
                <p>El rango de <strong>4.01</strong> a <strong>6.00</strong> UMAS registra un <strong>14.1%</strong>, mostrando una tendencia moderada de personas de ingresos medios-bajos que acceden a estos niveles de crédito. Mientras que el <strong>15.4%</strong> de los créditos está dirigido a personas con ingresos superiores a <strong>12</strong> UMAS, lo cual indica una presencia de inversionistas o compradores con mayor poder adquisitivo, aunque es menor en comparación con otros grupos.</p>
                <p>Por otro lado, el segmento de ingresos menores o iguales a <strong>2.60</strong> UMAS representa el <strong>16.3%</strong> del total de los créditos, lo que sugiere que una parte significativa de la población aún depende de créditos pequeños. Finalmente, el rango de <strong>9.01</strong> a <strong>12.00</strong> UMAS representa un <strong>11.1%</strong>, indicando que este grupo puede no estar tan interesado en adquirir créditos u obtienen otro tipo de financiamiento.</p>
                <p>Estos porcentajes reflejan un equilibrio entre la clase media-baja y media-alta de Tulancingo, lo que podría deberse a las políticas de financiamiento regionales, así como a las condiciones socioeconómicas predominantes en la ciudad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalUMAS2024" tabindex="-1" aria-labelledby="interpretationModalLabelUMAS2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelUMAS2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La alta participación en los rangos de ingresos de <strong>2.61</strong> a <strong>4.00</strong> UMAS y <strong>4.01</strong> a <strong>6.00</strong> UMAS y la relativamente pequeña, pero considerable participación del rango de menos de <strong>2.6</strong> UMAS con el <strong>14.4%</strong> podría estar relacionada con políticas de vivienda accesible y apoyos gubernamentales en la región, facilitando la compra de propiedades a la clase media-baja.</p>
                <p>El segmento de <strong>6.01</strong> a <strong>9</strong> UMAS, con un <strong>16.6%</strong>, refleja una participación importante pero un poco menor, posiblemente debido a las limitaciones de crédito en este rango. La baja participación en los segmentos de <strong>9.01</strong> a <strong>12</strong> UMAS (<strong>8.6%</strong>) y en el de mayores ingresos (> <strong>12</strong> UMAS con un <strong>13.9%</strong>) puede sugerir que el mercado está más enfocado en facilitar el acceso a quienes tienen ingresos más moderados, mientras que los niveles más altos tienden a usar otros mecanismos de financiamiento.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataUMAS(year) {
          // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_umas_${year}.html?year=${year}`;
                iframe.width = '100%';
                iframe.height = '400';
                iframe.frameborder = '0';
                // Reemplazar el contenido del contenedor
                document.getElementById('UMASContainer').innerHTML = '';
                document.getElementById('UMASContainer').appendChild(iframe);
                
        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonUMAS');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalUMAS${year}`);
    }
    document.addEventListener('DOMContentLoaded', function() {
        showYearlyDataUMAS('2022'); // Mostrar la gráfica de 2022 al cargar
    });
</script>



<!-- Mitad derecha: Destino del crédito -->
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Destino del crédito</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_destino.html" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal4" tabindex="-1" aria-labelledby="descriptionModalLabel4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel4">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico muestra cómo se distribuyen los créditos hipotecarios en Tulancingo según el tipo de inmueble adquirido o modalidad del crédito. Las modalidades consideradas incluyen la compra de vivienda nueva, usada, mejoramientos y otros programas. Esta visualización ayuda a entender las preferencias de los compradores y la distribución de los créditos otorgados en estas diferentes modalidades.</p>
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
                <p>La alta proporción de créditos destinados a vivienda usada (<strong>51.1%</strong>) en Tulancingo podría estar vinculada a factores económicos locales, como una mayor accesibilidad a propiedades más asequibles en el mercado secundario. La menor participación de vivienda nueva (<strong>26.7%</strong>) sugiere una oferta limitada o precios elevados que restringen el acceso a este tipo de propiedades. Además, la considerable asignación para mejoramientos (<strong>18.3%</strong>) refleja una tendencia de inversión en la mejora de viviendas existentes, lo que podría estar relacionado con un envejecimiento del parque habitacional o la necesidad de actualizar propiedades. Por último, el pequeño porcentaje destinado a otros programas (<strong>4.0%</strong>) podría sugerir que estos programas no son muy conocidos o utilizados en la región.</p>
                <p>Este comportamiento puede estar influenciado por las condiciones socioeconómicas de Tulancingo, como una menor capacidad de adquisición para nuevas viviendas o un mayor enfoque en propiedades ya existentes como inversión.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

    </div>
</div>



<div class="col-md-12">
    <div class="card">
        <div class="card-body" style="padding-bottom: 0;">
            <h5 class="card-title subtitle mb-3 text-center">Profesiones</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
            </div>
            <div class="iframe-container">
                <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                    <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/tablas/tabla_profesiones_off.html" width="100%" height="400" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .iframe-container {
        position: relative;
        width: 100%;
        height: 525px; /* Set a fixed initial height */
        box-sizing: border-box;
    }

    .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    @media (max-width: 768px) {
        .iframe-container {
            height: 400px; /* Adjusted height for mobile */
            overflow-x: auto;
            overflow-y: auto;
        }
        .iframe-container iframe {
            width: 100%;
            height: 100%;
            zoom: 0.8;
        }
    }
</style>

<!-- Modales de Descripción e Interpretación -->
<div class="modal fade" id="descriptionModalProfessions" tabindex="-1" aria-labelledby="descriptionModalProfessionsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalProfessionsLabel">Descripción: Distribución de Profesiones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Esta gráfica muestra la distribución de las principales profesiones en Tulancingo. Los datos reflejan los sectores más representativos según el número de trabajadores, permitiendo identificar tendencias y demandas laborales en la región.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalProfessions" tabindex="-1" aria-labelledby="interpretationModalProfessionsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalProfessionsLabel">Interpretación: Distribución de Profesiones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                La interpretación de esta gráfica permite analizar cuáles profesiones tienen mayor presencia en el mercado laboral de Tulancingo. Esto es útil para evaluar oportunidades de empleo, identificar sectores con mayor crecimiento, y diseñar estrategias educativas o de capacitación.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Sección Clientes Potenciales -->
<div class="container-fluid">
    <div class="row">
        <!-- Columna completa: Clientes potenciales foráneos -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Clientes potenciales foráneos</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
<!--
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal5">Descripción</button>
                        </div>-->
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/mapas/foraneos.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección Clientes Potenciales 
<div class="container-fluid">
    <div class="row">-->
        <!-- Columna completa: Clientes potenciales foráneos 
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Clientes potenciales foráneos</h5>
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
                        <iframe src="/ruta/a/grafica5.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!-- Modales para Descripción e Interpretación -->
<!-- Modal 1 -->
<div class="modal fade" id="descriptionModal1" tabindex="-1" aria-labelledby="descriptionModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal1Label">Descripción - Promedio de valor de Créditos para casas nueva y para vivienda usada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar descripción aquí -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModal1" tabindex="-1" aria-labelledby="interpretationModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal1Label">Interpretación - Promedio de valor de Créditos para casas nueva y para vivienda usada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar interpretación aquí -->
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="descriptionModal2" tabindex="-1" aria-labelledby="descriptionModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal2Label">Descripción - Distribución % de créditos por categoría (trimestre)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar descripción aquí -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModal2" tabindex="-1" aria-labelledby="interpretationModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal2Label">Interpretación - Distribución % de créditos por categoría (trimestre)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar interpretación aquí -->
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="descriptionModal3" tabindex="-1" aria-labelledby="descriptionModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal3Label">Descripción - Créditos por porcentaje de UMAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar descripción aquí -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModal3" tabindex="-1" aria-labelledby="interpretationModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal3Label">Interpretación - Créditos por porcentaje de UMAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar interpretación aquí -->
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="descriptionModal4" tabindex="-1" aria-labelledby="descriptionModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal4Label">Descripción - Destino del crédito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar descripción aquí -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModal4" tabindex="-1" aria-labelledby="interpretationModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal4Label">Interpretación - Destino del crédito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar interpretación aquí -->
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="descriptionModal5" tabindex="-1" aria-labelledby="descriptionModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal5Label">Descripción - Clientes potenciales foráneos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar descripción aquí -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModal5" tabindex="-1" aria-labelledby="interpretationModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal5Label">Interpretación - Clientes potenciales foráneos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar interpretación aquí -->
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