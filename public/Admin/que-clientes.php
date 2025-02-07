<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<!-- Contenido específico para Querétaro aquí -->


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
                                    <li class="breadcrumb-item active">Santiago de Querétaro</li>
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
                    actuales sobre el mercado inmobiliario en Querétaro, proporcionando una visión completa de las
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
                <div id="UMASContainer"></div>

                <!-- <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_umas_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2022" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_umas_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_umas_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2024" style="display: none;"></iframe>-->
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
                <p>Se visualiza la distribución de créditos de acuerdo al nivel de porcentaje en UMAS (Unidades de Medida y Actualización).</p>
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
                <p>De acuerdo al porcentaje de créditos dentro de cada rango de UMAS la mayor concentración se encuentra en el intervalo de > <strong>12</strong>, con un <strong>26%</strong> de representación, el siguiente intervalo con mayor concentración se encuentra entre <strong>6.01</strong> - <strong>9.00</strong> UMAS con <strong>18.1%</strong>, finalmente las proporciones más bajas se encuentran en el intervalo de UMAS de < <strong>2.6</strong> UMAS y <strong>2.61</strong> - <strong>4.00</strong> UMAS, <strong>13.5%</strong> y <strong>12.0%</strong>. Estos porcentajes bajos para los intervalos de UMAS puede deberse a la poca capacidad de pago que poseen los compradores.</p>
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
                <p>La mayor concentración de créditos se encuentra en el intervalo de más de <strong>12</strong> UMAS, con un <strong>26.2%</strong> de representación. El siguiente intervalo más representado está entre <strong>6.01</strong> y <strong>9.00</strong> UMAS (<strong>19.7%</strong>), seguido por el intervalo de <strong>4.01</strong> a <strong>6</strong> UMAS (<strong>16.4%</strong>) lo que indica una tendencia hacia montos intermedios.</p>
                <p>Los intervalos con menor participación se encuentran en los rangos de entre <strong>9.01</strong> a <strong>12</strong> UMAS (<strong>15%</strong>), <strong>2.61</strong> a <strong>4.00</strong> UMAS (<strong>12.8%</strong>) y ≤ <strong>2.6</strong> UMAS (<strong>10%</strong>). Esta baja proporción en los rangos más bajos puede estar relacionada con la menor capacidad de pago de los solicitantes o la limitada disponibilidad de inmuebles en esos rangos de precio.</p>
                <p>Además, la alta concentración en los tramos superiores puede reflejar el crecimiento económico y el incremento en el poder adquisitivo en Querétaro, que atrae a solicitantes con mayores ingresos.</p>
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
                <p>En 2024, la mayor concentración de créditos se encuentra en el intervalo de más de <strong>12</strong> UMAS (<strong>22.7%</strong>). El segundo intervalo más representado es el de <strong>6.01</strong> a <strong>9.00</strong> UMAS (<strong>19.4%</strong>), y el tercero es <strong>4.01</strong> a <strong>6</strong> UMAS (<strong>17.6%</strong>) lo que refleja una tendencia importante hacia créditos intermedios.</p>
                <p>Los intervalos de menor participación son los de <strong>9.01</strong> a <strong>12</strong> UMAS (<strong>15.2%</strong>), <strong>2.61</strong> a <strong>4.00</strong> UMAS (<strong>14.7%</strong>), y ≤ <strong>2.6</strong> UMAS (<strong>10.5%</strong>). Estos porcentajes más bajos en los intervalos menores indican una menor capacidad de pago por parte de ciertos sectores de la población.</p>
                <p>La mayor demanda en los rangos superiores puede estar vinculada a la fortaleza económica de Querétaro y el incremento en el poder adquisitivo de los compradores que buscan propiedades de mayor valor o que pertenecen a un sector socioeconómico más alto.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_destino.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>Se muestra el destino de los créditos otorgados en diferentes modalidades en el mercado inmobiliario. La gráfica refleja qué porcentaje del total de créditos se destina a la compra de inmuebles nuevos, al mejoramiento de propiedades, a la compra de inmuebles usados, y a otros programas. Este tipo de gráfico puede ser útil para analizar las tendencias en el mercado inmobiliario, así como las preferencias de los compradores.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/Tablas/tabla_profesiones_off.html" 
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
        height: 520px; /* Set a fixed initial height */
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
                        <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/mapas/foraneos.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modales para Descripción e Interpretación -->
<!-- Modal 1 -->
<div class="modal fade" id="descriptionModal1" tabindex="-1" aria-labelledby="descriptionModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModal1Label">Descripción </h5>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Agregar descripción aquí -->
                 <p>- Promedio de valor de Créditos para casas nueva y para vivienda usada</p>
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