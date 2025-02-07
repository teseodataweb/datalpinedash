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
                    <h1>Factibilidad y viabilidad</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Puerto Vallarta, proporcionando una visión completa de las
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
                            <h5 class="card-title subtitle mb-3 text-center">Promedio de valor de Créditos para casas nueva y para vivienda usada</h5>
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
                        <p>Se presenta el promedio del monto de los créditos otorgados para viviendas nuevas y usadas en Pto. Vallarta durante los años 2019 a 2023, desglosado por trimestres.</p> 
                        <p>La gráfica de líneas permite comparar cómo varían los montos de los créditos según el tipo de vivienda, destacando las diferencias entre los créditos otorgados para inmuebles nuevos y usados a lo largo del año.</p>
                        <p>Esta visualización es útil para observar las tendencias y fluctuaciones en los valores de los créditos en el mercado inmobiliario.</p>                        
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
                        <p>En el mercado inmobiliario de Puerto Vallarta, los promedios de los créditos otorgados para viviendas <strong>nuevas</strong> y <strong>usadas</strong> muestran tendencias interesantes.</p>
                        <p>Durante el año 2019, los créditos para viviendas <strong>nuevas</strong> presentaron un aumento significativo en el cuarto trimestre, alcanzando un promedio de <strong>1,223,078.30</strong> pesos, lo que sugiere un mayor interés en la adquisición de propiedades <strong>nuevas</strong> hacia finales del año. Por otro lado, los créditos para viviendas <strong>usadas</strong> también mostraron un incremento en el cuarto trimestre, aunque a un ritmo menor, alcanzando un promedio de <strong>1,049,945.63</strong> pesos.</p>
                        <p>Además, las fluctuaciones en los montos de crédito pueden influir en la estrategia de precios y promociones para atraer a compradores en diferentes momentos del año.</p>
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
                        <p>En el mercado inmobiliario de Puerto Vallarta, los promedios de los créditos otorgados para viviendas <strong>nuevas</strong> y <strong>usadas</strong> muestran tendencias interesantes.</p>
                        <p>Durante este año, los créditos para viviendas <strong>nuevas</strong> presentaron un aumento significativo en el cuarto trimestre, alcanzando un promedio de <strong>1,464,739.20</strong> pesos, lo que sugiere un mayor interés en la adquisición de propiedades <strong>nuevas</strong> hacia finales del año. Por otro lado, los créditos para viviendas <strong>usadas</strong> mantuvieron un nivel estable, con un promedio de <strong>1,177,396.75</strong> pesos en el cuarto trimestre.</p>
                        <p>Estas fluctuaciones en los montos de crédito pueden influir en las estrategias de precios y promociones para atraer a compradores en diferentes momentos del año. Además, el aumento en los créditos para viviendas <strong>nuevas</strong> indica un dinamismo en el mercado de propiedades recientes, lo que podría impulsar el desarrollo de nuevos proyectos residenciales en la región.</p>
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
                        <p>Durante el año <strong>2021</strong>, los créditos para viviendas <strong>nuevas</strong> alcanzaron un máximo en el segundo trimestre, con un promedio de <strong>1,810,616.24</strong> pesos, lo que indica un fuerte interés en propiedades recientes durante este período. Por otro lado, los créditos para viviendas <strong>usadas</strong> mostraron un aumento significativo en el cuarto trimestre, alcanzando un promedio de <strong>1,970,088.86</strong> pesos, lo que sugiere un mayor interés en propiedades existentes hacia finales del año.</p>
                        <p>Estas fluctuaciones en los montos de crédito pueden influir en las estrategias de precios y promociones para atraer a compradores en diferentes momentos del año. Además, el aumento en los créditos para viviendas <strong>usadas</strong> en el cuarto trimestre podría reflejar una mayor demanda por propiedades más asequibles o con características específicas que atraen a los compradores.</p>
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
                        <p>En <strong>2022</strong>, los créditos para viviendas <strong>nuevas</strong> aumentaron significativamente en el cuarto trimestre, alcanzando un promedio de <strong>1,915,828.41</strong> pesos, lo que indica un mayor interés en propiedades recientes hacia finales del año. Sin embargo, los créditos para viviendas <strong>usadas</strong> mostraron un crecimiento aún más pronunciado, alcanzando un máximo en el cuarto trimestre con un promedio de <strong>2,372,802.68</strong> pesos. Este aumento en los créditos para viviendas <strong>usadas</strong> sugiere un fuerte interés en propiedades existentes, posiblemente debido a su valoración o características únicas.</p>
                        <p>Estas fluctuaciones en los montos de crédito pueden influir en las estrategias de precios y promociones para atraer a compradores en diferentes momentos del año. Además, el dinamismo en el mercado de viviendas <strong>usadas</strong> podría impulsar la renovación y mejora de propiedades existentes en la región.</p>
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
                        <p>Los créditos para viviendas <strong>nuevas</strong> alcanzaron un máximo en el tercer trimestre de <strong>2023</strong>, con un promedio de <strong>2,253,129.77</strong> pesos, lo que indica un fuerte interés en propiedades recientes durante este período. Sin embargo, en el cuarto trimestre, los créditos para viviendas <strong>nuevas</strong> disminuyeron significativamente, alcanzando un promedio de <strong>1,583,775.78</strong> pesos. Por otro lado, los créditos para viviendas <strong>usadas</strong> mostraron un crecimiento constante, alcanzando un promedio de <strong>2,252,095.82</strong> pesos en el cuarto trimestre. Este dinamismo en el mercado de viviendas <strong>usadas</strong> sugiere un interés sostenido en propiedades existentes, posiblemente debido a su valoración o características únicas.</p>
                        <p>Estas fluctuaciones en los montos de crédito pueden influir en las estrategias de precios y promociones para atraer a compradores en diferentes momentos del año. Además, el interés en viviendas <strong>usadas</strong> podría impulsar la renovación y mejora de propiedades existentes en la región.</p>
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
                iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_scatt_creditos_nuevausada_${year}.html?year=${year}`;
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
                        <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_estacionalidad.html" width="100%" height="400" frameborder="0"></iframe>
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
                        <p>El gráfico muestra el número de créditos hipotecarios adquiridos por trimestre en los años 2022, 2023 y 2024. Proporciona una representación visual de la variación en la adquisición de créditos hipotecarios a lo largo de diferentes trimestres, mostrando tendencias y cambios en el mercado de préstamos para viviendas.</p>
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
                        <p>En el mercado de créditos hipotecarios de Puerto Vallarta, el número de créditos adquiridos por trimestre entre 2022 y 2024 muestra algunas tendencias interesantes.</p>
                        <ul>
                            <li>Durante el año <strong>2022</strong>, se observó un aumento significativo en el cuarto trimestre, con <strong>359</strong> créditos, lo que sugiere un mayor interés en la adquisición de viviendas hacia finales del año.</li>
                            <li>En <strong>2023</strong>, el número de créditos continuó creciendo en los primeros dos trimestres, alcanzando un máximo de <strong>382</strong> créditos en el segundo trimestre, pero luego disminuyó ligeramente en los trimestres siguientes.</li>
                            <li>En <strong>2024</strong>, el número de créditos se mantuvo estable en los primeros tres trimestres, pero disminuyó notablemente en el cuarto trimestre, con solo <strong>216</strong> créditos. Esta disminución podría reflejar cambios en las condiciones económicas o en la demanda del mercado inmobiliario.</li>
                        </ul>
                        <p>Estas fluctuaciones pueden influir en las estrategias de financiamiento y promoción para atraer a compradores en diferentes momentos del año. Además, la variación en la adquisición de créditos hipotecarios puede indicar ajustes en el mercado de préstamos para viviendas, posiblemente debido a factores como las tasas de interés o la confianza del consumidor.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_pie_creditos_edad.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <li><strong>Violeta:</strong> Edad menor a 29 años.</li>
                <li><strong>Azul:</strong> Edad de 30 a 59 años.</li>
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
                <p>El grupo de edad entre <strong>30 y 59 años</strong> es el más activo en la obtención de créditos, representando el <strong>70.6%</strong> del total, lo que sugiere que este rango de edad es el más estable y con mayor capacidad de endeudamiento para adquirir viviendas. 
                Por otro lado, los grupos de edad <strong>menor a 29 años</strong> y <strong>mayor a 60 años</strong> tienen una participación menor, con <strong>23.1%</strong> y <strong>6.35%</strong> respectivamente. </p>
                <p>Esta distribución indica que las estrategias de financiamiento y promoción podrían centrarse en atraer a los adultos en plena edad laboral, mientras que también se podría explorar cómo aumentar la accesibilidad para los jóvenes y adultos mayores, posiblemente mediante programas específicos o condiciones crediticias más favorables.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_precio_promedio_segmento.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica muestra el promedio de precios por segmento de inmuebles en <strong>Puerto Vallarta</strong>. Cada segmento representa un rango de precios específico, desde el segmento <strong>E</strong> (menos de <strong>500 mil</strong> a <strong>1 millón</strong> de pesos) hasta el segmento <strong>S</strong> (<strong>4 millones</strong> a <strong>12 millones</strong> de pesos). Este gráfico permite identificar cómo varían los precios promedio entre los diferentes segmentos de propiedades en el mercado inmobiliario de la ciudad.</p>
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
                <p>La gráfica presenta los precios promedio por segmento en el mercado de Puerto Vallarta.</p>
                <p>Se observa que:</p>
                <ul>
                    <li>El segmento ELITE tiene el precio promedio más alto, con $ <strong>38,065,790.28</strong>.</li>
                    <li>Le sigue el segmento L, con un precio promedio de $ <strong>16,176,652.18</strong>. Mientras que en el segmento S el precio promedio es de $ <strong>7,220,461.11</strong>.</li>
                    <li>En el segmento A, el precio promedio es de $ <strong>3,619,286.56</strong>, y en el segmento B, es de $ <strong>2,873,077.19</strong>.</li>
                    <li>Finalmente, el segmento C tiene el precio promedio de $ <strong>2,113,947.77</strong>, el segmento D tiene un precio promedio de $ <strong>1,370,685.79</strong> y el segmento E tiene el precio promedio más bajo con un precio promedio de $ <strong>634,980.59</strong>.</li>
                </ul>
                <p>Lo anterior permite entender la distribución de precios en el mercado inmobiliario local y puede ayudar a los asesores inmobiliarios a guiar a sus clientes en la búsqueda de propiedades que se ajusten a sus presupuestos y necesidades específicas.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_scatt_precio_oferta.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>Esta visualización representa la mediana de precios en el mercado durante el período de 2022-2023. Observa una vista general en la tendencia de precios medianos en el mercado de viviendas durante el periodo considerado.</p>
                <ul>
                    <li>Si la mediana es alta, esto sugiere que las casas se vendieron a precios relativamente altos en ese periodo, indicando un mercado inmobiliario robusto o alta demanda de propiedades.</li>
                    <li>Si la mediana es baja, implica que los precios promedio fueron más asequibles. Esto podría señalar un mercado más accesible para compradores.</li>
                </ul>
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
                <p>La gráfica muestra cómo han variado los precios medios de las viviendas de <strong>septiembre 2023</strong> a <strong>enero de 2024</strong>.</p>
                <p>Se observa que la mediana de los precios fueron subiendo de forma constante mes con mes, en <strong>septiembre</strong> la mediana fue de <strong>$6,200,000</strong>, hasta llegar a <strong>enero</strong> con una mediana de precio de <strong>$7,318,925</strong>, esto nos muestra un mercado muy activo y una gran demanda de propiedades.</p>
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
                <p>La gráfica muestra la distribución de créditos otorgados en <strong>Puerto Vallarta</strong> por año, con un desglose de los créditos en diferentes rangos de valor. Los rangos varían desde menos de <strong>1 millón</strong> de pesos hasta créditos menos de <strong>20 millones</strong> de pesos, permitiendo observar la concentración de créditos en cada segmento de monto.</p>
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
                <p>En el mercado de créditos hipotecarios de <strong>Puerto Vallarta</strong>, la distribución de los créditos otorgados muestra una concentración significativa en el rango de menos de <strong>1 millón</strong> de pesos, con un total de <strong>810</strong> créditos. Este segmento representa la mayoría de las transacciones, lo que sugiere que el mercado está dominado por compradores que buscan propiedades más asequibles. En contraste, los créditos en el rango de <strong>1 a 2 millones</strong> de pesos son menos frecuentes, con solo <strong>242</strong> créditos, y aún menos en los rangos superiores. Los créditos por encima de <strong>4 millones</strong> de pesos, que llegan hasta <strong>20 millones</strong>, suman <strong>96</strong> transacciones, lo que indica una presencia de compradores con mayor capacidad económica, posiblemente inversores o compradores de propiedades de lujo. Esta distribución puede influir en las estrategias de financiamiento y promoción, enfocándose en diferentes segmentos del mercado según el monto del crédito y el perfil del comprador. Además, la concentración en créditos de menor valor sugiere un mercado accesible para compradores de primera vivienda o propiedades más económicas.</p>
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
                <p>En el mercado de créditos hipotecarios de <strong>Puerto Vallarta</strong> durante <strong>2023</strong>, la distribución de los créditos otorgados muestra una concentración significativa en el rango de menos de <strong>1 millón</strong> de pesos, con un total de <strong>820</strong> créditos. Este segmento representa la mayoría de las transacciones, lo que sugiere que el mercado está dominado por compradores que buscan propiedades más asequibles. En contraste, los créditos en el rango de <strong>1 a 2 millones</strong> de pesos son menos frecuentes, con <strong>293</strong> créditos, y aún menos en los rangos superiores. Los créditos por encima de <strong>4 millones</strong> de pesos, que llegan hasta <strong>20 millones</strong>, suman <strong>111</strong> transacciones, lo que indica una presencia de compradores con mayor capacidad económica, posiblemente inversores o compradores de propiedades de lujo. Esta distribución puede influir en las estrategias de financiamiento y promoción, enfocándose en diferentes segmentos del mercado según el monto del crédito y el perfil del comprador. Además, la concentración en créditos de menor valor sugiere un mercado accesible para compradores de primera vivienda o propiedades más económicas.</p>
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
                <p>En el mercado de créditos hipotecarios de <strong>Puerto Vallarta</strong> durante <strong>2024</strong>, la distribución de los créditos otorgados muestra una concentración significativa en el rango de menos de <strong>1 millón</strong> de pesos, con un total de <strong>640</strong> créditos. Este segmento representa la mayoría de las transacciones, lo que sugiere que el mercado está dominado por compradores que buscan propiedades más asequibles. En contraste, los créditos en el rango de <strong>1 a 2 millones</strong> de pesos son menos frecuentes, con <strong>267</strong> créditos, y aún menos en los rangos superiores. Los créditos por encima de <strong>4 millones</strong> de pesos, que llegan hasta <strong>20 millones</strong>, suman <strong>104</strong> transacciones, lo que indica una presencia de compradores con mayor capacidad económica, posiblemente inversores o compradores de propiedades de lujo.</p>
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
        iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_creditos_monto_${year}.html?year=${year}`;
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
                        <!--<option value="2022" selected>2022</option>
                        <option value="2023">2023</option>-->
                        <option value="2024" selected>2024</option>
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
                <p>Esta gráfica de pastel muestra la distribución de propiedades en Puerto Vallarta, clasificadas por diferentes segmentos de precio. Los segmentos van desde menos de <strong>500 mil</strong> pesos <strong>(E)</strong> hasta más de <strong>22 millones de pesos</strong> <strong>(ELITE)</strong>, y permiten observar cómo se reparte el mercado inmobiliario en términos de valor de las propiedades.</p>
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
                <h5 class="modal-title" id="interpretationModalLabelSegmento2022">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>            
            <div class="modal-body">
                <p>En el mercado inmobiliario de <strong>Puerto Vallarta</strong>, se observa una participación significativa de propiedades de precio elevado. El <strong>segmento S</strong>, que probablemente incluye propiedades de lujo o de gran valor, representa el <strong>53.9%</strong> del total, mientras que el <strong>segmento L</strong>, que también incluye propiedades de alto valor, contribuye con el <strong>23.1%</strong>. Esta concentración en propiedades de precio alto refleja la naturaleza del mercado inmobiliario de Puerto Vallarta, que es conocido por su atractivo turístico y su demanda de propiedades exclusivas, especialmente entre extranjeros y compradores de segundas residencias.</p>
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
                <p>En el mercado inmobiliario de Puerto Vallarta, se observa una participación significativa de propiedades de precio elevado. El segmento S, que probablemente incluye propiedades de lujo o de gran valor, representa el <strong>53.9%</strong> del total, mientras que el segmento L, que también incluye propiedades de alto valor, contribuye con el <strong>23.1%</strong>. Esta concentración en propiedades de precio alto refleja la naturaleza del mercado inmobiliario de Puerto Vallarta, que es conocido por su atractivo turístico y su demanda de propiedades exclusivas, especialmente entre extranjeros y compradores de segundas residencias.</p>
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
                                <!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/propiedades.html" width="100%" height="400" frameborder="0"></iframe>-->
                                <iframe src="https://datalpine.mx/dashboard/heatmap_puerto_vallarta_corrected.html" width="100%" height="400" frameborder="0"></iframe>
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
                        <p>El mapa de calor revela que las zonas más densamente pobladas con propiedades (marcadas en rojo) se encuentran en:</p>
                        <ul>
                            <li><strong>Puerto Vallarta Centro</strong></li>
                            <li><strong>Marina Vallarta</strong></li>
                            <li><strong>Nuevo Vallarta</strong></li>
                        </ul>
                        <p>Estas zonas son hotspots inmobiliarios debido a su infraestructura desarrollada, atractivos turísticos, y fácil acceso a servicios esenciales. Invertir en estas áreas puede ofrecer retornos significativos debido a la alta demanda y la apreciación del valor de las propiedades.</p>
                        <p>Baja Demanda: Colonias como <strong>Rancho Alegre</strong> y <strong>Valle Marlín</strong> tienen una muy baja cantidad de propiedades disponibles.</p>
                    </div>
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
                                <div> 
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal15">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal15">Interpretación</button>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <!--<iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/colonias.html" width="100%" height="400" frameborder="0"></iframe>-->
                                <iframe src="https://datalpine.mx/dashboard/puertovallarta_property_map_final_v2.html" width="100%" height="400" frameborder="0"></iframe>
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
                        <h5 class="modal-title" id="descriptionModalLabel15">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Este mapa interactivo ofrece una representación visual de las colonias locales, proporcionando información clave sobre el mercado inmobiliario. Incluye datos como el precio promedio de las propiedades, el costo por metro cuadrado de terreno y de construcción, así como el promedio de recámaras, baños y cajones de estacionamiento. Además, detalla los precios promedio por metro cuadrado de terreno y de construcción.</p>
                        <p>Cada colonia se clasifica en un segmento específico, desde <strong>E</strong> (<strong>menor precio</strong>) hasta <strong>S</strong> (<strong>mayor precio</strong>) , según el rango de precios de las propiedades y están representados de la siguiente manera:</p>
                        <ul>
                            <li><strong>SEGMENTO E</strong>: Menor a <strong>1M</strong> (Verde)</li>
                            <li><strong>SEGMENTO D</strong>: <strong>1M</strong> - <strong>1.75M</strong> (Amarillo)</li>
                            <li><strong>SEGMENTO C</strong>: <strong>1.75M</strong>-<strong>2.5M</strong> (Azul)</li>
                            <li><strong>SEGMENTO B</strong>: <strong>2.5M</strong>-<strong>3.25</strong> (Morado)</li>
                            <li><strong>SEGMENTO A</strong>: <strong>3.25M</strong>-<strong>4M</strong> (Naranja)</li>
                            <li><strong>SEGMENTO S</strong>: <strong>4KK+</strong> (Rojo)</li>
                        </ul>
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
                        <h5 class="modal-title" id="interpretationModalLabel15">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>La mayoría de las colonias en <strong>Puerto Vallarta</strong> presentan propiedades con precios intermedios a altos, indicando un mercado inmobiliario enfocado en un segmento de nivel medio a alto. Las zonas turísticas como <strong>Marina Vallarta</strong> y <strong>Nuevo Vallarta</strong> dominan con una alta cantidad de propiedades, reflejando su popularidad y demanda. Las propiedades económicas son menos frecuentes y generalmente están ubicadas en las periferias o en zonas menos desarrolladas.</p>
                        <p>Esta interpretación nos permite entender mejor la distribución de precios y la densidad de propiedades en las diferentes colonias, ayudando a identificar áreas de interés.</p>
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