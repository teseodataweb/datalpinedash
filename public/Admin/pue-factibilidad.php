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
                                    <li class="breadcrumb-item active">Puebla

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
                    actuales sobre el mercado inmobiliario en Puebla, proporcionando una visión completa de las
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
                                <!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_2019.html" width="100%" height="400" frameborder="0" id="yearlyData2019" style="display: block;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_2020.html" width="100%" height="400" frameborder="0" id="yearlyData2020" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_2021.html" width="100%" height="400" frameborder="0" id="yearlyData2021" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024" style="display: none;"></iframe>-->
                            </div>
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
                        <p>Muestra el promedio del monto de créditos otorgados para viviendas nuevas y usadas en Puebla, desglosado trimestralmente.</p>

                        <p>En el eje vertical se encuentran los valores de los montos promedios de crédito en millones de pesos, mientras que el eje horizontal representa los trimestres del año (de 1T a 4T). La línea morada muestra los valores para las viviendas nuevas y la línea rosa los valores para viviendas usadas.</p>

                        <p>Este tipo de gráfico es útil para identificar cómo se comportan los valores de los créditos a lo largo del tiempo y permite comparar las diferencias entre estos dos tipos de propiedades.</p>

                        <p>Es relevante para entender las variaciones del mercado inmobiliario y cómo se ajustan los precios según el tipo de vivienda.</p>
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
                    <p>
                        Durante <strong>2019</strong>, se observa una clara tendencia a la baja en el promedio del monto de créditos para vivienda nueva, disminuyendo desde <strong>$1,423,863.89</strong> en el <strong>primer trimestre</strong> hasta <strong>$1,144,395.67</strong> en el <strong>cuarto trimestre</strong>. Esta caída puede explicarse por un ajuste en la demanda de propiedades nuevas en el mercado de <strong>Puebla</strong>, posiblemente influenciado por la desaceleración económica en el país durante ese periodo, con una caída del <strong>0.1%</strong> en el <strong>Producto Interno Bruto (PIB)</strong>. Esto fue el primer crecimiento negativo del país desde <strong>2009</strong>, lo que conllevaría la reducción de la capacidad de compra de los consumidores.
                    </p>
                    <p>
                        Por otro lado, el monto promedio de los créditos para vivienda usada muestra un ligero incremento en los primeros trimestres, pasando de <strong>$985,707.49</strong> en el <strong>primer trimestre</strong> a <strong>$1,029,745.85</strong> en el <strong>tercer trimestre</strong>, para luego descender levemente a <strong>$1,020,891.23</strong> en el <strong>cuarto trimestre</strong>. Esta variación refleja un mayor interés por parte de los compradores hacia las viviendas usadas, que suelen tener precios más accesibles en comparación con las nuevas.
                    </p>
                    <p>
                        La gráfica sugiere que, hacia finales de año, el mercado de propiedades nuevas sufrió un debilitamiento significativo en contraste con el mercado de propiedades usadas, que se mantuvo relativamente estable.
                    </p>
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
                    <p>
                        Durante <strong>2020</strong>, el promedio de valor de los créditos para vivienda nueva y usada en <strong>Puebla</strong> mostró fluctuaciones significativas debido a la incertidumbre económica generada por la pandemia de <strong>COVID-19</strong>. En el <strong>primer trimestre</strong>, el valor promedio de los créditos para viviendas nuevas fue de <strong>$1,363,906.79</strong> pesos. Luego registró una marcada baja en el <strong>segundo trimestre</strong> (<strong>$1,288,902.66</strong> pesos). Sin embargo, el valor repuntó significativamente en el <strong>tercer trimestre</strong>, alcanzando <strong>$1,424,471.29</strong> pesos, siendo este el valor más alto que alcanzó en el año. Para el <strong>último trimestre</strong> disminuyó constantemente hasta alcanzar la cifra de <strong>$1,202,932.03</strong> pesos, quedando solo un pico por encima del promedio del segundo trimestre.
                    </p>
                    <p>
                        En cuanto a las viviendas usadas, se inició el año con un valor promedio de <strong>$1,087,655.63</strong> pesos, que cayó de manera importante en el <strong>segundo trimestre</strong> a <strong>$954,405.01</strong> pesos, pero luego recuperó su valor en el <strong>tercer trimestre</strong>, llegando a <strong>$1,061,230.55</strong> pesos. Para el <strong>cuarto trimestre</strong>, el promedio continuó con una tendencia al alza, cerrando en <strong>$1,262,323.02</strong> pesos.
                    </p>
                    <p>
                        Las variaciones observadas pueden explicarse por la situación económica y sanitaria del país en <strong>2020</strong>, donde muchos compradores retrasaron sus decisiones de compra, especialmente en el <strong>segundo trimestre</strong> cuando el confinamiento y las medidas restrictivas tuvieron su mayor impacto en la actividad económica, lo cual coincide con la gráfica. El repunte hacia finales del año en el valor de los créditos para adquirir inmuebles usados coincide con una recuperación parcial de la economía y un mayor interés por adquirir viviendas tras la incertidumbre inicial del año. Sin embargo, la brusca caída al final del año del valor de los créditos de las casas nuevas se puede deber a la necesidad de los desarrolladores de ajustar precios para incentivar las ventas.
                    </p>
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
                        Durante <strong>2021</strong>, el valor promedio de los créditos para viviendas nuevas y usadas en <strong>Puebla</strong> mostró comportamientos diferenciados. En el caso de las viviendas nuevas, se observó una tendencia constante al alza a lo largo del año. El promedio comenzó en el <strong>primer trimestre</strong> con un valor de <strong>$1,363,431.08</strong> pesos, aumentando de manera continua hasta alcanzar un máximo anual de <strong>$1,469,233.17</strong> pesos en el <strong>cuarto trimestre</strong>. Este incremento sostenido refleja una creciente demanda o un posible ajuste de precios por parte de los desarrolladores ante un entorno económico más estable en comparación con <strong>2020</strong>.
                    </p>
                    <p>
                        Por otro lado, los créditos para viviendas usadas tuvieron un comportamiento más volátil. Empezaron con un promedio de <strong>$1,171,566.81</strong> pesos en el <strong>primer trimestre</strong> y registraron un pico en el <strong>segundo trimestre</strong> con <strong>$1,230,145.38</strong> pesos, seguido de una baja en el <strong>tercer trimestre</strong>, donde llegaron a <strong>$1,114,015.96</strong> pesos, el valor más bajo del año. Hacia el <strong>cuarto trimestre</strong>, el promedio se recuperó ligeramente, cerrando en <strong>$1,178,730.06</strong> pesos. La variabilidad observada podría deberse a factores como ajustes de oferta y demanda en el mercado de reventa, así como la posibilidad de fluctuaciones en las condiciones de financiamiento para inmuebles existentes.
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
                    <p>
                        Durante <strong>2022</strong>, el valor promedio de los créditos para viviendas tanto nuevas como usadas en <strong>Puebla</strong> mostró una tendencia general de crecimiento sostenido. En el caso de las viviendas nuevas, el promedio inició en <strong>$1,465,396.13</strong> pesos en el <strong>primer trimestre</strong> y mantuvo un aumento constante a lo largo del año, alcanzando su valor máximo en el <strong>cuarto trimestre</strong> con <strong>$1,695,630.51</strong> pesos. Este incremento sugiere una mayor demanda o un ajuste de precios en respuesta a factores económicos, como la inflación o cambios en las tasas de interés, que pudieron haber impulsado a los desarrolladores a ajustar los precios para compensar los mayores costos.
                    </p>
                    <p>
                        Por otro lado, el promedio de créditos para viviendas usadas también registró un crecimiento continuo, aunque con un ritmo menos abrupto, con incrementos muy similares entre trimestres. Empezó el año en <strong>$1,148,268.25</strong> pesos y cerró en <strong>$1,364,106.40</strong> pesos para el <strong>último trimestre</strong>. Esta tendencia refleja una mayor estabilidad en el mercado de viviendas de segunda mano, posiblemente impulsada por un aumento en la demanda de propiedades más accesibles.
                    </p>
                    <p>
                        Podemos decir que <strong>2022</strong> fue un año de recuperación y ajuste al alza para ambos tipos de propiedades, con una subida más brusca en los créditos para vivienda nueva, lo que podría indicar que los compradores están dispuestos a pagar más por nuevos desarrollos, ya sea por la ubicación, amenidades o incentivos adicionales ofrecidos por los desarrolladores.
                    </p>

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
                    <p>
                        En cuanto a las viviendas nuevas, el año inició con un promedio de <strong>$1,617,135.67</strong> pesos y registró su punto más alto en el <strong>segundo trimestre</strong> con <strong>$1,721,878.13</strong> pesos. Sin embargo, a partir de ahí, se observó una ligera corrección a la baja en los siguientes dos trimestres, cerrando el año con <strong>$1,709,858.12</strong> pesos. Esta leve disminución podría estar relacionada con ajustes en la oferta de nuevos desarrollos o una moderación en la demanda de vivienda nueva, lo que indica que los desarrolladores pudieron haber ajustado sus precios para mantenerse competitivos.
                    </p>
                    <p>
                        Por otro lado, el valor promedio de los créditos para viviendas usadas mostró un crecimiento constante a lo largo del año. Comenzó en <strong>$1,388,331.92</strong> pesos en el <strong>primer trimestre</strong> y aumentó trimestre tras trimestre, cerrando en <strong>$1,615,482.02</strong> pesos al finalizar el <strong>cuarto trimestre</strong>. Este comportamiento sostenido sugiere una mayor demanda por propiedades usadas, posiblemente impulsada por compradores que buscan opciones más asequibles o inmuebles con características particulares, como ubicación o mayores dimensiones que las nuevas construcciones pueden no tener. 
                    </p>
                    <p>
                        <strong>2023</strong> reflejó una tendencia al alza para las viviendas usadas, mientras que las viviendas nuevas mantuvieron un nivel elevado, pero con ajustes moderados en la segunda mitad del año, sugiriendo una búsqueda de equilibrio en el mercado inmobiliario de <strong>Puebla</strong>.
                    </p>

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
                    <p>
                        Durante el <strong>primer trimestre de 2024</strong>, los promedios de valor de los créditos para viviendas nuevas y usadas en <strong>Puebla</strong> muestran una tendencia divergente.
                    </p>
                    <p>
                        El promedio de los créditos para viviendas nuevas comenzó el año con <strong>$1,626,835.60</strong> pesos en el <strong>primer trimestre</strong> y mostró un crecimiento acelerado, alcanzando los <strong>$1,762,472.22</strong> pesos en el <strong>segundo trimestre</strong>. Lo que podría deberse a un aumento en los costos de construcción o a una mayor demanda de nuevos desarrollos. También es posible que los compradores estén prefiriendo las viviendas nuevas debido a mejoras en la infraestructura, ubicaciones más atractivas, o incentivos por parte de los desarrolladores.
                    </p>
                    <p>
                        Por otro lado, el valor de los créditos para viviendas usadas se mantuvo extremadamente estable. Comenzó en <strong>$1,680,374.92</strong> pesos en el <strong>primer trimestre</strong> y solo aumentó levemente a <strong>$1,683,127.66</strong> pesos en el <strong>segundo trimestre</strong>. Esto sugiere que el mercado de vivienda usada se encuentra en un punto de equilibrio, con la oferta y la demanda manteniéndose balanceadas. A diferencia de las viviendas nuevas, los precios en el mercado secundario no han respondido a los mismos factores, lo que podría indicar una menor presión inflacionaria o una demanda más establecida.
                    </p>
                    <p>
                        En general, el <strong>2024</strong> muestra un fuerte crecimiento en los créditos para vivienda nueva, mientras que los créditos para vivienda usada han permanecido prácticamente sin cambios. Esta tendencia refleja un mercado inmobiliario polarizado, con un mayor dinamismo en el sector de vivienda nueva y un mercado de segunda mano más conservador.
                    </p>

                    </div>
                </div>
            </div>
        </div>

        <!-- Repite el modal de interpretación para los otros años -->

        <script>
    function showYearlyData(year) {
       // Crear el iframe dinámicamente
       const iframe = document.createElement('iframe');
                iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_creditos_nuevausada_${year}.html?year=${year}`;
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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_estacionalidad.html" width="100%" height="400" frameborder="0"></iframe>
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
                    <p>
                        Muestra la evolución trimestral de la cantidad de créditos hipotecarios otorgados en Puebla desde el primer trimestre de 2022 hasta el segundo trimestre de 2024. Cada barra representa un trimestre, con diferentes colores para distinguir cada periodo de tiempo. El eje vertical muestra la cantidad total de créditos, y el eje horizontal indica los trimestres específicos (<strong>1T</strong>, <strong>2T</strong>, <strong>3T</strong> y <strong>4T</strong>) para cada año.
                    </p>
                    <p>
                        Esta gráfica es útil para identificar la estacionalidad del mercado inmobiliario, es decir, cómo varía la cantidad de créditos otorgados a lo largo del año. Permite detectar patrones de aumento o disminución en la demanda de financiamiento, lo que facilita la toma de decisiones estratégicas.
                    </p>

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
                    <p>
                        Durante <strong>2022</strong>, el <strong>primer trimestre</strong> fue el de mayor cantidad de créditos otorgados (<strong>3,202</strong>), pero la cifra disminuyó gradualmente en cada trimestre, cerrando el año con <strong>2,797</strong> créditos en el <strong>cuarto trimestre</strong>. Esto podría reflejar un enfriamiento del mercado a medida que avanzó el año, posiblemente por factores económicos como la inflación o cambios en las tasas de interés, que afectaron la capacidad de compra de los usuarios.
                    </p>
                    <p>
                        En el <strong>primer trimestre de 2023</strong>, se observó una caída pronunciada con solo <strong>2,441</strong> créditos, el nivel más bajo de todos los periodos. Sin embargo, a partir del <strong>segundo trimestre</strong>, hubo una tendencia al alza, alcanzando <strong>3,038</strong> créditos en el <strong>cuarto trimestre</strong>. Esto sugiere un periodo de recuperación del mercado hacia finales del año, posiblemente impulsado por un ajuste de condiciones crediticias o una mayor confianza de los compradores.
                    </p>
                    <p>
                        En los primeros dos trimestres de <strong>2024</strong>, el volumen de créditos muestra una fluctuación considerable, con <strong>2,573</strong> créditos en el <strong>primer trimestre</strong> y un aumento a <strong>3,010</strong> en el <strong>segundo trimestre</strong>. Esto podría indicar un inicio de año bajo que se recuperó para el segundo trimestre, posiblemente reflejando un entorno de mayor estabilidad económica o políticas favorables para el sector inmobiliario.
                    </p>

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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_creditos_edad.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                    La gráfica muestra la distribución de los créditos otorgados en la ciudad de <strong>Puebla</strong> según tres grupos de edad: personas de <strong>30 a 59 años</strong>, menores de <strong>29</strong> y mayores de <strong>60 años</strong>. 
                </p>
                <p>
                    Esta información es útil para identificar el segmento de población que tiene mayor participación en el acceso a créditos, lo que permite enfocar estrategias de financiamiento y políticas de desarrollo hacia los grupos etarios que predominan en el mercado.
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
                Los datos reflejan que el <strong>71.6%</strong> de los créditos fueron otorgados a personas de entre <strong>30 y 59 años</strong>, lo cual es lógico dado que este rango de edad tiende a tener una estabilidad laboral y económica que facilita el acceso a financiamientos.
            </p>
            <p>
                Por otro lado, un <strong>21.4%</strong> de los créditos se destinó a personas menores de <strong>29 años</strong>, lo que podría deberse a un aumento de la demanda de vivienda por parte de las nuevas generaciones que buscan independencia económica y habitacional a edades relativamente tempranas.
            </p>
            <p>
                Finalmente, solo un <strong>7%</strong> corresponde a personas mayores de <strong>60 años</strong>, lo que puede indicar que este grupo suele adquirir vivienda en etapas anteriores de su vida o que encuentran menos atractivo endeudarse a largo plazo por la propia etapa vital en la que se encuentran.
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_precio_promedio_segmento.html" width="100%" height="400" frameborder="0"></iframe>
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
                <p>La gráfica muestra el promedio de precios por segmento de inmuebles en Puebla. Cada segmento representa un rango de precios específico, desde el segmento E (menos de 500 mil a 1 millón de pesos) hasta el segmento ELITE (mayor a 22 millones). Este gráfico permite identificar cómo varían los precios promedio entre los diferentes segmentos de propiedades en el mercado inmobiliario de la ciudad.</p>
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
                Podemos observar que los segmentos con menor valor incluyen al grupo <strong>E</strong>, <strong>D</strong> y <strong>C</strong>, que tienen valores promedio más bajos (<strong>$680 mil</strong>, <strong>$1.4 millones</strong> y <strong>$2.1 millones</strong> respectivamente). Los valores incrementan gradualmente, cada vez en mayor monto. Esto mismo se observa para los segmentos <strong>B</strong> y <strong>A</strong>. Es en los segmentos superiores (<strong>S</strong>, <strong>L</strong> y <strong>ELITE</strong>) que observamos aumentos muy notables, con promedios de <strong>$6.3 millones</strong>, <strong>$15 millones</strong> y <strong>$37 millones</strong> respectivamente, estos promedios más que duplican a su segmento anterior.
            </p>
            <p>
                Esta tendencia sugiere que en el mercado inmobiliario existe una fuerte segmentación de precios, lo cual se explica por factores como la exclusividad y los servicios adicionales que los inmuebles más caros ofrecen. Los valores más bajos representan viviendas de menor tamaño o ubicadas en áreas menos desarrolladas, mientras que los precios de los segmentos altos están influidos por la demanda de propiedades de lujo, una mayor plusvalía y ubicación estratégica en zonas con mayor calidad de vida y acceso a infraestructura.
            </p>
            <p>
                La cada vez más amplia diferencia entre los segmentos muestra la marcada brecha económica dentro de la demanda de propiedades, especialmente en el grupo <strong>Élite</strong> que es considerablemente más caro que los demás segmentos, resaltando la importancia de estudiar este mercado por separado.
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
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_precio_oferta_mediana.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica muestra la mediana del precio de oferta de inmuebles en Puebla durante el año 2024, con un desglose mes a mes desde febrero hasta agosto. Este gráfico permite visualizar las fluctuaciones en los precios de los inmuebles ofertados en el mercado, lo que proporciona una indicación de las tendencias del mercado inmobiliario en la ciudad.</p>
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
            <p>
                De <strong>febrero a marzo</strong> se observa un incremento que podría explicarse por una alta demanda impulsada por una temporada de compra alta durante el <strong>primer trimestre</strong>, debido a compras que buscan aprovechar las condiciones de financiamiento accesibles a principios del año, antes de posibles ajustes en las tasas de interés o cambios en la oferta.
            </p>
            <p>
                Sin embargo, a partir de marzo y hasta agosto, la mediana de los precios sufre una caída sostenida. Esta tendencia podría estar influenciada por un exceso de oferta que lleva a los vendedores a ajustar sus precios a la baja. Esto es común en periodos donde se anticipan cambios en las políticas crediticias o incertidumbre en el ámbito macroeconómico.
            </p>
            <p>
                El punto más bajo se alcanza en <strong>agosto</strong>, notamos así, que los precios continúan bajando hasta el final del verano. Esto podría deberse a una combinación de factores estacionales, como el aumento de oferta de propiedades que tradicionalmente se produce a mitad de año, y una desaceleración en la actividad económica.
            </p>
            <p>
                Sin embargo, al final, la gráfica muestra un incremento abrupto en la mediana de los precios. Esto sugiere escenarios como una reducción considerable del inventario disponible, lo que encarecería las propiedades restantes, o un resurgimiento de la demanda, motivado por factores como la estabilización económica, la mejora de las expectativas de crecimiento o incluso por incentivos fiscales y promociones por parte de los desarrolladores. Además, la percepción de que los precios ya tocaron fondo en agosto podría haber motivado a los compradores a actuar antes de que se produzcan nuevas alzas, creando un efecto de recuperación rápida.
            </p>

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
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_scatt_precio_oferta.html" width="100%" height="400" frameborder="0"></iframe>
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
                        <p>Se muestra el histórico de precios de oferta de inmuebles en Puebla durante el año 2024. El gráfico de líneas refleja cómo ha variado el precio promedio de los inmuebles listados en el mercado mes a mes, desde marzo hasta agosto de 2024. Esta visualización es útil para identificar las tendencias de precios a lo largo del tiempo, destacando las fluctuaciones y posibles cambios estacionales en el mercado inmobiliario.</p>
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
                        El gráfico indica un crecimiento en los precios de oferta desde <strong>febrero de 2024</strong> (más de <strong>3.4 millones de pesos</strong>) hasta <strong>marzo de 2024</strong> (más de <strong>3.8 millones de pesos</strong>), mostrando una primera tendencia positiva. Sin embargo, en <strong>abril</strong> se observa una muy ligera caída, que podría ser explicada por la estacionalidad del mercado y el fin de la temporada alta de compras. La fluctuación observada a mitad de año puede ser una respuesta a un ajuste del mercado frente a la sobreoferta o cambios en la demanda. A partir de <strong>agosto</strong>, los precios muestran una recuperación constante, alcanzando su nivel máximo en <strong>septiembre de 2024</strong> con un precio de <strong>4.2 millones de pesos</strong>. Esto puede ser consecuencia de una estabilización del mercado, lo cual podría estar asociado con factores económicos que han incrementado la demanda en la región, como nuevas políticas de financiamiento o crecimiento en la población de la ciudad.
                    </p>
                    <p>
                        Este comportamiento destaca la importancia de monitorear las tendencias de precios a lo largo del año para prever caídas y aprovechar los picos de crecimiento, especialmente en un contexto como el de <strong>Puebla</strong>, que está en expansión económica.
                    </p>

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
                <!--<iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_monto_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_monto_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_monto_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2024" style="display: none;"></iframe>-->
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
                <p>Se muestra la distribución de créditos por monto en Puebla. Cada barra representa un rango de monto de los créditos y  su altura, la cantidad de créditos otorgados dentro de ese rango. Se toman en cuenta cinco rangos: 0 a 1 millón de pesos, 1 a 2 millones, 2 a 3 millones, 3 a 4 millones y 4 a 20 millones de pesos. La gráfica es útil para visualizar la preferencia de los compradores y el acceso a financiamiento, identificando en qué rango se concentra la mayor cantidad de créditos. Esta información puede ayudar a entender el comportamiento del mercado inmobiliario y a detectar qué tipos de propiedades son más accesibles o demandadas en términos de financiamiento.</p>
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
            <p>
                La distribución de créditos en <strong>2022</strong> muestra una clara concentración en el segmento más económico, con la mayoría de los créditos otorgados para montos de <strong>0 a 1 millón de pesos</strong>, acumulando un total de <strong>7,879 créditos</strong>. Esta tendencia refleja una alta demanda de propiedades más económicamente accesibles, lo que sugiere que una gran parte de la población en <strong>Puebla</strong> tiene una capacidad de compra limitada y busca opciones más asequibles dentro del mercado inmobiliario.
            </p>
            <p>
                El siguiente rango de valor, de <strong>1 a 2 millones de pesos</strong>, es el segundo más representado con <strong>2,514 créditos</strong>, lo cual indica un interés por propiedades de nivel medio-bajo. Esto podría estar asociado a compradores que desean mejorar su situación habitacional sin entrar en los segmentos más elevados de precios, pero aún así buscan mayores comodidades o mejor ubicación en comparación con el rango más bajo. Es notable la drástica disminución que hay del primer segmento a este.
            </p>
            <p>
                A medida que los valores de los créditos aumentan, la cantidad de transacciones disminuye significativamente, con solo <strong>844 créditos</strong> para propiedades de <strong>2 a 3 millones de pesos</strong>, <strong>337</strong> para el rango de <strong>3 a 4 millones</strong>. Sin embargo, vemos un pequeño repunte de <strong>589</strong> en el rango más alto de <strong>4 a 20 millones de pesos</strong>. Esto sugiere que las propiedades de mayor valor, aunque existen, tienen una menor demanda, lo cual es característico de mercados con una alta concentración de ingresos en los niveles medio y bajo. No obstante, existe un pequeño nicho para compradores de alto poder adquisitivo que buscan el lujo o inversiones a largo plazo.
            </p>
            <p>
                La estructura de la distribución de créditos refleja un mercado orientado principalmente hacia la vivienda económica y accesible, con pocos compradores capaces de adquirir propiedades de alto valor, lo que podría ser un indicativo de la estructura socioeconómica de la región y la capacidad limitada de financiamiento para inmuebles de mayor precio.
            </p>

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
            <p>
                En <strong>2023</strong>, la distribución de créditos en <strong>Puebla</strong> continuó mostrando una concentración significativa en los montos más bajos, con la mayoría de los créditos otorgados en el rango de <strong>0 a 1 millón de pesos</strong> (<strong>6,481 créditos</strong>). Sin embargo, este número representa una disminución respecto al año anterior (cuando se otorgaron <strong>7,879 créditos</strong>), lo que podría indicar una ligera reducción en la demanda de viviendas económicas o un ajuste en las políticas de financiamiento.
            </p>
            <p>
                El siguiente rango, de <strong>1 a 2 millones de pesos</strong>, se mantiene como el segundo más popular con <strong>2,488 créditos</strong>, mostrando estabilidad al compararlo con 2022, ya que observamos una muy leve reducción. Esto sugiere que este segmento sigue siendo atractivo para compradores que buscan opciones dentro del rango medio-bajo, posiblemente aquellos que buscan mejorar su situación habitacional sin dar un salto significativo en el valor de su propiedad.
            </p>
            <p>
                En cuanto a los rangos de <strong>2 a 3 millones</strong> y <strong>3 a 4 millones de pesos</strong>, los números son notablemente menores, con <strong>879</strong> y <strong>361 créditos</strong>, respectivamente. Aunque hay un ligero aumento en ambos al compararlos con el año anterior, la baja cantidad de créditos refleja que estos valores siguen siendo menos accesibles para la mayoría de los compradores. 
            </p>
            <p>
                Por último, en el rango de <strong>4 a 20 millones de pesos</strong>, se observa un incremento con <strong>628 créditos</strong> (en comparación con los <strong>589</strong> del año anterior), lo que indica un interés creciente en el nicho de propiedades de alto valor, posiblemente impulsado por compradores con mayor capacidad adquisitiva o inversionistas que buscan inmuebles de lujo.
            </p>
            <p>
                El <strong>2023</strong> muestra un mercado dominado por la vivienda económica, aunque con un ligero desplazamiento hacia opciones de mayor valor, lo que podría sugerir un cambio gradual en el perfil de los compradores o ajustes en la oferta para adaptarse a nuevas condiciones del mercado. También observamos, al igual que en el año pasado, esas grandes reducciones en las cantidades de créditos, que se van haciendo más pequeñas en comparación, conforme avanzamos de segmento, hasta el pequeño repunte del último de estos. Notamos con esto lo bien establecido que está este nicho de alto valor en el mercado de Puebla.
            </p>

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
            <p>
                En <strong>2024</strong>, la distribución de créditos por monto en <strong>Puebla</strong> muestra una reducción notable en la cantidad total de créditos otorgados en todos los segmentos al hacer la comparación con los años anteriores, particularmente en los segmentos de menor valor. El segmento de <strong>0 a 1 millón de pesos</strong> sigue siendo el predominante con <strong>3,869 créditos</strong>, pero esta cifra ha disminuido significativamente respecto a los <strong>6,481 créditos</strong> registrados en 2023. Este descenso podría estar indicando una menor accesibilidad al financiamiento para viviendas económicas, ya sea por restricciones en los créditos hipotecarios o por un incremento en los precios de las propiedades, lo cual ha limitado las opciones para los compradores con menor capacidad de pago.
            </p>
            <p>
                El siguiente rango, de <strong>1 a 2 millones de pesos</strong>, cuenta con <strong>1,463 créditos</strong>, reflejando también una disminución respecto al año anterior. Esto sugiere que la demanda para propiedades de nivel medio-bajo también está disminuyendo, posiblemente debido a ajustes en el poder adquisitivo de la población y la alta inflación que pudo impactar los costos de los inmuebles y el financiamiento.
            </p>
            <p>
                Los créditos para propiedades de mayor valor también muestran reducciones significativas: el rango de <strong>2 a 3 millones</strong> registra solo <strong>582 créditos</strong>, mientras que el rango de <strong>3 a 4 millones</strong> alcanza <strong>244 créditos</strong>, y el de <strong>4 a 20 millones</strong> llega a <strong>376 créditos</strong>. El segmento de más alto valor (4 a 20 millones) es el único que no ha tenido un descenso tan marcado, lo que podría deberse a que sigue siendo un nicho con menos fluctuaciones en la demanda, debido a que se sostiene por compradores con mayor capacidad económica o por inversionistas.
            </p>
            <p>
                El <strong>2024</strong> refleja un enfriamiento generalizado del mercado hipotecario en <strong>Puebla</strong>, con una menor actividad en todos los rangos de precios. La notable disminución de los créditos en los segmentos económicos podría indicar un endurecimiento de las condiciones de crédito o una baja en la capacidad de compra, lo que sugiere que el acceso a la vivienda se está volviendo más difícil para la mayoría de los compradores en esta región.
            </p>

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
        iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_creditos_monto_${year}.html?year=${year}`;
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
                            <option value="2023" selected>2023</option>
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
<!--  <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_dist_propiedades_segmento_2022.html" width="100%" height="400" frameborder="0" id="yearDataSegmento2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                    <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0" id="yearDataSegmento2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                    <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_dist_propiedades_segmento_2024.html" width="100%" height="400" frameborder="0" id="yearDataSegmento2024" style="display: none; min-height: 430px; border: 0;"></iframe>-->
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
                <p>El gráfico presentado muestra la distribución de propiedades en Puebla, segmentada por diferentes rangos de precio. Cada segmento está representado con un color distinto y se identifica con las categorías S, A, B, D, C, A y E.</p>

                <p>La gráfica permite visualizar fácilmente las proporciones de cada segmento dentro del total, lo que la hace útil para identificar cómo se reparte la oferta inmobiliaria en la región. Esto permite identificar cuáles tipos de propiedades predominan y detectar posibles áreas de oportunidad para ajustarse a la demanda del mercado.</p>

                <p>Asimismo, esta visualización coadyuva a la toma de decisiones informadas basadas en la disponibilidad y la competencia en cada rango de precios.</p>
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
                <p>La distribución de propiedades por segmento en <strong>2023</strong> muestra que el mercado inmobiliario en esta región se concentra principalmente en los segmentos de valor medio alto y muy alto, B y S con <strong>23%</strong> y <strong>23.5%</strong> respectivamente. La preeminencia de estos segmentos podría estar impulsada por un auge de desarrollos en zonas exclusivas o por un perfil de comprador con alto poder adquisitivo y sus proporciones extremadamente similares se puede deber a estructura socioeconómica y la distribución de la población en Puebla.</p>

                <p>Puebla tiene una edad mediana de <strong>28 años</strong>, lo que indica una población joven con un perfil laboral y familiar en crecimiento, quienes suele demandar inmuebles con características que brinden comodidad y una mayor calidad y valor a medida que crecen profesionalmente o buscan mejorar su nivel de vida (segmento B). La concentración de ingresos y la desigualdad también podría suponer a compradores de mayor poder adquisitivo o personas que buscan propiedades de alto valor como una inversión a largo plazo (segmento S).</p>

                <p>Por el contrario, el segmento E, que representa las propiedades más accesibles (menores a <strong>1 millón</strong> de pesos), tiene una participación mínima. Esto indica que hay poca oferta de viviendas asequibles, lo que podría ser un área de oportunidad para desarrolladores enfocados en vivienda de interés social o accesible.</p>

                <p>El segmento A, que representa el <strong>14.7%</strong> del mercado, se enfoca en propiedades de pesos, ubicadas en el rango alto del mercado. Esta participación indica que hay una oferta moderada de propiedades para compradores con un nivel adquisitivo considerable, que buscan calidad y buena ubicación sin llegar a los precios más elevados. La menor participación de este segmento, en comparación con S y B, puede deberse a que el perfil de compradores de esta categoría es más específico y reducido.</p>

                <p>El segmento D y C también tienen una representación significativa, sumando entre ambos un <strong>36.1%</strong>, lo que sugiere que hay un equilibrio en la oferta de viviendas de rango medio y medio bajo. Esto refleja un mercado diverso, con opciones para distintos perfiles de compradores, pero dominado por las propiedades de mayor valor.</p>

                <p>La distribución del mercado en <strong>2023</strong> se inclina hacia propiedades de alto valor, mientras que la oferta de viviendas más accesibles es limitada, lo que podría afectar la capacidad de adquisición de un público más amplio y requerir ajustes en la oferta para atender mejor las necesidades de otros segmentos de la población.</p>
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
                <p>En <strong>2024</strong>, la distribución de propiedades por segmento en Puebla muestra un cambio significativo respecto al año anterior. El segmento E que abarca las propiedades más accesibles (menores a <strong>1 millón</strong> de pesos) es ahora el de mayor participación con un <strong>25%</strong>. Esto sugiere un aumento en la oferta de viviendas económicas, lo que podría responder a políticas de desarrollo orientadas a satisfacer la demanda de viviendas asequibles o a un ajuste de precios por parte de los desarrolladores para hacer frente a una desaceleración económica.</p>

                <p>Por otro lado, el segmento S, que en años anteriores había dominado, ahora tiene un <strong>21.5%</strong>, manteniéndose como uno de los segmentos principales, pero reflejando una ligera disminución. Esto puede indicar que los desarrolladores están diversificando la oferta hacia viviendas más accesibles, dada la reducción en el poder adquisitivo de algunos compradores o la preferencia por opciones más económicas ante un entorno económico incierto.</p>

                <p>Los segmentos D y C (<strong>14%</strong> y <strong>13.8%</strong>, respectivamente) presentan una representación equilibrada, lo que sugiere un mercado bien distribuido en el rango medio-bajo, con opciones variadas para compradores que buscan propiedades con una buena relación calidad-precio.</p>

                <p>En contraste, los segmentos de mayor valor (A y B) tienen una participación menor (<strong>10.3%</strong> y <strong>11.2%</strong>), reflejando nuevamente un ajuste hacia propiedades de menor costo. Finalmente, el segmento L (<strong>4.21%</strong>) sigue teniendo la participación más baja, lo que indica que las propiedades de lujo aún representan un nicho pequeño en el mercado inmobiliario local.</p>

                <p>En conjunto, la distribución del mercado en <strong>2024</strong> muestra una transición hacia una mayor oferta de vivienda asequible, respondiendo a una posible necesidad de atraer a compradores con menor capacidad económica, lo cual contrasta con la tendencia de años anteriores hacia propiedades de alto valor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script for controlling the display of graphs and modals -->
<script>
    function showYearDataSegmento(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Puebla/assets/graficas/g_pie_dist_propiedades_segmento_${year}.html?year=${year}`;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('PropiedadesSegmentoContainer').innerHTML = '';
        document.getElementById('PropiedadesSegmentoContainer').appendChild(iframe);

        // Update the interpretation button to point to the correct modal
        const interpretationButton = document.getElementById('interpretationButtonSegmento');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalSegmento${year}`);
    }
     // Mostrar la gráfica de 2022 por defecto al cargar la página
     document.addEventListener('DOMContentLoaded', function() {
        showYearDataSegmento('2023');
    });
</script>

        
    </div>
</div>


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
                                   <!-- <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal1555">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal1555">Interpretación</button>
                                    -->
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/mapas/propiedades.html" width="100%" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Description 2023 -->
        <div class="modal fade" id="descriptionModal1555" tabindex="-1" aria-labelledby="descriptionModalLabel15" aria-hidden="true">
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
        <div class="modal fade" id="interpretationModal1555" tabindex="-1" aria-labelledby="interpretationModalLabel15" aria-hidden="true">
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
                                <iframe src="/datalpine/resources/Ciudades/Puebla/assets/mapas/colonias.html" width="100%" height="400" frameborder="0"></iframe>
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