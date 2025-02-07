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
                                    <li class="breadcrumb-item active">Tulancingo de Bravo

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
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
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
                                        <option value="2019" selected>2019</option>
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
                                <!--    <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2019.html" width="100%" height="400" frameborder="0" id="yearlyData2019" style="display: block;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2020.html" width="100%" height="400" frameborder="0" id="yearlyData2020" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2021.html" width="100%" height="400" frameborder="0" id="yearlyData2021" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024" style="display: none;"></iframe>
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
                        <p>El gráfico muestra la evolución del valor promedio de los créditos hipotecarios para la compra de viviendas nuevas y usadas en Tulancingo de Bravo, Hgo. El <strong>eje vertical</strong> representa el monto promedio del crédito en pesos mexicanos, mientras que el <strong>eje horizontal</strong> muestra los cuatrimestres del año. Se presentan dos líneas: una de color morado para las viviendas nuevas y otra de color rosa para las viviendas usadas</p>
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
                        <p><strong>Viviendas usadas:</strong> Al inicio del año, el valor promedio de los créditos para viviendas usadas se mantuvo relativamente estable, pero experimentó un aumento significativo en el tercer trimestre, al igual que tuvo una disminución en el cuarto trimestre. Este incremento podría deberse a diversos factores, como un mayor interés de los compradores por propiedades usadas, un aumento en los precios de las viviendas nuevas o cambios en las políticas crediticias.
                        <p><strong>Viviendas nuevas:</strong> A diferencia de las viviendas usadas, el valor promedio de los créditos para viviendas nuevas mostró una tendencia estable durante los dos primeros trimestres del año, con una ligera disminución en el tercer trimestre y una recuperación en el último trimestre. Esto podría indicar una demanda estable por viviendas nuevas o una mayor negociación en los precios de este tipo de propiedades.</p>
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
                        <p><strong>Viviendas usadas</strong>: Al inicio del año, el valor promedio de los créditos para viviendas usadas se mantuvo relativamente estable, pero experimentó un aumento significativo en el tercer trimestre, al igual que tuvo una disminución en el cuarto trimestre. Este incremento podría deberse a diversos factores, como un mayor interés de los compradores por propiedades usadas, un aumento en los precios de las viviendas nuevas o cambios en las políticas crediticias.</p>
                        <p><strong>Viviendas nuevas</strong>: A diferencia de las viviendas usadas, el valor promedio de los créditos para viviendas nuevas mostró una tendencia estable durante los dos primeros trimestres del año, con una ligera disminución en el tercer trimestre y una recuperación en el último trimestre. Esto podría indicar una demanda estable por viviendas nuevas o una mayor negociación en los precios de este tipo de propiedades.</p>
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
                        <p><strong>Viviendas usadas:</strong> Durante todo el año, el valor promedio de los créditos para viviendas usadas se mantuvo relativamente estable, siendo así hasta el <strong>cuarto trimestre</strong> del año con un ligero aumento en su valor de los créditos.</p>
                        <p><strong>Viviendas nuevas:</strong> A diferencia de las viviendas usadas, el valor promedio de los créditos para viviendas nuevas mostró una tendencia bajista durante los <strong>3 primeros trimestres</strong> del año lo que  indica una disminución del valor de los crédito, siendo esto así hasta el <strong>cuarto trimestre</strong> con un aumento considerable y una recuperación del valor de los créditos.</p>
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
                        <p><strong>Viviendas Nuevas:</strong> Al inicio del año, el valor promedio de los créditos para viviendas nuevas se mantuvo relativamente estable. Sin embargo, experimentó un ligero aumento en el segundo trimestre, alcanzando su punto máximo en ese período. Luego, se observa una disminución en el tercer trimestre, pero se recupera parcialmente en el cuarto trimestre. Esto podría indicar una mayor demanda de viviendas nuevas en el segundo trimestre, posiblemente impulsada por factores como el inicio del año, promociones especiales o una mayor confianza de los consumidores.</p>
                        <p><strong>Viviendas Usadas:</strong> La tendencia de los créditos para viviendas usadas muestra una mayor volatilidad. Al inicio del año, se observa un aumento significativo en el valor promedio de los créditos, pero luego experimenta una caída en el tercer trimestre. En el cuarto trimestre, se recupera parcialmente. Esta variabilidad podría estar influenciada por diversos factores como la disponibilidad de viviendas usadas en el mercado, las condiciones económicas generales y las preferencias de los compradores.</p>
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
                        <p><strong>Viviendas Nuevas:</strong> El valor promedio de los créditos para viviendas nuevas muestra una tendencia al alza durante el año. Inicia con un valor relativamente alto en el <strong>primer trimestre</strong>, experimenta una ligera disminución en el <strong>segundo trimestre</strong> y luego se recupera y supera su valor inicial en el <strong>tercer</strong> y <strong>cuarto trimestre</strong>. Esto sugiere un aumento en la demanda de viviendas nuevas y posiblemente un incremento en los precios de este tipo de propiedades.</p>
                        <p><strong>Viviendas Usadas:</strong> El valor promedio de los créditos para viviendas usadas muestra una tendencia más volátil. Inicia con el valor más alto en el <strong>primer trimestre</strong>, luego experimenta una fuerte caída en el <strong>segundo trimestre</strong>, y posteriormente se recupera gradualmente en el <strong>tercer</strong> y <strong>cuarto trimestre</strong>, aunque sin alcanzar su valor inicial. Esta variabilidad podría estar influenciada por diversos factores como la disponibilidad de viviendas usadas en el mercado, las condiciones económicas generales y las preferencias de los compradores.</p>
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
                        <p><strong>Viviendas Nuevas:</strong> El valor promedio de los créditos para viviendas nuevas muestra una tendencia al alza durante los <strong>primeros dos trimestres</strong>, alcanzando su punto máximo en el <strong>segundo trimestre</strong>. Sin embargo, en el <strong>tercer trimestre</strong> se observa una disminución significativa. Esto podría indicar un aumento inicial en la demanda de viviendas nuevas, posiblemente impulsado por factores como el inicio del año, promociones especiales o una mayor confianza de los consumidores. La disminución en el tercer trimestre podría estar relacionada con factores como el aumento de las tasas de interés, la incertidumbre económica o una disminución en la oferta de viviendas nuevas.</p>
                        <p><strong>Viviendas Usadas:</strong> El valor promedio de los créditos para viviendas usadas muestra una tendencia a la baja durante los <strong>tres trimestres</strong> analizados. Esto podría indicar una disminución en la demanda de viviendas usadas, posiblemente debido a factores como la competencia con las viviendas nuevas, un aumento en los costos de mantenimiento de las viviendas usadas o una menor disponibilidad de viviendas usadas en el mercado.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repite el modal de interpretación para los otros años -->

        <script>
            function showYearlyData(year) {
                // Crear el iframe dinámicamente
                const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_${year}.html?year=${year}`;
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_estacionalidad.html" width="100%" height="400" frameborder="0"></iframe>
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
                        <p>Este gráfico de barras representa la <strong>cantidad</strong> de créditos otorgados en diferentes <strong>trimestres</strong>, desde el <strong>1er trimestre</strong> de <strong>2022</strong> hasta el <strong>4to trimestre</strong> de <strong>2024</strong>. En el eje vertical se encuentra la <strong>cantidad</strong> de créditos, mientras que en el eje horizontal se muestran los <strong>trimestres</strong>. Cada barra representa un <strong>trimestre</strong> y su <strong>altura</strong> indica la <strong>cantidad</strong> de créditos otorgados en ese <strong>periodo</strong>.</p>
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
                        <p>La cantidad de créditos otorgados varía considerablemente de un trimestre a otro. No se observa una tendencia clara de crecimiento o decrecimiento sostenido a lo largo del tiempo.</p>
                        <p>Se aprecian picos en algunos trimestres, por ejemplo, el tercer trimestre de <strong>2022</strong> y el segundo trimestre de <strong>2024</strong>, lo que indica periodos de mayor actividad crediticia. Por otro lado, hay valles en otros trimestres como el segundo trimestre de <strong>2022</strong>, donde la cantidad de créditos otorgados es menor.</p>
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
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por grupos de edad</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalEdad">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalEdad">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_creditos_edad.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalEdad" tabindex="-1" aria-labelledby="descriptionModalLabelEdad" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelEdad">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
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

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalEdad" tabindex="-1" aria-labelledby="interpretationModalLabelEdad" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEdad">Interpretación</h5>
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

<!-- Promedio de precio por segmento -->
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal7">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal7">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_precio_promedio_segmento.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>La gráfica muestra el promedio de precios por segmento en el mercado inmobiliario. Cada barra representa el valor promedio de las propiedades dentro de cada segmento, desde el segmento S, hasta el segmento E. Este gráfico es útil para visualizar cómo varían los precios promedio de las propiedades en cada categoría.</p>
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
            <p>
                El siguiente gráfico muestra cuál es el valor promedio de una propiedad en cada segmento específico, lo que permite tener un panorama amplio sobre la accesibilidad de las propiedades que se ofertan en el mercado inmobiliario de <strong>Tulancingo</strong>. 
            </p>
            <p>
                Además, se identifican los compradores potenciales y el segmento que mejor se ajusta a su presupuesto y necesidades.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_precio_oferta_mediana.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div> -->

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalPrecioOferta" tabindex="-1" aria-labelledby="descriptionModalLabelPrecioOferta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelPrecioOferta">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Este gráfico de línea muestra la evolución de la mediana del precio de oferta durante los <strong>meses</strong> de <strong>febrero</strong> a <strong>agosto</strong> de <strong>2024</strong>. El eje vertical representa el precio en <strong>millones de pesos</strong>, mientras que el eje horizontal muestra los <strong>meses</strong> del año. La línea azul conecta los puntos que representan la mediana del precio de oferta en cada <strong>mes</strong>.</p>
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
                <p>El precio de oferta presenta una alta volatilidad a lo largo del periodo analizado, experimentando tanto aumentos como disminuciones significativas de un mes a otro.</p>
                <p>Se observan dos picos en los precios, uno en marzo y otro en junio, indicando momentos en los que el precio de oferta alcanzó sus valores más altos. Por otro lado, se aprecia un mínimo en mayo, donde el precio experimentó una caída considerable.</p>
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_precio_oferta.html" width="100%" height="400" frameborder="0"></iframe>
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
                        <p>Este gráfico de línea muestra la evolución del precio de oferta durante los meses de <strong>febrero</strong> a <strong>agosto</strong> de <strong>2024</strong> en Tulancingo de Bravo, Hgo. El eje vertical representa el precio en pesos mexicanos, mientras que el eje horizontal muestra los meses del año.</p>
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
                        <p>El precio de oferta presenta una alta volatilidad a lo largo del periodo analizado, experimentando tanto aumentos como disminuciones significativas de un mes a otro. La tendencia de esta gráfica es algo volátil de un mes a otro pero ha permanecido en un cierto rango de precios.</p>
                        <p>Un aumento repentino en la demanda podría impulsar los precios al alza, mientras que una disminución en la demanda podría generar una baja en los precios.</p>
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
                <!--<iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2024" style="display: none;"></iframe>-->
            </div>
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
                <p>Se muestra la cantidad de créditos otorgados en el año en <strong>Tulancingo de Bravo</strong>, segmentados según el monto de los créditos. El eje X representa diferentes rangos de valores de los créditos otorgados, desde menos de <strong>1 millón</strong> hasta menos de <strong>20 millones</strong> de pesos, mientras que el eje Y indica la cantidad total de créditos en cada uno de esos rangos. Este tipo de gráfico permite identificar las tendencias en el otorgamiento de créditos según su valor, lo cual es útil para entender cuáles son los montos más comunes de financiamiento solicitados. La gráfica puede ayudar a detectar si existe una mayor demanda de créditos pequeños o grandes, así como patrones de financiación en el mercado inmobiliario de <strong>Tulancingo</strong>.</p>
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
                <p>La gran mayoría de los créditos se concentran en el rango de menos de <strong>1 millón</strong> (<strong>217</strong> créditos otorgados). Esto indica que la mayoría de los préstamos otorgados son de bajo valor.</p>
                <p>A medida que aumenta el rango del monto del crédito, disminuye significativamente la cantidad de créditos otorgados. Esta tendencia es clara al observar que la cantidad de créditos decrece drásticamente a medida que pasamos de menos de <strong>1 millón</strong> a menos de <strong>2 millones</strong>, y así sucesivamente.</p>
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
                <p>La gran mayoría de los créditos se concentran en el rango de menos de 1 millón (<strong>203</strong> créditos otorgados). Esto indica que la mayoría de los préstamos otorgados son de bajo valor.</p>
                <p>A medida que aumenta el rango del monto del crédito, disminuye significativamente la cantidad de créditos otorgados. Esta tendencia es clara al observar que la cantidad de créditos decrece drásticamente a medida que pasamos de menos de <strong>1 millón</strong> a menos de <strong>2 millones</strong>, y así sucesivamente.</p>
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
                <p>Concentración en montos bajos: La gran mayoría de los créditos se concentran en el rango de menos de 1 millón (<strong>145</strong> créditos otorgados). Esto indica que la mayoría de los préstamos otorgados son de bajo valor.</p>
                <p>Importante mencionar que hubo una disminución parcial en comparación al año 2023.</p>
                <p>Disminución progresiva: A medida que aumenta el rango del monto del crédito, disminuye significativamente la cantidad de créditos otorgados. Esta tendencia es clara al observar que la cantidad de créditos decrece drásticamente a medida que pasamos de menos de <strong>1 millón</strong> a menos de <strong>2 millones</strong>, y así sucesivamente.</p>
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
        iframe.src = `/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_${year}.html?year=${year}`;
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



        <!-- Segmentación de mercado: Distribución de propiedades por segmento -->
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
                        <select class="form-select" id="yearSelectSegmento" onchange="showYearDataSegmento(this.value)">
                            <option value="2022"selected>2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-sm btn-outline-primary rounded-pill me-2" id="descriptionButtonSegmento" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento">Descripción</button>
                        <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonSegmento" data-bs-toggle="modal" data-bs-target="#interpretationModalSegmento2023">Interpretación</button>
                    </div>
                </div>
                <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                    <div id="PropiedadesSegmentoContainer"></div>
                <!--<iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_2022.html" width="100%" height="400" frameborder="0" id="yearDataSegmento2022" style="display: none; min-height: 430px; border: 0;"></iframe>
                    <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_20233.html" width="100%" height="400" frameborder="0" id="yearDataSegmento2023" style="display: block; min-height: 430px; border: 0;"></iframe>
                    <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_2024.html" width="100%" height="400" frameborder="0" id="yearDataSegmento2024" style="display: none; min-height: 430px; border: 0;"></iframe>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description (Same for all years) -->
<div class="modal fade" id="descriptionModalSegmento" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la segmentación del mercado inmobiliario en <strong>Tulancingo de Bravo</strong> durante el año, representando la distribución de propiedades por segmento de precio. Cada segmento está clasificado en función del valor de las propiedades, desde el segmento <strong>D</strong> (<strong>1 millón</strong> a <strong>1.75 millones</strong>) hasta el segmento <strong>S</strong> (<strong>4 millones</strong> a <strong>12 millones</strong>). La gráfica permite identificar la concentración del mercado en cada rango de precios, lo que es útil para entender las tendencias de compra y venta en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation (One for each year) -->
<div class="modal fade" id="interpretationModalSegmento2022" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La mayor concentración de propiedades se encuentra en el segmento <strong>D</strong> (1 a 1.75 millones) con un <strong>37%</strong>. Esto indica una fuerte presencia de propiedades de menor valor en el mercado inmobiliario de <strong>Tulancingo de Bravo</strong>, reflejando la posición económica de la región y la demanda por inmuebles de asequibles o de valor bajo. En segundo lugar, está el segmento <strong>C</strong> (1.75 a 2.5 millones) con un <strong>20.7%</strong>, seguido por el segmento <strong>E</strong> (>500 mil a 1 millón), lo que sugiere un interés sostenido en propiedades de rango medio-bajo. Por otro lado, los segmentos <strong>B</strong> (2.5 millones a 3.25 millones) y <strong>A</strong> (3.25 millones a 4 millones), <strong>S</strong> (4 millones a 12 millones) tienen una menor participación, lo que puede estar relacionado con una menor oferta o una preferencia de los compradores por inmuebles de mayor valor en la zona. Esta distribución puede estar influenciada por la atracción de inversionistas y compradores con mayor poder adquisitivo, así como por el desarrollo de proyectos inmobiliarios exclusivos en la región.</p>
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
                <p>La mayor concentración de propiedades se encuentra en el segmento <strong>D</strong> (<strong>1</strong> a <strong>1.75 millones</strong>) con un <strong>41.6%</strong>. Esto indica una fuerte presencia de propiedades de menor valor en el mercado inmobiliario de <strong>Tulancingo de Bravo</strong>, reflejando la posición económica de la región y la demanda por inmuebles de asequibles o de valor bajo. En segundo lugar, está el segmento <strong>C</strong> (<strong>1.75</strong> a <strong>2.5 millones</strong>) con un <strong>17.7%</strong>, seguido por el segmento <strong>E</strong> (>500 mil a <strong>1 millón</strong>) con <strong>16.7%</strong> de participación, lo que sugiere un interés sostenido en propiedades de rango medio-bajo. Por otro lado, los segmentos <strong>B</strong> (<strong>2.5 millones</strong> a <strong>3.25 millones</strong>) y <strong>A</strong> (<strong>3.25 millones</strong> a <strong>4 millones</strong>), <strong>S</strong> (<strong>4 millones</strong> a <strong>12 millones</strong>) tienen una menor participación, lo que puede estar relacionado con una menor oferta o una preferencia de los compradores por inmuebles de mayor valor en la zona. Esta distribución puede estar influenciada por la atracción de inversionistas y compradores con mayor poder adquisitivo, así como por el desarrollo de proyectos inmobiliarios exclusivos en la región.</p>
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
                <p>Para el <strong>ano 2024</strong> se nota un importante cambio, ya que, la mayor concentración de propiedades se encuentra en el segmento <strong>E</strong> (>500 mil a <strong>1 millón</strong>) con un <strong>60.5%</strong>. Esto indica una fuerte presencia de propiedades de menor valor en el mercado inmobiliario de <strong>Tulancingo de Bravo</strong>, reflejando la posición económica de la región y la demanda por inmuebles de asequibles o de valor bajo. En segundo lugar, está el segmento <strong>D</strong> (<strong>1 millón</strong> a <strong>1.75 millones</strong>) con un <strong>15.7%</strong>, seguido por los segmentos <strong>B</strong> (<strong>2.5 millones</strong> a <strong>3.25 millones</strong>) y <strong>C</strong> (<strong>1.75 millones</strong> a <strong>2.5 millones</strong>) con <strong>7.12%</strong> y <strong>7%</strong>, respectivamente, lo que sugiere un interés sostenido en propiedades de rango medio-bajo. Por otro lado, los segmentos <strong>A</strong> (<strong>3.25 millones</strong> a <strong>4 millones</strong>) y <strong>S</strong> (<strong>4 millones</strong> a <strong>12 millones</strong>) tienen una menor participación, lo que puede estar relacionado con una menor oferta o una preferencia de los compradores por inmuebles de mayor valor en la zona. Esta distribución puede estar influenciada por la atracción de inversionistas y compradores con mayor poder adquisitivo, así como por el desarrollo de proyectos inmobiliarios exclusivos en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    function showYearDataSegmento(year) {
        // Create the iframe dynamically
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_${year}.html?year=${year}`;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Replace the content of the container
        document.getElementById('PropiedadesSegmentoContainer').innerHTML = '';
        document.getElementById('PropiedadesSegmentoContainer').appendChild(iframe);

        // Update the interpretation button to open the correct modal
        const interpretationButton = document.getElementById('interpretationButtonSegmento');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalSegmento${year}`);
    }

    // Show the 2022 graph by default when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        showYearDataSegmento('2022');
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
                                   <!-- <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal15">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal15">Interpretación</button>-->
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/mapas/propiedades.html" width="100%" height="400" frameborder="0"></iframe>
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
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/mapas/colonias.html" width="100%" height="400" frameborder="0"></iframe>
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