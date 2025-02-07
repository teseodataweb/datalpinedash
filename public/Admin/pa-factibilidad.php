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
                                    <li class="breadcrumb-item active">Pachuca de Soto

                                    </li>
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
                    <h1>Factibilidad y viabilidad</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Pachuca de Soto, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Créditos y Viviendas -->
<div class="container-fluid">
    <div class="row">
        <!-- Columna completa: Promedio de valor de Créditos para casas nueva y para vivienda usada -->
        <div class="container-fluid">
            <div class="row">

                <!-- Distribución de créditos por monto -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title subtitle mb-3 text-center">Promedio de monto en créditos para casa nueva y vivienda usada</h5>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-tie me-2"></i>
                                    <span class="developer-label">Desarrollador</span>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" id="yearSelect" onchange="showYearlyData(this.value)">
                                        <option value="2019">Seleccione un año</option>
                                        <option value="2019"selected>2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal1">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButton" data-bs-toggle="modal">Interpretación</button>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <div id="nuevaUsadaContainer"></div>    
                                <!-- Modificación en la sección de iframe para que 2019 se muestre por defecto 
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_2019.html" width="100%" height="400" frameborder="0" id="yearlyData2019" style="display: block;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_2020.html" width="100%" height="400" frameborder="0" id="yearlyData2020" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_2021.html" width="100%" height="400" frameborder="0" id="yearlyData2021" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024" style="display: none;"></iframe>
                           --> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->
        <div class="modal fade" id="descriptionModal1" tabindex="-1" aria-labelledby="descriptionModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel1">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Se presenta el promedio del monto de los créditos otorgados para viviendas nuevas y usadas en <strong>Pachuca de Soto</strong> durante el año 2019, desglosado por trimestres. La gráfica de líneas permite comparar cómo varían los montos de los créditos según el tipo de vivienda, destacando las diferencias entre los créditos otorgados para inmuebles nuevos y usados a lo largo del año. Esta visualización es útil para observar las tendencias y fluctuaciones en los valores de los créditos en el mercado inmobiliario.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="interpretationModal2019" tabindex="-1" aria-labelledby="interpretationModalLabel2019" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2019">Interpretación 2019</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>En 2019, los créditos para <strong>viviendas nuevas</strong> mantuvieron un valor promedio más alto en comparación con las viviendas usadas durante todo el año, alcanzando su pico en el tercer trimestre antes de disminuir levemente en el cuarto trimestre. Esto podría explicarse por el interés sostenido en desarrollos nuevos en Pachuca, impulsado por el crecimiento de la infraestructura y la expansión de la ciudad.</p>
                        <p>Por otro lado, los créditos para <strong>viviendas usadas</strong> mostraron fluctuaciones más notables, con una caída significativa en el segundo trimestre y una leve recuperación posterior, para volver a caer en el cuarto trimestre a un valor muy similar al del segundo. Esto podría estar relacionado con la oferta limitada de viviendas usadas en el mercado o con la competencia que representan las nuevas construcciones, que tienden a atraer a más compradores. La menor demanda de viviendas usadas también puede estar vinculada a la preferencia de los compradores por propiedades nuevas debido a mejores condiciones de financiamiento y a la percepción de mayor valor a largo plazo</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="interpretationModal2020" tabindex="-1" aria-labelledby="interpretationModalLabel2020" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2020">Interpretación 2020</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    En <strong>2020</strong>, los créditos para viviendas nuevas en <strong>Pachuca</strong> experimentaron una disminución durante el segundo y tercer trimestre, con una recuperación notable en el cuarto trimestre, alcanzando su punto más alto de casi <strong>2 millones de pesos</strong>. Esta caída a mediados de año podría estar relacionada con los efectos económicos derivados de la pandemia de <strong>COVID-19</strong>, que impactaron en la capacidad de los compradores para adquirir viviendas nuevas. Sin embargo, la fuerte recuperación hacia el final del año puede reflejar la activación estímulos económicos que incentivaron la adquisición de inmuebles nuevos. Por otro lado, los créditos para viviendas usadas mostraron un incremento constante a lo largo de los dos últimos trimestres del año, tras estar relativamente estable en la primera parte del año, pasando de un promedio de <strong>884 mil pesos</strong> en el primer trimestre a más de <strong>1.2 millones</strong> en el cuarto trimestre. Este comportamiento indica un aumento en la demanda de propiedades usadas, posiblemente debido a la accesibilidad de estas viviendas frente a las nuevas, en un contexto donde muchos compradores podrían estar buscando opciones más asequibles debido a la incertidumbre económica provocada por la pandemia
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="interpretationModal2021" tabindex="-1" aria-labelledby="interpretationModalLabel2021" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2021">Interpretación 2021</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                        En 2021, los créditos para viviendas nuevas experimentaron una leve caída en el segundo trimestre, seguido de un aumento sostenido hasta alcanzar su punto más alto en el cuarto trimestre con 1.85 millones de pesos. Este incremento podría estar vinculado a una mayor demanda de propiedades nuevas a medida que la economía se recuperaba tras la pandemia. Las ofertas atractivas y los estímulos fiscales también pudieron haber influido en esta recuperación. Por otro lado, los créditos para viviendas usadas muestran una tendencia diferente, con una muy leve caída en el segundo trimestre y un repunte en el tercero, pero terminando el año ligeramente por debajo del promedio del tercer trimestre. Esto sugiere que, si bien hubo interés en las propiedades usadas, las nuevas construcciones fueron más atractivas para los compradores debido a mejores condiciones de financiamiento o preferencias de los compradores por propiedades más modernas. La menor inversión en viviendas usadas puede reflejar también las limitaciones en la oferta de este tipo de propiedades en el mercado.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>En 2022, los créditos para viviendas nuevas mostraron una tendencia al alza durante los primeros tres trimestres alcanzando su punto máximo en el tercero, con un promedio de más de 2.1 millones de pesos, antes de disminuir moderadamente en el cuarto trimestre. Este incremento sostenido durante los primeros tres trimestres refleja un interés creciente por viviendas nuevas, probablemente impulsado por el desarrollo de nuevos proyectos residenciales en Pachuca y el acceso a mejores condiciones de financiamiento. Por otro lado, los créditos para viviendas usadas tuvieron una caída notable en el segundo trimestre, alcanzando su punto más bajo del año, con un promedio de 1.46 millones. Sin embargo, hubo una recuperación a partir del tercer trimestre, lo que sugiere una demanda renovada por propiedades más asequibles en el mercado secundario, posiblemente debido a la estabilización económica tras las incertidumbres de los primeros meses del año. La tendencia al alza de ambos tipos de créditos hacia el final del año refleja una mayor confianza en el mercado inmobiliario de Pachuca de Soto, tanto en el sector de nuevas construcciones como en el mercado de propiedades usadas.</p>
                       
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
                        <p>En 2023, los créditos para viviendas nuevas experimentaron un fuerte incremento en el tercer trimestre, alcanzando un promedio superior a los 2.5 millones de pesos, antes de disminuir de manera considerable en el cuarto trimestre, regresando a niveles del segundo trimestre. Esta subida en el tercer trimestre podría estar relacionada con el lanzamiento de nuevos proyectos residenciales o un aumento en la demanda de propiedades nuevas debido a las mejores condiciones crediticias durante ese periodo. La caída en el cuarto trimestre refleja una posible saturación del mercado o una menor demanda en los últimos meses del año, lo que puede deberse a factores estacionales. Por otro lado, los créditos para viviendas usadas mostraron cambios menos abruptos, aunque con una considerable caída en el segundo trimestre, seguida de una recuperación en el tercero, volviendo a un valor muy similar al del primer trimestre. Sin embargo, el monto promedio de los créditos para viviendas usadas disminuyó nuevamente en el cuarto trimestre, lo que puede estar vinculado a la menor disponibilidad de propiedades usadas o a la preferencia de los compradores por inmuebles nuevos. Esta tendencia refleja el comportamiento diferenciado entre ambos mercados.</p>
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
                        <p>En 2024, los créditos para viviendas nuevas experimentaron un crecimiento constante durante los tres primeros trimestres del año, alcanzando un promedio de más de 2.65 millones de pesos en el tercer trimestre. Esto indica un fuerte interés en la adquisición de propiedades nuevas en Pachuca de Soto, probablemente impulsado por el desarrollo de nuevos proyectos residenciales y el aumento del valor de las propiedades en la región. Este aumento sostenido refleja la consolidación del mercado de vivienda nueva. Por otro lado, los créditos para viviendas usadas mostraron un comportamiento más moderado, con un modesto incremento en el segundo trimestre seguido de una leve disminución en el tercero. El promedio de los créditos para viviendas usadas se mantuvo por debajo de 1.6 millones de pesos, lo que sugiere que, aunque sigue habiendo demanda de propiedades usadas, esta es menor en comparación con las nuevas construcciones. Esta tendencia puede estar relacionada con la preferencia de los compradores por viviendas nuevas, debido a mejores condiciones de financiamiento o la percepción de mayor valor a largo plazo.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repite el modal de interpretación para los otros años -->
        <!-- Script para controlar la visualización de gráficas-->
        <script>
            function showYearlyData(year) {
                // Crear el iframe dinámicamente
                const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_creditos_nuevausada_${year}.html?year=${year}`;
                iframe.width = '100%';
                iframe.height = '400';
                iframe.frameborder = '0';
                // Reemplazar el contenido del contenedor
                document.getElementById('nuevaUsadaContainer').innerHTML = '';
                document.getElementById('nuevaUsadaContainer').appendChild(iframe);

                // Actualizar el botón de interpretación según el año
                const interpretationButton = document.getElementById('interpretationButton');
                interpretationButton.setAttribute('data-bs-target', `#interpretationModal${year}`);
            }

            // Mostrar la gráfica de 2019 por defecto al cargar la página
            document.addEventListener('DOMContentLoaded', function() {
                showYearlyData('2019');
            });
        </script> 
      

        <!-- Estacionalidad -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Estacionalidad</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalEstacionalidad">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalEstacionalidad">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_estacionalidad.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Description -->
        <div class="modal fade" id="descriptionModalEstacionalidad" tabindex="-1" aria-labelledby="descriptionModalLabelEstacionalidad" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabelEstacionalidad">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>El gráfico muestra la cantidad de créditos otorgados en Pachuca durante los diferentes trimestres, desde el primer trimestre de 2022 hasta el segundo trimestre de 2024. La gráfica ilustra cómo ha variado el número de créditos concedidos en cada periodo, proporcionando una visión clara de la estacionalidad del mercado crediticio en la región. Este tipo de gráfico es útil para identificar patrones recurrentes y fluctuaciones en la actividad de financiamiento.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Interpretation -->
        <div class="modal fade" id="interpretationModalEstacionalidad" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionalidad" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabelEstacionalidad">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        La gráfica revela que el número de créditos otorgados ha experimentado variaciones significativas a lo largo de los años. En general, el cuarto trimestre de cada año muestra un pico en la cantidad de créditos otorgados, alcanzando los <strong>395 créditos</strong> en dos años consecutivos. Este patrón puede estar relacionado con la mayor actividad económica durante los últimos meses del año, cuando los compradores tienden a finalizar transacciones inmobiliarias. En contraste, los trimestres intermedios, como el segundo y tercer trimestre muestran valores relativamente estables, con variaciones de 50 unidades, excepto por dos valores atípicos. El segundo trimestre del 2023, que es muy alto y para ese trimestre (<strong>388 créditos</strong>) y el segundo trimestre de 2024 siendo particularmente alto (<strong>336 créditos</strong>). Este último podría indicar una aceleración en la demanda o una mayor actividad en el mercado inmobiliario de Pachuca.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica: Distribución de créditos por grupos de edad -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por grupos de edad</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalAgeGroup">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalAgeGroup">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_creditos_edad.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalAgeGroup" tabindex="-1" aria-labelledby="descriptionModalLabelAgeGroup" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelAgeGroup">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                El gráfico de pastel está dividido en tres secciones, cada una representa un rango de edad y está asociada a un color específico:
            </p>
            <ul>
                <li><strong>Azul:</strong> Edad de 30 a 59 años.</li>
                <li><strong>Violeta:</strong> Edad menor a 29 años.</li>
                <li><strong>Rojo:</strong> Edad de 60 años o más.</li>
            </ul>
            <p>
                El tamaño de cada sección es proporcional al porcentaje de créditos otorgados a cada grupo de edad. Los porcentajes correspondientes a cada grupo se muestran dentro de cada sección.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalAgeGroup" tabindex="-1" aria-labelledby="interpretationModalLabelAgeGroup" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelAgeGroup">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>
                <strong>Dominancia del Grupo de 30 a 59 años:</strong> El grupo de edad entre <strong>30 y 59 años</strong> concentra la mayor proporción de créditos, representando el <strong>77.7%</strong> del total. Esto sugiere que este grupo de edad es el principal solicitante y beneficiario de créditos.
            </p>
            <p>
                <strong>Menor Participación de Jóvenes y Adultos Mayores:</strong> Los grupos de edad menor a <strong>29 años</strong> y de <strong>60 años o más</strong> tienen una participación menor en la obtención de créditos. El grupo de edad menor a 29 años representa el <strong>18.3%</strong> de los créditos, mientras que el grupo de 60 años o más solo representa el <strong>3.97%</strong>.
            </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Segmentación de mercado: Promedio de precio por segmento -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Promedio de precio por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <!-- Botón para abrir modal de descripción -->
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento1">Descripción</button>
                    <!-- Botón para abrir modal de interpretación -->
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalSegmento1">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_precio_promedio_segmento.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegmento1" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento1">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra el promedio de precios por segmento de inmuebles en <strong>Pachuca de Soto</strong>. Cada segmento representa un rango de precios específico, desde el <strong>segmento E</strong> (menos de 500 mil a 1 millón de pesos) hasta el <strong>segmento S</strong> (4 millones a 12 millones de pesos). Este gráfico permite identificar cómo varían los precios promedio entre los diferentes segmentos de propiedades en el mercado inmobiliario de la ciudad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalSegmento1" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento1">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La interpretación de esta gráfica proporciona información clave sobre cómo varían los precios promedio en distintos segmentos de mercado, ayudando a entender las tendencias y diferencias entre ellos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>





















       





        <!-- Porcentaje de vivienda ofertadas por antigüedad 
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Porcentaje de vivienda ofertadas por antigüedad</h5>
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
                        <iframe src="/ruta/a/grafica7.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>-->

<!-- Mediana del precio de oferta 
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Mediana del precio de oferta</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPrecioOferta">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalPrecioOferta">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_precio_oferta_mediana.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>-->

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalPrecioOferta" tabindex="-1" aria-labelledby="descriptionModalLabelPrecioOferta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelPrecioOferta">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Se muestra el histórico de la mediana del precio de oferta de los inmuebles en Pachuca de Soto durante el año 2024. La gráfica permite observar la evolución del precio de oferta a lo largo de los meses, desde marzo hasta agosto de 2024. Este tipo de gráfico es útil para identificar tendencias en el mercado inmobiliario, tales como aumentos o disminuciones en los precios de oferta, lo que puede estar influenciado por diversos factores económicos, estacionales o de demanda.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalPrecioOferta" tabindex="-1" aria-labelledby="interpretationModalLabelPrecioOferta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelPrecioOferta">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Durante <strong>2024</strong>, los precios de oferta de los inmuebles en Pachuca de Soto mostraron una tendencia decreciente desde <strong>marzo</strong>, hasta alcanzar su punto más bajo en <strong>mayo</strong> de <strong>2024</strong>, con una mediana inferior a <strong>2.3 millones</strong> de pesos. Esto podría estar relacionado con una baja temporal en la demanda de propiedades o con factores estacionales que afectaron el mercado.</p>
                <p>A partir de <strong>junio</strong>, los precios comenzaron a recuperarse de forma constante, alcanzando su punto más alto en <strong>agosto</strong> de <strong>2024</strong>, con una mediana cercana a los <strong>2.5 millones</strong> de pesos regresando al valor que se tenía en <strong>febrero</strong>. Este repunte sugiere un fortalecimiento en la demanda o el ingreso de nuevos desarrollos al mercado. La tendencia al alza en los meses de verano podría estar impulsada por una mayor actividad económica o el inicio de nuevos proyectos inmobiliarios.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>





<!-- Precio de oferta -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Precio de oferta</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_scatt_precio_oferta.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>Se muestra el histórico de precios de oferta de inmuebles en <strong>Pachuca de Soto</strong> durante el año 2024. El gráfico de líneas refleja cómo ha variado el precio promedio de los inmuebles listados en el mercado mes a mes, desde <strong>febrero hasta agosto de 2024</strong>. Esta visualización permite identificar las fluctuaciones en los precios a lo largo del tiempo, ofreciendo una perspectiva sobre el comportamiento del mercado inmobiliario en la ciudad.</p>
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
                <p>La gráfica presenta una marcada caída en los precios de oferta de inmuebles durante marzo del 2024, seguida de una rápida recuperación en los meses posteriores, principalmente en mayo, alcanzando su <strong>punto máximo en julio</strong>. Esta caída temporal podría estar relacionada con factores estacionales o con una baja en la demanda en ese periodo específico. La recuperación observada en los meses posteriores refleja un ajuste del mercado, <strong>probablemente impulsado por un aumento en la demanda de propiedades y el crecimiento de proyectos de vivienda en la región</strong>. Además, el comportamiento de los precios podría estar vinculado a la reactivación del sector inmobiliario en Pachuca tras las dificultades provocadas por la pandemia, ya que el mercado inmobiliario ha mostrado signos de recuperación desde 2023. Este tipo de fluctuaciones también puede ser consecuencia de los desarrollos urbanos y proyectos de infraestructura que han elevado el valor de las propiedades en la zona</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Distribución de créditos por monto -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por monto</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectMontos" onchange="showYearlyDataMontos(this.value)">
                        <option value="2022">Seleccione un año</option>
                        <option value="2022" selected>2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal11">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonMontos" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="creditosMontosContainer"></div>    
                <!--
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_monto_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_monto_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_monto_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2024" style="display: none;"></iframe>
            --></div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal11" tabindex="-1" aria-labelledby="descriptionModalLabel11" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel11">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra la distribución de créditos otorgados en <strong>Pachuca de Soto</strong> por año, con un desglose de los créditos en diferentes rangos de valor. Los rangos varían desde menos de <strong>1 millón</strong> de pesos hasta créditos menos de <strong>20 millones</strong> de pesos, permitiendo observar la concentración de créditos en cada segmento de monto.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalMontos2022" tabindex="-1" aria-labelledby="interpretationModalLabelMontos2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelMontos2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En <strong>2022</strong>, la mayor concentración de créditos en <strong>Pachuca de Soto</strong> se encuentra en el rango de menos de <strong>1 millón</strong> de pesos, con <strong>758</strong> créditos otorgados. Esto refleja que una gran parte de los compradores busca propiedades más accesibles, lo que podría estar relacionado con la estructura económica de la población.

        Los créditos en el rango de menos de <strong>2 millones</strong> de pesos también son significativos, con <strong>333</strong> créditos, lo que indica una demanda considerable por viviendas en este segmento medio. Por otro lado, la cantidad de créditos disminuye drásticamente en los rangos superiores, con <strong>137</strong> créditos en el rango de menos de <strong>3 millones</strong>, solo <strong>56</strong> créditos en el rango de menos de <strong>4 millones</strong> y <strong>104</strong> créditos en el rango de menos de <strong>20 millones</strong> de pesos. Esta distribución sugiere que, aunque hay un mercado para propiedades de mayor valor, la mayoría de los compradores se concentra en los segmentos de viviendas más económicas. Además que los créditos otorgados para el mercado de propiedades de mayor valor, se concentran  en una parte considerable en los inmuebles más costosos (créditos de menos de <strong>20 millones</strong>) lo que podría indicar que hay un sector pequeño, pero relevante, interesado en propiedades de lujo.

        Este comportamiento podría estar vinculado al acceso limitado a créditos de mayor valor y a la preferencia por propiedades más accesibles para la mayoría de la población. También puede reflejar una distribución desigual en la capacidad de compra de la población en <strong>Pachuca</strong>.</p>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalMontos2023" tabindex="-1" aria-labelledby="interpretationModalLabelMontos2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelMontos2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En <strong>2023</strong>, la mayor cantidad de créditos otorgados en <strong>Pachuca de Soto</strong> se concentra en el rango de menos de <strong>1 millón</strong> de pesos, con un total de <strong>790</strong> créditos, lo que indica una demanda considerable por propiedades más asequibles en la ciudad. Este patrón es similar al observado el año anterior y refleja las características económicas de la población, donde la mayor parte de los compradores busca opciones dentro de los segmentos más accesibles.

        El segundo rango con más créditos es el de menos de <strong>2 millones</strong> de pesos, con <strong>341</strong> créditos, lo que sugiere que los compradores con un presupuesto medio también tienen una participación significativa en el mercado. Sin embargo, en los rangos de mayor valor, como los de menos de <strong>3 millones</strong> de pesos, menos de <strong>4 millones</strong> de pesos y menos de <strong>20 millones</strong>, la cantidad de créditos cae drásticamente, con solo <strong>118</strong>, <strong>53</strong> y <strong>97</strong> créditos respectivamente. Esto refleja una menor demanda de propiedades de alto valor, posiblemente debido a la falta de acceso a financiamiento de mayor valor o a las preferencias por propiedades más económicas. Vemos también que el otorgamiento de créditos por cantidades más altas, es muy significativo el segmento de menos de <strong>20 millones</strong>, con <strong>97</strong> créditos, relativamente cercano al del menos de <strong>3 millones</strong> con <strong>118</strong> créditos, lo que indica que existe un sector relativamente pequeño pero importante que está interesado en los inmuebles de lujo

        Esta distribución destaca las limitaciones en el poder adquisitivo de la mayoría de los compradores en <strong>Pachuca</strong>, así como la oferta predominante de propiedades dentro de los segmentos de menor costo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalMontos2024" tabindex="-1" aria-labelledby="interpretationModalLabelMontos2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelMontos2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En <strong>2024</strong>, la mayor concentración de créditos otorgados sigue estando en el rango de menos de <strong>1 millón</strong> de pesos, con <strong>424</strong> créditos, lo que reafirma la tendencia predominante hacia la compra de propiedades más accesibles, reflejando la demanda por viviendas económicas y las limitaciones financieras de los compradores en Pachuca

El siguiente segmento, con créditos de menos de <strong>2 millones</strong> de pesos, cuenta con <strong>191</strong> créditos, lo que indica una menor demanda en comparación con el segmento más económico, pero aún representa una parte significativa del mercado. Los segmentos más altos, con menos de <strong>3 millones</strong>,  menos de <strong>4 millones</strong> y menos de <strong>20 millones</strong> de pesos, muestran una cantidad mucho menor de créditos otorgados, con <strong>42</strong> y <strong>59</strong> créditos respectivamente. Esta menor concentración en los segmentos de mayor valor sugiere que el acceso a propiedades de alto costo sigue siendo limitado y que la mayoría de los compradores opta por propiedades más asequibles. Aunque como en años pasados no hay una diferencia tan relativamente grande entre el segmento de menos de <strong>3 millones</strong> y el de menos de <strong>20 millones</strong>, por lo que podemos decir que ese sector interesado en propiedades de lujo sigue estando presente. Es bastante notable como respecto a años  pasados, prácticamente todas los segmentos han experimentado drásticas reducciones en los créditos otorgados, lo que podría indicar una desaceleración económica en este año.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    function showYearlyDataMontos(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_monto_${year}.html?year=${year}`;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('creditosMontosContainer').innerHTML = '';
        document.getElementById('creditosMontosContainer').appendChild(iframe);

        // Actualizar el botón de interpretación según el año
        const interpretationButton = document.getElementById('interpretationButtonMontos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalMontos${year}`);
    }

    // Mostrar la gráfica de 2022 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showYearlyDataMontos('2022');
    });
</script>


        <!-- Perspectiva Mercado -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Perspectiva Mercado</h5>
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
                        <iframe src="/ruta/a/grafica13.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Distribución de Colonias -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución de Colonias</h5>
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
                        <iframe src="/ruta/a/grafica14.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div> -->
         <!-- Segmentación de mercado: Promedio de precio por segmento -->
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de propiedades por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectSegmento" onchange="showYearlyDataSegmento(this.value)">
                        <option value="2022" selected>2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonSegmento" data-bs-toggle="modal" data-bs-target="#interpretationModalSegmento2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="PropiedadesSegmentoContainer"></div>
                <!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_propiedades_segmento_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataSegmento2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataSegmento2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_propiedades_segmento_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataSegmento2024" style="display: none;"></iframe>-->
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
                <p>Esta gráfica de pastel muestra la distribución de propiedades en Pachuca de Soto, clasificadas por diferentes segmentos de precio. Los segmentos van desde menos de <strong>500 mil</strong> pesos <strong>(E)</strong> hasta más de <strong>22 millones de pesos</strong> <strong>(ELITE)</strong>, y permiten observar cómo se reparte el mercado inmobiliario en términos de valor de las propiedades.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalSegmento2022" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica revela una distribución de propiedades bastante equilibrada. El segmento <strong>D</strong> (1.75 millones a 2.5 millones) y <strong>S</strong> (4 millones a 12 millones) tienen casi la misma proporción, con alrededor del <strong>21%</strong> cada uno. Esto indica una demanda significativa en ambos extremos del espectro de precios en el mercado de Pachuca, tanto en el segmento de las propiedades de nivel medio-alto como el de otras más accesibles.</p>

                <p>El segmento <strong>B</strong>, que incluye propiedades que valen entre <strong>2.5</strong> y <strong>3.25 millones</strong> de pesos, tiene la mayor proporción con un <strong>22.3%</strong>, lo que sugiere que este rango de precios es muy popular entre los compradores. Mientras tanto, el segmento <strong>A</strong> (3.25 a 4 millones de pesos) muestra una participación menor del <strong>12.1%</strong>, lo que puede reflejar una oferta limitada o menor demanda de inmuebles de alto valor, que tampoco llegan a ser de lujo.</p>

                <p>Por otro lado, el segmento <strong>E</strong>, con propiedades de menos de <strong>500 mil</strong> pesos, tiene la menor proporción con solo <strong>4.35%</strong>. Esto podría ser indicativo de una oferta muy limitada de propiedades de bajo costo.</p>

                <p>Los segmentos <strong>L</strong> (de 12 millones a 22 millones) y <strong>ELITE</strong> (más de 22 millones) no tienen participación en Pachuca.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalSegmento2023" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En 2023, el segmento <strong>S</strong>, correspondiente a propiedades de <strong>más de 4 millones de pesos</strong>, representa la mayor proporción de la distribución con un <strong>23.5%</strong>. Esto indica una fuerte presencia de propiedades de media-alta en el mercado de Pachuca, reflejando posiblemente el aumento en la demanda de inversiones inmobiliarias de alto valor.</p>
                <p>El segundo segmento más representado es el <strong>B</strong>, que abarca propiedades con precios entre <strong>2.5</strong> y <strong>3.25 millones de pesos</strong>, con un <strong>23%</strong>. Esto sugiere que hay una notable demanda por propiedades de rango medio-alto. Los segmentos <strong>D</strong> (1.75 a 2.5 millones de pesos) y <strong>C</strong> (1.75 a 2.5 millones) también tienen una participación significativa con un <strong>18.2%</strong> y <strong>17.9%</strong>, respectivamente, lo que indica que el mercado de propiedades de precios medios sigue siendo fuerte.</p>
                <p>El segmento <strong>A</strong> vuelve a situarse tras los últimos mencionados con un <strong>14.7%</strong>, lo que indica una porción relativamente pequeña aunque significativa que está interesada en propiedades de valor intermedio.</p>
                <p>En el extremo opuesto, el segmento <strong>E</strong>, con propiedades de menos de <strong>500 mil pesos</strong>, representa solo el <strong>2.81%</strong> de la distribución, lo que refleja una oferta muy limitada de propiedades económicas en Pachuca.</p>
                <p>Los segmentos <strong>L</strong> (de 12 millones a 22 millones) y <strong>ELITE</strong> (más de 22 millones) no tienen participación.</p>
                <p>Este comportamiento refleja una polarización del mercado inmobiliario en Pachuca, donde tanto las propiedades de alto valor como las de rango medio tienen una participación significativa, mientras que las propiedades de bajo costo son menos comunes.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="interpretationModalSegmento2024" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En <strong>2024</strong>, los segmentos D (<strong>1.75 a 2.5 millones de pesos</strong>) y S (<strong>más de 4 millones</strong>) dominan el mercado, con un <strong>21.4%</strong> y <strong>19.2%</strong> respectivamente, esto indica una demanda significativa en ambos extremos del espectro de precios en el mercado de Pachuca, tanto en el segmento de las propiedades de nivel medio-alto como el de otras más accesibles.</p>
                <p>Por otro lado, el segmento E (<strong>menos 500 mil a 1 millón</strong>) y C (<strong>1.75 millones a 2.5 millones</strong>) muestran casi la misma participación del <strong>16.8%</strong> y <strong>16.4%</strong>, lo que implica un presencia de propiedades de precios asequibles. Otros segmentos, como el B (<strong>2.5 millones a 3.25 millones</strong>) y A (<strong>3.25 millones a 4 millones</strong>) también tienen una participación significativa, lo que sugiere una oferta equilibrada entre propiedades de distintos rangos de precios en el mercado.</p>
                <p>Finalmente en este año es posible resaltar que las propiedades del segmento L (<strong>12 millones a 22 millones</strong>) empiezan a tener presencia en la zona, lo que puede ser señal de una pequeña élite recién establecida.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataSegmento(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_propiedades_segmento_${year}.html?year=${year}`;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('PropiedadesSegmentoContainer').innerHTML = '';
        document.getElementById('PropiedadesSegmentoContainer').appendChild(iframe);

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonSegmento');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalSegmento${year}`);
    }
     // Mostrar la gráfica de 2022 por defecto al cargar la página
     document.addEventListener('DOMContentLoaded', function() {
        showYearlyDataSegmento('2022');
    });
</script>

</div>

        <!-- Distribución de Propiedades -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title subtitle mb-3 text-center">Distribución de Propiedades</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-tie me-2"></i>
                                    <span class="developer-label">Desarrollador</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descripcionModalPropiedades">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretacionModalPropiedades">Interpretación</button>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/propiedades.html" width="100%" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Description 2023 -->
        <div class="modal fade" id="descripcionModalPropiedades" tabindex="-1" aria-labelledby="descriptionModalLabel15" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel15">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>El mapa de calor presentado ofrece una visualización de la densidad de propiedades disponibles en la ciudad. La representación utiliza una escala de colores que va desde el rojo intenso, indicando una alta concentración de propiedades en una zona específica, hasta el azul más claro, denotando una menor oferta de propiedades en esa área, donde cada propiedad está geolocalizada mediante sus coordenadas de latitud y longitud.</p>
                        <p>Esta representación permite identificar fácilmente áreas con alta demanda y concentración de propiedades, así como áreas con menor competencia y potencial para el desarrollo inmobiliario.</p>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Interpretation 2023 -->
        <div class="modal fade" id="interpretacionModalPropiedades" tabindex="-1" aria-labelledby="interpretationModalLabel15" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel15">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>El análisis de la distribución de la oferta de propiedades revela que algunas colonias destacan por su alta densidad de disponibilidad, en esta vista del mapa se aprecia una distribución uniforme a lo largo de Pachuca de Soto.</p>
                    <p>Este panorama ofrece una visión clara de las áreas con mayor y menor disponibilidad de propiedades.</p>                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

 <!-- Distribución de Propiedades -->
 <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title subtitle mb-3 text-center">Distribución de Colonias</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-tie me-2"></i>
                                    <span class="developer-label">Desarrollador</span>
                                </div>
                               <!-- <div> 
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal15">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal15">Interpretación</button>
                                </div>-->
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/colonias.html" width="100%" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

        <!-- Modal for Description 2023 -->
        <div class="modal fade" id="descriptionModal15" tabindex="-1" aria-labelledby="descriptionModalLabel15" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel15">Descripción 2023</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica muestra la distribución de propiedades para el año 2023.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Interpretation 2023 -->
        <div class="modal fade" id="interpretationModal15" tabindex="-1" aria-labelledby="interpretationModalLabel15" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel15">Interpretación 2023</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica proporciona una visión detallada de la distribución de propiedades para el año 2023.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


        <!-- Agrega los modals para las gráficas restantes -->

    </div>
</div>

<!-- Repite esta estructura para cada gráfica -->

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