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
                    <h1>Identificación de cliente potencial</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Puebla, proporcionando una visión completa de las
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
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonUMAS" data-bs-toggle="modal" data-bs-target=>Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="UMASContainer"></div>
                <!-- <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_umas_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_umas_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_umas_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataUMAS2024" style="display: none;"></iframe>-->
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
                <p>Se visualiza la distribución de créditos en Puebla para el año , clasificados según el porcentaje de UMAS (Unidades de Medida y Actualización). La gráfica segmenta los créditos otorgados en diferentes intervalos de UMAS, permitiendo analizar la frecuencia de créditos dentro de cada rango. Esta gráfica es útil para identificar las tendencias en la distribución de créditos según los montos relativos a las UMAS, un indicador clave del poder adquisitivo de los solicitantes y su capacidad de financiamiento.</p>
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
            <p>
                El gráfico muestra que los créditos otorgados en la ciudad de <strong>Puebla</strong> en <strong>2022</strong> están concentrados principalmente en dos rangos: el de menor <strong>UMAS</strong> (≤2.60) y el de mayor <strong>UMAS</strong> (>12.00), con <strong>22%</strong> y <strong>20%</strong> respectivamente. Esto indica una clara polarización en la distribución del crédito, sugiriendo que existe un grupo importante de personas con acceso a créditos más económicos, mientras que un porcentaje casi similar de créditos se destina a personas con mayor capacidad adquisitiva.
            </p>
            <p>
                El rango intermedio (de <strong>2.61 a 12 UMAS</strong>) muestra una distribución fragmentada entre el <strong>11%</strong> y el <strong>17%</strong>, lo cual sugiere que existe una clase media con una capacidad de crédito limitada que se dispersa entre distintos niveles. Factores socioeconómicos como la disparidad de ingresos, la capacidad de endeudamiento y la disponibilidad de vivienda accesible pueden explicar estos resultados. La concentración en los créditos de menor valor podría reflejar también las políticas de apoyo a vivienda de interés social en la región, mientras que los créditos superiores a <strong>12 UMAS</strong> corresponden a propiedades de mayor valor, apuntando a un segmento de población con mejores condiciones económicas.
            </p>

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
            <p>
                En el año <strong>2023</strong>, vemos nuevamente polarización en la distribución de los créditos, con la mayor parte de los créditos concentrados en dos sectores, aunque uno de ellos cambia respecto al año anterior. Los más altos porcentajes los tienen los segmentos de entre <strong>2.61 a 4 UMAS</strong> (<strong>18%</strong>) y el superior a <strong>12 UMAs</strong> (<strong>21%</strong>). El segmento de <strong>menor o igual a 2.60 UMAs</strong> (<strong>17%</strong>) muestra una caída considerable, pasando del <strong>22%</strong> el año anterior al <strong>17%</strong>.
            </p>
            <p>
                Esto nos podría indicar que ahora menos personas podrían estar teniendo acceso a los créditos más económicos, debido a que el sector siguiente apenas aumentó un <strong>1%</strong>, por lo que no podríamos hablar de un proceso de movilidad. El resto de los segmentos se mantiene prácticamente estable, lo que nos permite concluir que el mercado es estable para segmentos de precios medios-altos.
            </p>

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
            <p>
                En el <strong>2024</strong>, la polarización entre los segmentos de más de <strong>12 UMAS</strong> y de entre <strong>2.61 a 4 UMAS</strong> se consolida con una ligera reducción en el primero, así como un pequeño incremento en el segundo, alcanzando el mismo porcentaje de <strong>20%</strong> en este año. El segmento de <strong>6.01 a 9 UMAS</strong> disminuye un punto porcentual y el de <strong>9.01 a 12 UMAS</strong> aumenta un punto porcentual, ambos respecto al año pasado.
            </p>
            <p>
                Mientras que el segmento de <strong>4.01 a 6 UMAS</strong> se mantiene en <strong>16%</strong>, lo que también refuerza la idea de un mercado estable para precios medios-altos. Por último, vemos que la participación del segmento de menos de <strong>2.6 UMAS</strong> sigue bajando, lo que puede sugerir aún mayores dificultades para acceder a créditos más económicos o un proceso de movilidad social, ya que el siguiente segmento crece el <strong>2%</strong> que se reduce el primero del <strong>2023</strong> al <strong>2024</strong>.
            </p>

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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_destino.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>Se muestra el destino de los créditos otorgados en diferentes modalidades en el mercado inmobiliario. La gráfica refleja qué porcentaje del total de créditos se destina a la compra de inmuebles nuevos, al mejoramiento de propiedades, a la compra de inmuebles usados, y a otros programas. Este tipo de gráfico permite identificar hacia qué modalidades se dirigen la mayoría de los recursos financieros y puede ser útil para analizar las tendencias en el mercado inmobiliario, así como las preferencias de los compradores.</p>
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
            <p>
                El gráfico muestra una preferencia marcada hacia la adquisición de inmuebles nuevos en la ciudad de <strong>Puebla</strong>, con el <strong>41%</strong> del total de créditos otorgados. Este fenómeno podría estar vinculado con el crecimiento urbano que ha experimentado la ciudad en los últimos años, favorecido por el desarrollo de nuevos complejos habitacionales y la expansión de las periferias. La demanda de viviendas nuevas también se puede explicar por el atractivo de las amenidades modernas, la mayor seguridad y el diseño eficiente de estos desarrollos, así como por el acceso a facilidades de crédito promovidas por organismos como <strong>Infonavit</strong> o <strong>Fovissste</strong>, que ofrecen incentivos para la compra de viviendas nuevas.
            </p>
            <p>
                En segundo lugar, se encuentra el destino de créditos para mejoramientos de inmuebles con un <strong>30%</strong>. Esta tendencia podría estar motivada por el incremento de costos en nuevas construcciones y la saturación de ciertas zonas del mercado inmobiliario. Las personas prefieren mejorar la calidad de sus viviendas existentes en lugar de asumir los gastos adicionales asociados con la compra de un nuevo inmueble. También refleja un fenómeno de rehabilitación de áreas que anteriormente no se consideraban atractivas, pero que han ganado valor gracias a proyectos de urbanización y mejora de infraestructura.
            </p>
            <p>
                Los créditos para la compra de inmuebles usados representan el <strong>24%</strong> del total, una cifra considerablemente menor. Este segmento podría estar condicionado por la escasez de inmuebles usados con características atractivas y a costos competitivos. No obstante, sigue siendo una opción viable para quienes buscan ubicaciones céntricas o barrios tradicionales, donde las construcciones más recientes son limitadas.
            </p>
            <p>
                Finalmente, los créditos para otros programas constituyen apenas el <strong>5%</strong> del total, lo que refleja que esta modalidad aún no ha encontrado un espacio sólido dentro del mercado poblano. Este grupo podría incluir créditos para autoconstrucción o proyectos especiales, los cuales requieren requisitos específicos y podrían estar menos disponibles en la oferta crediticia actual.
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/Tablas/tabla_profesiones_off.html" 
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
        height: 560px; /* Set a fixed initial height */
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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/mapas/foraneos.html" width="100%" height="400" frameborder="0"></iframe>
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