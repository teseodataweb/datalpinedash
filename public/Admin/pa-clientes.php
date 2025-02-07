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
                <!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_umas_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_umas_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_umas_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2024" style="display: none;"></iframe>-->
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
                <p>Se visualiza la distribución de créditos de acuerdo al nivel de porcentaje en UMAS (Unidades de Medida y Actualización) del año. El eje X refleja los diferentes rangos de ingresos, y el eje Y muestra el porcentaje de créditos otorgados en cada rango. Esta visualización ayuda a comprender cómo los diferentes niveles de ingreso afectan el acceso al crédito en la ciudad.</p>
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
                <p>La concentración de créditos en el segmento de > <strong>12</strong> UMAS, con un <strong>28.14%</strong>, refleja una tendencia hacia un grupo más acomodado económicamente, que tiene mayor acceso a financiamiento. Esta tendencia podría explicarse por el crecimiento de la clase media alta en la región y una creciente demanda de propiedades de mayor valor, especialmente en  inversiones en inmuebles de lujo, ya que <strong>Pachuca</strong> se ha convertido en un punto de interés para inversionistas por su cercanía a la <strong>Ciudad de México</strong> y su potencial de desarrollo económico.</p>

                <p>En los segmentos de menor ingreso, los porcentajes más bajos, como el <strong>14.77%</strong> en ≤ <strong>2.60 UMAS</strong>,  o el <strong>14.11%</strong> en <strong>2.61 a 6 UMAS</strong> podrían estar relacionados con la capacidad limitada de financiamiento de estas personas, quienes probablemente dependen de subsidios o apoyos gubernamentales para acceder a créditos más pequeños o viviendas de interés social. El acceso al crédito también puede verse limitado por la falta de historial crediticio o la inestabilidad laboral en este grupo.</p>

                <p>Además, los datos de ingresos medios en los segmentos entre <strong>4.01 - 12.00 UMAS</strong>, con promedios de <strong>15.59%</strong> y <strong>12.62%</strong>, indican que hay una población considerable con ingresos medianos que sigue accediendo a financiamiento para vivienda. Aunque sorprende que el segmento de <strong>9.01 a 12 UMAS</strong> tenga el porcentaje más bajo de todos.</p>
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
                <p>En <strong>2023</strong>, el mayor porcentaje de créditos se concentró en el rango de ingresos superiores a <strong>12</strong> UMAS (<strong>23.6%</strong>), lo que resalta la mayor participación de personas con altos ingresos en el mercado crediticio. Los segmentos de ingresos medios, como el rango de <strong>6.01-9.00</strong> UMAS (<strong>17.9%</strong>) y el de <strong>4.01-6.00</strong> UMAS (<strong>15.3%</strong>), también muestran una actividad considerable, lo que indica un mercado activo en estos niveles de ingreso.</p>

                <p>El segmento de <strong>9.01-12.00</strong> UMAS también es significativo con un <strong>14.6%</strong>, lo que muestra que hay una buena proporción de créditos para personas con ingresos medios-altos. Esta proporción es igual para el rango de las <strong>2.61</strong> a las <strong>4</strong> UMAS. En comparación, los créditos otorgados a personas con ingresos más bajos, ≤ <strong>2.60</strong> UMAS (<strong>13.9%</strong>), son menores, lo que sugiere barreras en el acceso al crédito para este grupo.</p>

                <p>Este patrón refleja que la mayoría de los créditos otorgados están dirigidos a personas con ingresos medios y altos, mientras que el acceso es más limitado para quienes perciben ingresos menores. Esto podría deberse a mayores restricciones crediticias para los grupos de menores ingresos o a una mayor capacidad adquisitiva de los sectores altos en <strong>Pachuca</strong>.</p>
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
                <p>El mayor porcentaje de créditos otorgados se encuentra en el rango de > <strong>12</strong> UMAS (<strong>21%</strong>), lo que indica una prevalencia de créditos dirigidos a personas con ingresos más altos. Esto sugiere que los hogares con mayor capacidad adquisitiva son los que están solicitando y obteniendo una mayor cantidad de financiamiento en <strong>Pachuca de Soto</strong>.</p>

                <p>Por otro lado, los créditos en los rangos de <strong>4.01-6.00</strong> UMAS (<strong>19%</strong>) y <strong>6.01-9.00</strong> UMAS (<strong>17.6%</strong>) también representan una parte importante del mercado, lo que podría estar relacionado con el tamaño del sector de ingresos medios en la ciudad. La participación más baja se observa en el rango de ≤ <strong>2.60</strong> UMAS (<strong>12.5%</strong>), lo que indica que las personas con menores ingresos tienen un acceso más limitado a los créditos, posiblemente debido a mayores requisitos de solvencia o menor capacidad para cumplir con los pagos.</p>

                <p>Es notable como el rango de <strong>9.01</strong> a <strong>12</strong> UMAS tiene un porcentaje menor que los dos rangos inferiores a este. Ingresos medios-altos tienen un bajo interés en obtener créditos inmobiliarios.</p>

                <p>Este patrón sugiere en general, una concentración de financiamiento en los sectores de ingresos altos y medios, con una menor participación de los segmentos de ingresos bajos en el mercado inmobiliario de <strong>Pachuca</strong> en <strong>2024</strong>.</p>
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
                iframe.src = `/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_umas_${year}.html?year=${year}`;
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
    // Mostrar la gráfica de 2019 por defecto al cargar la página
   document.addEventListener('DOMContentLoaded', function() {
    showYearlyDataUMAS('2022');
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_destino.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>El gráfico muestra cómo se distribuyen los créditos hipotecarios en <strong>Pachuca de Soto</strong> según el tipo de inmueble adquirido o modalidad del crédito. Las modalidades consideradas incluyen la compra de vivienda nueva, usada, mejoramientos y otros programas. Esta visualización ayuda a entender las preferencias de los compradores y la distribución de los créditos otorgados en estas diferentes modalidades.</p>
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
                <p>La mayor parte de los créditos se destina a la compra de inmuebles nuevos (<strong>46.2%</strong>), lo que puede explicarse por la alta oferta de desarrollos inmobiliarios en <strong>Pachuca</strong>, que buscan atraer a compradores con propiedades nuevas y modernas. El porcentaje significativo de créditos para inmuebles usados (<strong>35.9%</strong>) sugiere que también hay un mercado consolidado de propiedades existentes, probablemente debido a la ubicación o al menor costo en comparación con los desarrollos nuevos. La inversión en mejoras representa un porcentaje menor (<strong>10.6%</strong>), lo que podría indicar que la mayoría de los propietarios optan por vender o adquirir nuevas propiedades en lugar de mejorar las actuales. y un porcentaje aún menor de los créditos se destinan a otros programas (<strong>7.2%</strong>)</p>
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
                <p> La mayoría de los créditos se destina a la compra de inmuebles nuevos. Esto puede estar relacionado con el auge del sector de la construcción en <strong>Querétaro</strong> y la expansión de desarrollos residenciales nuevos. La compra de propiedades usadas también representa una parte significativa, posiblemente debido a la relativa falta de disponibilidad de nuevas viviendas en ciertas zonas actualmente o a la preferencia de algunos compradores por zonas más céntricas. El porcentaje destinado al mejoramiento de propiedades sugiere que, aunque menor, existe una tendencia a invertir en la renovación de viviendas existentes, lo que podría estar vinculado al aumento del valor de las propiedades o a programas de financiamiento específico para mejoras. Finalmente, los créditos destinados a otros programas indican una diversidad de opciones de financiamiento disponibles para los compradores que buscan alternativas fuera de las modalidades tradicionales.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/Tablas/tabla_profesiones_off.html" 
                        frameborder="0">
                </iframe>
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
                Esta gráfica muestra la distribución de las principales profesiones en Querétaro. Los datos reflejan los sectores más representativos según el número de trabajadores, permitiendo identificar tendencias y demandas laborales en la región.
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
                La interpretación de esta gráfica permite analizar cuáles profesiones tienen mayor presencia en el mercado laboral de Querétaro. Esto es útil para evaluar oportunidades de empleo, identificar sectores con mayor crecimiento, y diseñar estrategias educativas o de capacitación.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/foraneos.html" width="100%" height="400" frameborder="0"></iframe>
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/foraneos.png" width="100%" height="400" frameborder="0"></iframe>
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
            Esta gráfica de barras muestra la distribución de créditos otorgados en Pachuca de Soto durante el año, clasificados según el nivel de ingresos en UMAS (Unidades de Medida y Actualización). El eje X refleja los diferentes rangos de ingresos, y el eje Y muestra el porcentaje de créditos otorgados en cada rango. Esta visualización ayuda a comprender cómo los diferentes niveles de ingreso afectan el acceso al crédito en la ciudad.
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
                <p>
                La concentración de créditos en el segmento de > <strong>12 UMAS</strong>, con un <strong>28.14%</strong>, refleja una tendencia hacia un grupo más acomodado económicamente, que tiene mayor acceso a financiamiento. Esta tendencia podría explicarse por el crecimiento de la clase media alta en la región y una creciente demanda de propiedades de mayor valor, especialmente en  inversiones en inmuebles de lujo, ya que <strong>Pachuca</strong> se ha convertido en un punto de interés para inversionistas por su cercanía a la <strong>Ciudad de México</strong> y su potencial de desarrollo económico.

En los segmentos de menor ingreso, los porcentajes más bajos, como el <strong>14.77%</strong> en ≤ <strong>2.60 UMAS</strong>,  o el <strong>14.11%</strong> en <strong>2.61 a 6 UMAS</strong> podrían estar relacionados con la capacidad limitada de financiamiento de estas personas, quienes probablemente dependen de subsidios o apoyos gubernamentales para acceder a créditos más pequeños o viviendas de interés social. El acceso al crédito también puede verse limitado por la falta de historial crediticio o la inestabilidad laboral en este grupo.

Además, los datos de ingresos medios en los segmentos entre <strong>4.01 - 12.00 UMAS</strong>, con promedios de <strong>15.59%</strong> y <strong>12.62%</strong>, indican que hay una población considerable con ingresos medianos que sigue accediendo a financiamiento para vivienda. Aunque sorprende que el segmento de <strong>9.01 a 12 UMAS</strong> tenga el porcentaje más bajo de todos.
                </p>
               
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