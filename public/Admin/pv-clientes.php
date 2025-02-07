<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pto. Vallarta | DatAlpine</title>
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jalisco</a></li>
                                    <li class="breadcrumb-item active">Puerto Vallarta</li>
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
                    actuales sobre el mercado inmobiliario en Puerto Vallarta, proporcionando una visión completa de las
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
                <p>La concentración de créditos en el segmento de > <strong>12</strong> UMAS, con un <strong>25.85%</strong>, refleja una tendencia hacia un grupo más acomodado económicamente, que tiene mayor acceso a financiamiento. Esta tendencia podría explicarse por el crecimiento de la clase media alta en la región y una creciente demanda de propiedades de mayor valor, especialmente en inversiones en inmuebles de lujo, ya que <strong>Pachuca</strong> se ha convertido en un punto de interés para inversionistas por su cercanía a la <strong>Ciudad de México</strong> y su potencial de desarrollo económico.</p>

                <p>En los segmentos de menor ingreso, los porcentajes más significativos, como el <strong>16.71%</strong> en ≤ <strong>2.60 UMAS</strong>, o el <strong>15.52%</strong> en <strong>2.61 a 4.00 UMAS</strong>, podrían estar relacionados con la capacidad limitada de financiamiento de estas personas, quienes probablemente dependen de subsidios o apoyos gubernamentales para acceder a créditos más pequeños o viviendas de interés social. El acceso al crédito también puede verse limitado por la falta de historial crediticio o la inestabilidad laboral en este grupo.</p>

                <p>Además, los datos de ingresos medios en los segmentos entre <strong>4.01 - 6.00 UMAS</strong>, con un <strong>15.21%</strong>, y <strong>6.01 a 9.00 UMAS</strong>, con un <strong>16.55%</strong>, indican que hay una población considerable con ingresos medianos que sigue accediendo a financiamiento para vivienda. El segmento de <strong>9.01 a 12 UMAS</strong> presenta un porcentaje más bajo, con un <strong>10.17%</strong>, lo que podría sugerir una menor demanda o acceso a créditos en este rango.</p>
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
                <p>La concentración de créditos en el segmento de > <strong>12</strong> UMAS, con un <strong>22.27%</strong>, refleja una tendencia hacia un grupo más acomodado económicamente, que tiene mayor acceso a financiamiento. Esta tendencia podría explicarse por el crecimiento de la clase media alta en la región y una creciente demanda de propiedades de mayor valor, especialmente en inversiones en inmuebles de lujo, ya que <strong>Pachuca</strong> se ha convertido en un punto de interés para inversionistas por su cercanía a la <strong>Ciudad de México</strong> y su potencial de desarrollo económico.</p>

                <p>En los segmentos de menor ingreso, los porcentajes más bajos, como el <strong>14.68%</strong> en ≤ <strong>2.60 UMAS</strong>, o el <strong>14.75%</strong> en <strong>2.61 a 4.00 UMAS</strong>, podrían estar relacionados con la capacidad limitada de financiamiento de estas personas, quienes probablemente dependen de subsidios o apoyos gubernamentales para acceder a créditos más pequeños o viviendas de interés social. El acceso al crédito también puede verse limitado por la falta de historial crediticio o la inestabilidad laboral en este grupo.</p>

                <p>Además, los datos de ingresos medios en los segmentos entre <strong>4.01 - 6.00 UMAS</strong>, con un <strong>17.33%</strong>, y <strong>6.01 a 9.00 UMAS</strong>, con un <strong>17.70%</strong>, indican que hay una población considerable con ingresos medianos que sigue accediendo a financiamiento para vivienda. El segmento de <strong>9.01 a 12 UMAS</strong> presenta un porcentaje más bajo, con un <strong>13.27%</strong>, lo que podría sugerir una menor demanda o acceso a créditos en este rango.</p>
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
                <p>La concentración de créditos en el segmento de > <strong>12</strong> UMAS, con un <strong>21.54%</strong>, refleja una tendencia hacia un grupo más acomodado económicamente, que tiene mayor acceso a financiamiento. Esta tendencia podría explicarse por el crecimiento de la clase media alta en la región y una creciente demanda de propiedades de mayor valor, especialmente en inversiones en inmuebles de lujo, ya que <strong>Pachuca</strong> se ha convertido en un punto de interés para inversionistas por su cercanía a la <strong>Ciudad de México</strong> y su potencial de desarrollo económico. Además, programas como el de vivienda federal anunciado por la presidenta Claudia Sheinbaum, que incluye la construcción de viviendas a bajo costo en Hidalgo, podrían estar impulsando el acceso a créditos en diferentes segmentos de ingresos[1][2].</p>

                <p>En los segmentos de menor ingreso, los porcentajes más bajos, como el <strong>13.93%</strong> en ≤ <strong>2.60 UMAS</strong>, o el <strong>16.00%</strong> en <strong>2.61 a 4.00 UMAS</strong>, podrían estar relacionados con la capacidad limitada de financiamiento de estas personas, quienes probablemente dependen de subsidios o apoyos gubernamentales para acceder a créditos más pequeños o viviendas de interés social. El acceso al crédito también puede verse limitado por la falta de historial crediticio o la inestabilidad laboral en este grupo. Sin embargo, programas de vivienda a bajo costo y regularización podrían mejorar el acceso a créditos para esta población[1][2].</p>

                <p>Además, los datos de ingresos medios en los segmentos entre <strong>4.01 - 6.00 UMAS</strong>, con un <strong>18.25%</strong>, y <strong>6.01 a 9.00 UMAS</strong>, con un <strong>17.99%</strong>, indican que hay una población considerable con ingresos medianos que sigue accediendo a financiamiento para vivienda. El segmento de <strong>9.01 a 12 UMAS</strong> presenta un porcentaje más bajo, con un <strong>12.28%</strong>, lo que podría sugerir una menor demanda o acceso a créditos en este rango. La meta de otorgar 9 mil créditos de vivienda en 2024 en Hidalgo también refleja un esfuerzo por aumentar el acceso al financiamiento para la vivienda en diferentes niveles de ingresos[6].</p>
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
                iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_creditos_umas_${year}.html?year=${year}`;
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
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_creditos_destino.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>El gráfico muestra cómo se distribuyen los créditos hipotecarios en <strong>Pto. Vallarta</strong> según el tipo de inmueble adquirido o modalidad del crédito. Las modalidades consideradas incluyen la compra de vivienda <strong>nueva</strong>, <strong>usada</strong>, <strong>mejoramientos</strong> y <strong>otros programas</strong>. Esta visualización ayuda a entender las preferencias de los compradores y la distribución de los créditos otorgados en estas diferentes modalidades.</p>
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
                <p>La mayor parte de los créditos se destina a la compra de inmuebles nuevos, con un <strong>48.33%</strong>, lo que puede explicarse por la alta oferta de desarrollos inmobiliarios en <strong>Pachuca</strong>, que buscan atraer a compradores con propiedades nuevas y modernas. El porcentaje significativo de créditos para inmuebles usados, con un <strong>21.51%</strong>, sugiere que también hay un mercado consolidado de propiedades existentes, probablemente debido a la ubicación o al menor costo en comparación con los desarrollos nuevos. La inversión en mejoras representa un porcentaje considerable, con un <strong>24.82%</strong>, lo que podría indicar que muchos propietarios están optando por mejorar sus propiedades actuales en lugar de adquirir nuevas. Finalmente, un porcentaje menor de los créditos se destinan a otros programas, con un <strong>5.34%</strong>.</p>
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
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Profesiones</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                   <!-- <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalProfessions">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalProfessions">Interpretación</button>-->
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/Tablas/tabla_profesiones_off.html" 
                        width="100%" 
                        height="400" 
                        frameborder="0" 
                        style="min-height: 490px; border: 1px solid #ccc; !important">
                </iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modales de Descripción e Interpretación -->
<div class="modal fade" id="descriptionModalProfessions" tabindex="-1" aria-labelledby="descriptionModalProfessionsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalProfessionsLabel">Descripción: Distribución de Profesiones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Esta gráfica muestra la distribución de las principales profesiones en <strong>Puerto Vallarta</strong>. Los datos reflejan los sectores más representativos según el número de trabajadores, permitiendo identificar tendencias y demandas laborales en la región.
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
                <h5 class="modal-title" id="interpretationModalProfessionsLabel">Interpretación</h5>
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
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalfor">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalfor">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                    <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/mapas/foraneos.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modales para Descripción e Interpretación -->
<!-- Modal 1 -->
<div class="modal fade" id="descriptionModalfor" tabindex="-1" aria-labelledby="descriptionModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal1Label">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El mapa muestra la distribución de compradores de otras regiones interesados en adquirir propiedades en la ciudad de Puerto Vallarta. Estos compradores se clasifican según su región de origen y se ponderan en función de un análisis detallado de variables clave, como el tamaño del mercado, la demanda del producto o servicio y la accesibilidad logística. Esta información permite comprender de dónde provienen los interesados en el mercado inmobiliario local, facilitando la identificación de tendencias y preferencias de compra.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalfor" tabindex="-1" aria-labelledby="interpretationModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModal1Label">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La mayoría de los compradores de casas en Puerto Vallarta provienen de <strong>Jalisco</strong>, representando el <strong>45.35%</strong> de las ventas. Le siguen <strong>Nayarit</strong> con un <strong>44.25%</strong> y la <strong>Ciudad de México</strong> con un <strong>7.96%</strong>. Otras regiones que también aportan significativamente son <strong>Zacatecas</strong> (1.33%), <strong>Baja California Sur</strong> (0.44%), <strong>Guanajuato</strong> (0.33%) y <strong>Querétaro</strong> (0.33%).</p>
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