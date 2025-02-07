<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Puebla | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- leaflet Css -->
    <link href="assets/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

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
                            <!--<h4 class="mb-sm-0 font-size-18">Puebla</h4>-->
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
                <!-- 5. Demografía y Tendencias de Mercado -->
                <style>
                    /* Estilos CSS para el título */
                    .titulo {
                        text-align: center;
                        /* Centrar el texto */
                        color: #333;
                        /* Color llamativo (en este caso, naranja) */
                        font-size: 24px;
                        /* Tamaño del texto */
                        font-weight: bold;
                        /* Negrita */
                        font-family: Arial, sans-serif;
                        /* Fuente del texto */
                    }
                </style>
                <div class="titulo">
                    <h1>Demografía y Tendencias de Mercado</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">En este informe, exploramos el proceso de
                    investigación de mercado, que incluye la recopilación, el análisis y la
                    interpretación de datos, evaluar la competencia y encontrar oportunidades de crecimiento.
                </p>

                <!--1. Demográfico -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1. Demográfico<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>                    
                    <!--1.2 Distribución de la población por edad y género Estado -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.1 Distribución de la población de Puebla por género y rango de edad</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_piramid_poblacion_edad_gen_puebla.html"
                            width="800" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2', 'interpretación2',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación2', 'description2',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description2" style="display: none;">
                            <p class="text">
                                Distribución de la estructura demográfica de la población de la Zona
                                Metropolitana de Puebla por grupos de edad y género, se tiene un
                                registro de <strong>314,331 habitantes</strong> de los cuales los menores de <strong>29</strong> años
                                representan <strong>28.0%</strong>, personas de <strong>30 a 60 años</strong>
                                con <strong>32.8%</strong>, y mayores de 64 años con <strong>4.3%</strong>.
                                </p>
                            </div>
                            <!-- Interpretación -->
                            <div class="interpretation" id="interpretación2" style="display: none;">
                                <p class="text">
                                    Distribución de la estructura demográfica de la población de la <strong>Zona
                                        Metropolitana de Puebla</strong> por grupos de edad y género, se tiene un
                                        registro de <strong>314,331 habitantes</strong> de los cuales los menores de 29 años
                                        representan <strong>28.0%</strong>, personas de <strong>30 a 60 años</strong>
                                        con <strong>32.8%</strong>, y mayores de 64 años con <strong>4.3%</strong>.
                                </p>
                            </div>                            
                        </div>
                        <!--1.3 Distribución de créditos por grupos de edad-->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>1.2 Distribución de créditos por grupos de edad</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <iframe src="/datalpine/resources/jupyter/graficas/g_pie_dist_cred_edad_puebla.html"
                                width="800" height="400" frameborder="0" id="contenido01"
                                style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                            <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3', 'interpretación3',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación3', 'description3',this)">Interpretación</button>
                        </div>
                                <!-- Descripción -->
                            <div class="description" id="description3" style="display: none;">
                                <p class="text">
                                    Distribución de créditos por grupos de edad. Identifica cómo se
                                    distribuyen los préstamos en función de un grupo demográfico que revela
                                    que grupos etarios están accediendo más a los préstamos y cuales pueden
                                    tener una menor participación en este aspecto.
                                </p>
                                <ul class="text">
                                    <li>Si una barra es alta, significa que la cantidad de préstamos
                                    otorgados a personas de esa edad es significativa.</li>
                                    <li>Si una barra es menor, indica que existen menos créditos otorgados en ese rango de edad.</li>
                                </ul>
                            </div>
                            <!-- Interpretación -->
                            <div class="interpretation" id="interpretación3" style="display: none;">
                                <p class="text">
                                    La gráfica de pastel revela que en Pachuca de Soto el <strong>76.6%</strong> de los
                                    titulares de créditos tienen entre <strong>30 y 59 años</strong>, destacando la actividad
                                    crediticia de este grupo. Asimismo, el <strong>14.3%</strong> de personas menores de <strong>29</strong>
                                    años muestra cierta inclusión financiera en este segmento más joven, mientras que el <strong>9.1%</strong> de personas mayores de <strong>60
                                    años</strong> con créditos sugiere su participación en actividades financieras. 
                                </p>
                            </div>                            
                        </div>
                    </div>
                <!--2. Precio de oferta-->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2. Precio de oferta<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 2.1 Precio de oferta -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.1 Precio de oferta</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_promedio_precio_oferta_puebla_2023.html" width="1000"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description4', 'interpretación4',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación4', 'description4',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description4" style="display: none;">
                            <p class="text">
                                Precios de oferta para viviendas desde octubre de 2022 hasta septiembre de
                                2023. Explora la tendencia de los precios de las casas en este periodo de
                                tiempo para la toma de decisiones inteligentes.
                            </p>
                            <ul class="text">
                                <li>Si se observa una tendencia ascendente, significa que los precios están
                                aumentando, lo cual puede indicar una demanda alta en el mercado de viviendas.</li>
                                <li>Si muestra una tendencia a la baja, indica que los precios están
                                disminuyendo. Esto podría ser una señal para los vendedores de que
                                podrían obtener un precio mejor si esperan un poco más.</li>
                                <li>Si se mantiene relativamente plana sugiere que los precios están
                                bastante firmes, señal de un mercado inmobiliario estable y predecible. </li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación4" style="display: none;">
                            <p class="text">
                                En los últimos doce meses, el mercado inmobiliario en Pachuca ha
                                    experimentado fluctuaciones en los precios de las propiedades. A pesar de
                                    ciertas variaciones mensuales, se observa un crecimiento general del valor
                                    promedio. Desde <strong>Octubre de 2022</strong> hasta Septiembre de 2023, ha habido un
                                    aumento acumulado del <strong>6.8%</strong> en el precio promedio de las propiedades. Este
                                    incremento se traduce en un valor promedio de <strong>$227,650</strong>, indicando un cambio
                                    significativo en la tendencia alcista de los precios a partir de <strong>Marzo de 2023</strong>.
                            </p>
                        </div>                       
                    </div>
                    <!-- 2.2 Mediana del precio de oferta  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.2 Mediana del precio de oferta </li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_mediana_precio_oferta_puebla_2023.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description5', 'interpretación5',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación5', 'description5',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description5" style="display: none;">
                            <p class="text">
                                Representación de la mediana de precios en el mercado durante el período de
                                2022-2023. Observa una vista general en la tendencia de precios medianos en
                                el mercado de viviendas durante el periodo considerado.
                            </p>
                            <ul class="text">
                                <li>Si la mediana es alta, esto sugiere que, las casas se vendieron a
                                precios relativamente altos en ese periodo, esto indica un mercado
                                inmobiliario robusto o alta demanda de propiedades.</li>
                                <li>Si la mediana es baja, implica que los precios promedio fueron más
                                asequibles. Esto podría señalar un mercado más accesible para compradores.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation"id="interpretación5" style="display: none;">
                            <p class="text">
                                La gráfica muestra cómo han variado los precios medios de las viviendas de
                                <strong>octubre de 2022</strong> a <strong>septiembre de 2023</strong>.
                            </p>
                            <p class="text">
                                Se observa que los precios fueron subiendo de forma constante hasta <strong>junio de
                                2023</strong>, cuando alcanzaron su punto más alto. Esto nos muestra un mercado muy activo y una gran demanda de propiedades. 
                            </p>
                            <p class="text">
                                A partir de julio, los precios empezaron a bajar ligeramente en <strong>agosto y
                                    septiembre</strong>. Aunque aún son altos en comparación con el inicio del período,
                                    esta bajada nos indica una estabilización en el mercado y así mismo una
                                    disminución en la demanda.
                            </p>                            
                        </div>                       
                    </div>
                    <!-- 2.3 Porcentaje de vivienda ofertadas por antigüedad -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.3 Porcentaje de vivienda ofertadas por antigüedad</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <p style="text-align: center;">
                            <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/g_bar_porcentaje_vivienda_ofertadas_antigüedad_puebla.html">
                            </iframe>
                        </p>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description6', 'interpretación6',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación6', 'description6',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description6" style="display: none;">
                            <p class="text">
                                Proporción de las viviendas ofertadas por años de antigüedad de 2022-2023.
                                Visualiza el panorama y la dinámica de la concentración en función de las
                                propiedades construidas en un rango especifico de años.
                            </p>
                            <ul class="text">
                                <li>Si se tiene una gran concentración de casas construidas en un rango de
                                años específico, podría indicar una alza en construcción u oferta en ese periodo de tiempo.</li>
                                <li>Si la distribución tiene tendencia baja, podría sugerir que las casas de
                                diferentes edades están disponibles en cantidades menores. Esto puede
                                ser relevante para conocer la oferta específica de la vivienda.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación6" style="display: none;">
                            <p class="text">
                                La gráfica muestra la proporción de viviendas ofertadas según su antigüedad durante los años <strong>2022 y 2023</strong>.
                            </p>
                            <ul class="text">    
                                <li>La mayoría de las viviendas ofertadas, el <strong>85%</strong>, tienen entre <strong>0 y 5 años</strong>
                                de antigüedad. Esto nos da una alta concentración de propiedades nuevas
                                en el mercado durante este período que muestra un aumento en la oferta de viviendas recientes. </li>
                                <li>Por otro lado, hay una proporción menor de viviendas con antigüedad
                                entre <strong>6 y 15</strong> años <strong>(11%)</strong>, y una presencia aún menor de viviendas con más
                                antigüedad señalando una disponibilidad limitada de viviendas de edades intermedias o antiguas en el mercado.</li>                        
                            </ul>
                        </div>                        
                    </div>
                </div>
                <!--3. Segmentación de mercado -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title" style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                3. Segmentación de mercado<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 3.1 Distribución de propiedades por segmento -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>3.1 Distribución de propiedades por segmento</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                    value="2022">-->
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                    value="2023">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido24')"
                                    value="2024">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <!--<iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/.html"
                                    id="contenido1"></iframe>-->
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_dist_propiedades_segmento_puebla_2023.html"
                                    id="contenido2" ></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_dist_propiedades_segmento_puebla_2024.html"
                                    id="contenido24" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description7', 'interpretación7',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación7', 'description7',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description7" style="display: none;">
                            <p class="text">
                                Concentración y distribución de propiedades por segmento de mercado, durante 2022- 2023.
                            </p>
                            <p class="text">
                                Si las etiquetas están agrupadas en una zona específica esto puede ser indicativo de un mercado inmobiliario particularmente activo o demandado en ese lugar.
                            </p>
                            <p class="text">
                                Si las etiquetas están más uniformes esto puede indicar un mercado más diversificado o una demanda más equitativa en distintos tipos de propiedades.
                            </p>                            
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación7" style="display: none;">
                            <p class="text">
                                    Podemos observar concentraciones en 2022 y 2023 del <strong>28% y 29.1%</strong> respectivamente en casas del segmento S con un valor
                                    promedio del  <strong>$6.681,071</strong>, seguidas de viviendas del segmento C con 
                                    <strong>26.9%</strong> y  <strong>25.1%</strong> de forma respectiva con un precio medio de  $1,916,723 y
                                    finalmente del segmento D con  <strong>23%</strong> y  <strong>22.9%</strong> en el orden dado con un valor medio de  <strong>$1,322,676</strong>.
                            </p>
                            <ul class="text">                            
                            </ul>
                        </div>                        
                    </div>
                    <!-- 3.2 Promedio de precio por segmento  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>3.2 Promedio de precio por segmento</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_mediana_precio_oferta_puebla_2023.html" width="800"
                            height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description8', 'interpretación8',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación8', 'description8',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description8" style="display: none;">
                            <p class="text">
                                Clasificación de mercados por segmento e índice de precio asociados a cada uno de ellos.
                            </p>
                            <ul class="text">
                                <li>Esta representación es útil para indicar qué tipos de propiedades están más valoradas y cuáles son más accesibles para los compradores.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación8" style="display: none;">
                            <p class="text">
                                La gráfica presenta los precios promedio por segmento en el mercado de Pachuca.
                            </p>
                            <p class="text"> Se observa que: </p>                        
                            <ul class="text">    
                                <li>El <strong>segmento S</strong> tiene el precio promedio más alto, con $6,590,148.53. </li>
                                <li>Le sigue el <strong>segmento A</strong>, con un precio promedio de $3,384,341.67
                                mientras que el segmento B tiene un precio promedio de $2,604,431.68. </li>
                                <li>En el <strong>segmento C</strong>, el precio promedio es de
                                    <strong>$1,909,157.39</strong>, y en el segmento D, es de <strong>$1,304,533.43</strong>. </li>
                                <li>Finalmente, el <strong>segmento E</strong> tiene el precio promedio más bajo,
                                con <strong>$634,980.59</strong>. </li>                        
                            </ul>
                            <p class="text">
                                Lo anterior permite entender la distribución de precios en el mercado
                                inmobiliario local y puede ayudar a los asesores inmobiliarios a guiar a sus
                                clientes en la búsqueda de propiedades que se ajusten a sus presupuestos y
                                necesidades específicas.
                            </p>
                        </div>                       
                    </div>
                    <!-- 3.3 Tendencias de precios por segmento -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>3.3 Tendencias de precios por segmento</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->                         
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_tendencia_precio_X_segmento_PUEB.html" width="1000"
                            height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;">
                        </iframe>                        
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description9', 'interpretación9',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación9', 'description9',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description9" style="display: none;">
                            <p class="text">
                                Variación y cambio precios que se han presentado en cada trimestre entre el 2022 y 2023, correspondientes a las diferentes clasificaciones y/o segmentos de mercado.
                            </p>
                            <ul class="text">
                                <li>Si la variación sube, indica un aumento en los precios de las viviendas,
                                lo que puede sugerir que el mercado inmobiliario está en alza durante el periodo de estudio.</li>
                                <li>Si la variación baja, significa que los precios de las viviendas han
                                disminuido, lo que podría indicar un mercado más asequible en el período de estudio.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación9" style="display: none;">
                            <p class="text">
                                La gráfica representa la variación y cambio de precios que se han presentado
                                en cada trimestre entre 2022 y 2023, correspondientes a los diferentes segmentos de mercado.
                            </p>
                            <p class="text">
                                El <strong>Segmento S</strong> experimentó la mayor variación positiva, con un aumento del
                                    <strong>9.30%</strong>, un incremento significativo en los precios de las viviendas
                                    en este segmento durante el período de estudio, indicando un mercado inmobiliario en alza.
                            </p>
                            <p class="text">
                                Por otro lado, los segmentos <strong>D, C y B</strong> mostraron variaciones negativas, con
                                disminuciones del <strong>7.20%, 3.20% y 1.90%</strong> respectivamente interpretándose como
                                un mercado más accesible durante el período analizado.
                            </p>                            
                            <P class="text">
                                Por último, el <strong>segmento A</strong> registró una variación positiva del <strong>1%</strong>, indicando
                                un ligero aumento en los precios de las viviendas en este segmento.                            
                            </P>
                        </div>                        
                    </div>
                </div>
                <!-- 4. Créditos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                4. Créditos<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 4.1 Distribución de créditos por segmento -->                    
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.1 Distribución de créditos por segmento</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOsw')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOSw')"
                                    value="2023">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOSw24')"
                                    value="2024">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditos_X_segmento_2022_puebla.html"
                                    id="contenidoOsw"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditos_X_segmento_2023_peubla.html"
                                    id="contenidoOOSw" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditos_X_segmento_2024_peubla.html"
                                    id="contenidoOOSw24" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description10', 'interpretación10',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación10', 'description10',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description10" style="display: none;">
                            <p class="text">
                                Distribución de créditos para viviendas adquiridos para cada segmento del mercado.
                                Contempla que tipo de propiedades son más populares entre los compradores que utilizan financiamiento.
                            </p>
                            <ul class="text">
                                <li>Si se tiene una concentración alta, significa que se han otorgado muchos
                                    créditos para este sector. Esto puede indicar que son una opción popular para los clientes que buscan financiamiento.</li>
                                <li>Si se tiene una concentración menor, implica que se han otorgado menos créditos para este tipo de viviendas en comparación con otras.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->  
                        <div class="interpretation" id="interpretación10" style="display: none;">
                            <p class="text">
                                En el año <strong>2023</strong>, la distribución de créditos presenta algunas
                                variaciones con respecto a <strong>2022</strong>. 
                            </p>
                            <p class="text">
                                El <strong>segmento E</strong> sigue siendo el más solicitado, representa el <strong>50%</strong> de los créditos,
                                aunque con una ligera disminución en comparación con el <strong>50.40%</strong> del año anterior.
                            </p>
                            <p class="text">
                                Por otro lado, el <strong>segmento D</strong> experimenta un aumento en su proporción, pasando del
                                <strong>18.67%</strong> en <strong>2022</strong> al <strong>19.23%</strong> en <strong>2023</strong>.
                            </p>
                            <p class="text">    
                                Se observa un incremento en la proporción de créditos para el <strong>segmento
                                C</strong>, que pasa a <strong>12.31%</strong>.                        
                            </P>
                            <p class="text">   
                                Los segmentos <strong>B, A y S</strong> muestran una disminución en sus proporciones de créditos en
                                <strong>2023</strong> en comparación con el año anterior. Estas variaciones indican posibles cambios
                                en las preferencias de financiamiento para diferentes rangos de precios de
                                propiedades durante el <strong>año 2023</strong>.                         
                            </P>
                        </div>
                    </div>



                    <!-- 4.2 Distribución % de créditos por categoría (trimestre)  -->                                                   
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.2 Distribución % de créditos por categoría (trimestre)</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOfs')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOfS')"
                                    value="2023">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOfS2424')"
                                    value="2024">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditos_X_segmento_trimestre2022_puebla.html"
                                    id="contenidoOfs"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditos_X_segmento_trimestre2023_puebla.html"
                                    id="contenidoOOfS" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditos_X_segmento_trimestre2024_puebla.html"
                                    id="contenidoOOfS2424" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                                <button class="mostrar" onclick="toggleDescription('description11')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description11" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Distribución de créditos otorgados para las propiedades en diferentes segmentos (S,
                                    A, B, C, D, E) por trimestre. En función del porcentaje, observa cómo se agrupan los
                                        créditos para viviendas según su segmento en el mercado durante 2022-2023,
                                        permitiendo una visión clara y rápida de cómo se distribuyen y cuales son más predominantes en el mercado inmobiliario.
                            </p>                            
                        </div>
                        <!-- Interpretación -->  
                        <div class="interpretation">
                                <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                                <ul class="text">         
                                        <li>En el <strong>año 2022</strong>, el cuarto trimestre registró la mayor cantidad
                                            de crédito, donde
                                            el segmento E tuvo la mayor proporción de créditos en todos los trimestres.
                                        </li>
                                        <li>En el <strong>año 2023</strong>, el segundo trimestre destacó con el mayor número de créditos,
                                            experimentando un aumento en comparación con el mismo trimestre del año
                                            anterior. Nuevamente el segmento E lideró en términos de proporción de créditos.
                                        </li>                   
                                </ul>
                                <p class="text">
                                    Comparando los dos años, notamos un aumento en la actividad crediticia en el
                                    mercado inmobiliario durante el segundo trimestre del <strong>2023</strong>.
                                </p>                            
                        </div>   
                    </div>
                    <!-- 4.3 Distribución de créditos por monto -->                                 
                     <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.3 Distribución de créditos por monto</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOs')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOS')"
                                    value="2023">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOS24')"
                                    value="2024">    
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditos_X_monto_2022_puebla.html"
                                    id="contenidoOs"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditos_X_monto_2023_puebla.html"
                                    id="contenidoOOS" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditos_X_monto_2024_puebla.html"
                                    id="contenidoOOS24" style="display: none;"></iframe>
                                    
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description12')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description12" style="display: none;">
                                <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                                <p class="text">
                                    Distribución de créditos otorgados para cada rango de monto entre el <strong>2022 y el 2023</strong>.
                                    Explora una visión de los créditos para viviendas en términos de
                                    cantidad de dinero y observa el alcance de los préstamos en el mercado inmobiliario
                                </p>                               
                        </div>
                        <!-- Interpretación -->  
                        <div class="interpretation">
                                <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                                <p class="text">
                                    En el año <strong>2022</strong>, se observa una mayor cantidad de créditos otorgados en los
                                        rangos de monto más bajos, especialmente en el intervalo de <strong>$0</strong>
                                        a <strong>$1,000,000</strong>, con un total de <strong>637 créditos</strong>. 
                                        Sin embargo, a medida que aumenta el monto, la
                                        cantidad de créditos disminuye gradualmente, con números significativamente
                                        menores en los rangos superiores, como el intervalo de <strong>$4,000,001</strong> a
                                        <strong> $20,000,000</strong>, que registró solo <strong>103 créditos</strong>.
                                </p>
                                <p class="text">
                                     Por otro lado, en el <strong>año 2023</strong>, se observa una disminución general en la cantidad
                                        de créditos otorgados en todos los rangos de monto en comparación con el año
                                        anterior. Es notable la reducción en el intervalo de <strong>$0 a $1,000,000</strong>, que pasó
                                        de <strong>637 créditos</strong> en <strong>2022</strong> a <strong>320
                                        créditos</strong> en <strong>2023</strong>. Además, se observa una
                                        disminución en los rangos de monto más altos, mostrando menor actividad
                                        en el segmento de propiedades de mayor valor.
                                </p>                                  
                        </div>  
                    </div>
                    <!-- 4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido18')"
                                    value="2019">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido19')"
                                    value="2020">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido20')"
                                    value="2021">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido13')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcredit_newold_2019_pueb.html"
                                    id="contenido18"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcredit_newold_2020_pueb.html"
                                    id="contenido19" style="display: none;"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcredit_newold_2021_pueb.html"
                                    id="contenido20" style="display: none;"></iframe>
                                <iframe width="544" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcredit_newold_2022_pueb.html"
                                    id="contenido12" style="display: none;"></iframe>
                                <iframe width="544" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promXcredit_newold_2023_pueb.html"
                                    id="contenido13" style="display: none;"></iframe>
                                    <!--g_scatt_promXcredit_newold_2024_pueb-->
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description13', 'interpretación13',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación13', 'description13',this)">Interpretación</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description13" style="display: none;">
                            <p class="text">
                                Tendencia del valor promedio de los créditos para viviendas nuevas y de uso a lo largo de 2022 en el mercado inmobiliario.
                            </p>
                            <ul class="text">
                                <li>Si se observa una tendencia ascendente, significa que el valor promedio de los créditos ha ido aumentando a lo largo del año. </li>
                                <li>Si muestra una tendencia descendente, señala que la media de los precios ha disminuido. </li>
                                <li>Si se observan picos en la tendencia puede indicar momentos en el
                                que el mercado experimentó un aumento significativo en el valor de los créditos, por el
                                contrario, si se observan caídas podrían representar periodos de disminución. </li>
                            </ul>
                        </div>
                        <!-- Interpretación -->  
                        <div class="interpretation" id="interpretación13" style="display: none;">
                            <p class="text">
                                En la gráfica podemos ver el comportamiento del promedio de valor de crédito
                                para viviendas nuevas y usadas a lo largo de los últimos años.
                            </p>                                                 
                            <ul class="text">   
                                <li>En <strong>2019</strong> el tercer trimestre fue el que obtuvo mayor valor en créditos, sin
                                embargo para vivienda nueva el trimestre uno destacó con un valor promedio de <strong>$1,822,819.15</strong>. </li>
                                <li>En <strong>2020</strong> al igual que en <strong>2019</strong>, el primer trimestre de vivienda nueva fue el
                                que tuvo mayor valor promedio con un monto de <strong>$1,649,837.68</strong>. </li>
                                <li>Para <strong>2021</strong> el trimestre cuatro obtuvo el mayor valor promedio de créditos,
                                sin embargo el <strong>trimestre 3</strong> predomina con con un valor de <strong>$1,805,033.07</strong> en
                                vivienda usada, siendo este el monto mayo en todo el año. </li>
                                <li>En <strong>2022</strong> el promedio de valor para viviendas nuevas fue mayor que el de
                                vivienda usada, siendo el Tercer trimestre el que tuvo mayor valor con <strong>$2,107,348</strong>. </li>
                                <li>En <strong>2023</strong> el primer trimestre fue el que reflejó mayor valor
                                promedio en viviendas usadas con un monto total de <strong>$1,872,784</strong>. </li>                         
                            </ul>
                        </div> 
                    </div>                                                                            
                    <!-- 4.5 Estacionalidad -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>4.5 Estacionalidad</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_estacionalidad_Xcreditos_puebla.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description14')">Descripción</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description14" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Número de créditos para vivienda adquiridos por trimestre en los años 2022 y 2023.
                                Proporciona una representación visual de cómo ha variado la adquisición de créditos hipotecarios en diferentes trimestres.
                            </p>
                            <ul class="text">
                            </ul>
                        </div>
                        <!-- Interpretación -->   
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                La gráfica nos permite observar la variación de créditos en los trimestres de
                                <strong>2022 y 2023</strong>, en donde podemos observar. En general, podemos observar que el
                                trimestre cuatro del <strong>2022</strong> fue el que tuvo un mayor número de
                                créditos otorgados con un total de <strong>395</strong>.
                            </p>                            
                            <ul class="text">      
                                <li>En <strong>2022</strong> el trimestre cuatro fue el más alto, seguido del
                                trimestre 3 con un total de <strong>341 créditos</strong>. </li>
                                <li>En <strong>2023</strong>,en base a la información que se tiene, el trimestre dos fue el que
                                obtuvo un mayor número de créditos con un total de <strong>310</strong>. </li>                      
                            </ul>
                        </div>
                            
                        </div>
                    
            
                    <!-- 4.6 Créditos por porcentaje de UMAS -->                
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.6 Créditos por porcentaje de UMAS</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOgs')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOgS')"
                                    value="2023">
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidoOOgS24S')"
                                    value="2024">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_umas_2022_puebla.html"
                                    id="contenidoOgs"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_umas_2023_puebla.html"
                                    id="contenidoOOgS" style="display: none;"></iframe>
                                    <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_umas_2024_puebla.html"
                                    id="contenidoOOgS24S" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description010', 'interpretación010',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación010', 'description010',this)">Interpretación</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description010" style="display: none;">
                                <p class="text">
                                    Visualiza la distribución de créditos según el porcentaje de Unidades de Medida y Actualización (UMAS)
                                </p>
                                <ul class="text">
                                </ul>
                        </div>
                        <!-- Interpretación -->  
                        <div class="interpretation" id="interpretación010" style="display: none;">
                                <p class="text">
                                    La distribución de créditos por porcentaje de (UMAS) muestra cambios
                                    significativos entre los años <strong>2022 y 2023</strong>.       
                                </p>                          
                                <p class="text">
                                    En el año 2022, los segmentos de ingresos más bajos (menor o igual a 2.60), tuvieron una
                                            participación relativamente baja en la obtención de créditos, con un porcentaje del <strong>5.51%</strong>.
                                            Sin embargo, en el año <strong>2023</strong>, este segmento experimentó un aumento significativo en su
                                            participación, alcanzando el <strong>12.33%</strong>.                                
                                <p class="text">
                                    Por otro lado, los segmentos de ingresos más altos (más de 12.00) tuvieron una alta
                                    participación en la obtención de créditos en ambos años, con un porcentaje del <strong>8.82%</strong> en
                                    <strong>2022</strong> y un aumento notable al <strong>17.89% en 2023</strong>.
                                </p>
                                <p class="text"></p>
                                <ul class="text">                            
                                </ul>
                        </div>
                    </div>
                    <!-- 4.7 Distribución % de créditos por organismo -->                    
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.7 Distribución % de créditos por organismo</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('conteniddO')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidddO')"
                                    value="2023">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenidddO24')"
                                    value="2024">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_organismo_2022_puebla.html"
                                    id="conteniddO"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_organismo_2023_puebla.html"
                                    id="contenidddO" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_organismo_2024_puebla.html"
                                    id="contenidddO24" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description01', 'interpretación00',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación00', 'description01',this)">Interpretación</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description01" style="display: none;">
                                <p class="text">
                                    La distribución porcentual de créditos por organismo muestra la participación de diferentes
                                    entidades financieras en el otorgamiento de préstamos hipotecarios durante los años <strong>2022 y 2023</strong>.
                                </p>
                                <ul class="text">
                                    <li>Si se observan barras elevadas significa que se tiene una gran concentración de créditos otorgados por dicha entidad. </li>
                                    <li>Si se presentan variaciones entre las barras , podría señalar una temporada en la cual se otorgaron más créditos. </li>
                                    <li>Si se visualiza barras uniformes podría indicar una
                                    distribución constante a lo largo del tiempo.</li>
                                </ul>
                        </div>
                        <!-- Interpretación -->  
                        <div class="interpretation" id="interpretación00" style="display: none;">
                                <p class="text">
                                    En el año <strong>2022</strong>, el INFONAVIT representó el mayor porcentaje de créditos, con un <strong>35.0%</strong>,
                                    seguido por la CNBV con un <strong>42.9%</strong> y el FOVISSSTE con un <strong>21.6%</strong>. 
                                    Otros organismos, como BANJERCITO, contribuyeron con un porcentaje menor al <strong>1%</strong> del total de créditos otorgados.
                                </p>
                                <p class="text">                            
                                    En <strong> 2023</strong>, la distribución porcentual de créditos por organismo experimentó algunos cambios.
                                    El INFONAVIT mantuvo su posición como el principal otorgante de créditos, con un <strong>36.7%</strong>,
                                    seguido por la CNBV con un <strong>39.1%</strong> y el FOVISSSTE con un <strong>21.3%</strong>.
                                    Además, se observó la participación de otros organismos como CONAVI, BANJERCITO e INSUS, aunque en menor
                                    medida en comparación con los principales otorgantes.
                                </p>
                        </div>
                    </div>                
                    <!-- 4.8 Distribución % de créditos por vivienda valor -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.8 Distribución % de créditos por vivienda valor</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido161')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido171')"
                                    value="2023">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido17124')"
                                    value="2024">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_vivienda_2022_puebla.html"
                                    id="contenido161"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_vivienda_2023_puebla.html"
                                    id="contenido171" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditos_X_vivienda_2024_puebla.html"
                                    id="contenido17124" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description0123', 'interpretación0011',this)">Descripción</button>
                            <!--<button class="mostrar" onclick="toggleDescription('interpretación0011', 'description0123',this)">Interpretación</button>-->
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description0123" style="display: none;">    
                            <p class="text">      
                                Distribución de créditos por vivienda valor 2022-2023. Visualiza los porcentajes que representan las proporciones de los créditos otorgados al valor de la vivienda clasificado en: Economía, Popular, Tradicional, Media, Residencial y Residencial plus.                                                      
                            </p>                             
                        </div>
                        <!-- Interpretación  -->
                        <div class="interpretation" id="interpretación0011" style="display: none;">                                                               
                        </div> 















                        
                    </div>
                </div>
            </div>
            <!-- end table responsive -->
        </div>
    </div> <!-- container-fluid -->
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

<!-- leaflet plugin -->
<script src="assets/libs/leaflet/leaflet.js"></script>

<!-- leaflet map.init -->
<script src="assets/js/pages/leaflet-us-states.js"></script>
<script src="assets/js/pages/leaflet-map.init.js"></script>

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