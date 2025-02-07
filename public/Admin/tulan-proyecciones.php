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
                            <!--<h4 class="mb-sm-0 font-size-18">Tulancingo</h4>-->
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

                <!-- 6. Proyecciones Oportunidades de Inversión y Análisis de Colonias -->
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
                    <h1>Proyecciones Oportunidades de Inversión y Análisis de Colonias</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Esta sección muestra un análisis exhaustivo
                    de las proyecciones y tendencias del mercado inmobiliario en los próximos años, proporcionando una
                    visión detallada de elementos cruciales como el precio promedio de la vivienda, la dinámica de los
                    créditos otorgados, el tiempo en el mercado y el crecimiento poblacional.</p>

                <!-- Proyeccion Forecast Media Anual -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Proyeccion Forecast Media Anual<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_preciomediaanual_prom_direct_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1', 'interpretación1',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación1', 'description1',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description1" style="display: none;">
                            <p class="text">
                                La gráfica presenta una proyección del precio medio de las propiedades en Tulancingo
                                    para los próximos años. Estos datos anticipan la dirección esperada en la evolución
                                    del valor promedio de las viviendas.
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación1" style="display: none;">
                            <p class="text">
                            En el año
                                    <strong>2023</strong>, el precio medio de las propiedades en Tulancingo se situó en
                                    <strong>$1,377,000.00</strong>, y
                                    se anticipa que este valor mantendrá una trayectoria de crecimiento constante,
                                    alcanzando los <strong>$1,655,940</strong> en el año <strong>2026</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Plusvalía estimada (5 años) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Plusvalía estimada (5 años)<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_plusvaliaestimada_direct_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2', 'interpretación2',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación2', 'description2',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description2" style="display: none;">
                            <p class="text">
                            Los datos presentados ofrecen una vista anticipada del valor promedio de las
                                    propiedades en los próximos cinco años. Reflejando la posible dirección de
                                    crecimiento o reducción en el precio de las viviendas.
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación2" style="display: none;">
                            <p class="text">
                            Los datos revelan una proyección ascendente en la plusvalía del precio promedio de las
                                    viviendas en Tulancingo para los próximos años. En el año <strong>2023</strong>, se
                                    muestra un valor
                                    de <strong>$1,863,990</strong>, evidenciando un crecimiento significativo que se
                                    espera continúe de
                                    manera constante hasta alcanzar <strong>$2,242,582</strong> en el año
                                    <strong>2026</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                
            

                <!-- Forecast créditos generales (Cantidad) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">

                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                Forecast créditos generales (Cantidad)<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>

                        <!--<div class="mb-3">                            
                            <h5 class="card-title subtitle">
                                Forecast créditos generales (Cantidad)<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>-->
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_cantidad_direct_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description21', 'interpretación21',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación21', 'description21',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description21" style="display: none;">
                            <p class="text">
                            Estos datos representan las proyecciones de créditos generales en cantidad para los
                                    años <strong> 2019 a 2026 </strong>, desglosados en dos categorías:
                                    <strong>'Vivienda Nueva'</strong> y <strong>'Vivienda
                                        Usada'</strong>. A lo largo de este periodo, se proporciona información sobre el
                                    <strong>número total
                                        de créditos</strong> otorgados, así como la cantidad específica de créditos
                                    destinados a
                                    viviendas nuevas y usadas
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación21" style="display: none;">
                            <ul class="text">
                            <li><strong>Monto total:</strong> El monto total de créditos en Tulancingo presenta
                                        una
                                        proyección
                                        ascendente, estimándose un aumento de <strong>$259,936,080.61</strong> en
                                        <strong>2019</strong> a
                                        <strong>$4,432,531,506.29</strong> en <strong>2026</strong>. Esta tendencia
                                        refleja
                                        un crecimiento constante a lo
                                        largo del periodo analizado.
                                        Para vivienda nueva se observa un aumento gradual de
                                        <strong>$110,576,187.62</strong> en <strong>2019</strong> a
                                        <strong>$93,455,838.96</strong> en <strong>2026</strong> evidenciando una
                                        estabilidad y crecimiento constante en
                                        los años posteriores.

                                        Por otro lado, los créditos destinados a la "Vivienda Usada" aunque se registran
                                        fluctuaciones, destaca un incremento progresivo de
                                        <strong>$144,769,506.80</strong>
                                        en <strong>2019</strong> a
                                        <strong>$156,176,801.18</strong> en <strong>2026</strong>.
                                    </li>
                                    <li><strong>Monto promedio:</strong> Para todas las categorías, se evidencia un
                                        crecimiento
                                        constante de <strong>$640,236.65</strong> en <strong>2019</strong> a
                                        <strong>$836,558.70</strong> en 2026.
                                        En relación a "Vivienda Nueva" en Tulancingo, se observa una trayectoria
                                        ascendente en los montos promedio por crédito a lo largo de los años
                                        proyectados. Desde <strong>$831,399.91</strong> en <strong>2019</strong>, se
                                        anticipa un crecimiento constante
                                        hasta alcanzar <strong>$983,745.67</strong> en <strong>2026</strong>.

                                        En cuanto a la categoría de "Vivienda Usada" en Tulancingo, se observa una
                                        variación en los montos promedio por crédito a lo largo de los años proyectados.
                                        Partiendo de <strong>$761,944.77</strong> en <strong>2019</strong>, se
                                        experimenta
                                        un aumento a <strong>$970,042.24</strong> en
                                        <strong>2026</strong>.
                                    </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Forecast créditos generales (valor) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                Forecast créditos generales (valor)<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                value="Total">
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                value="Promedio">
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_total_direct_tulancingo.html"
                                    id="contenido1"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_prom_direct_tulancingo.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div>                                               
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description22', 'interpretación22',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación22', 'description22',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description22" style="display: none;">
                            <p class="text">
                            Estos datos representan las proyecciones de créditos generales en cantidad para los
                                    años <strong>2019 a 2026</strong>, desglosados en dos categorías: <strong>'Vivienda
                                        Nueva'</strong> y <strong>'Vivienda
                                        Usada'</strong>. A lo largo de este periodo, se proporciona información sobre el
                                    número total
                                    de créditos otorgados, así como la cantidad específica de créditos destinados a
                                    viviendas nuevas y usadas
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación22" style="display: none;">
                            <ul class="text">
                            <li>Entre los años<strong>2019</strong> y <strong>2021</strong>, se observó una
                                        variación significativa en el número
                                        total de créditos, alcanzando niveles
                                        destacados durante esos años. Sin embargo, en <strong>2023</strong>, se registra
                                        una marcada
                                        disminución en el total de créditos.
                                    </li>
                                    <li>En cuanto a las proyecciones para las categorías <strong>"Vivienda
                                            Nueva"</strong> y <strong>"Vivienda
                                            Usada"</strong>, ambas muestran patrones similares de descenso en
                                        <strong>2022</strong>, con un ligero
                                        repunte anticipado en los años que siguen a este periodo.
                                    </li>
                </ul>
                        </div>

                    </div>
                </div>
                <!-- Forecast Casas y Departamentos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                Forecast Casas y Departamentos<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                            <!--<h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Forecast Casas y Departamentos<span class="text-muted fw-normal ms-2"></span>
                            </h5>-->
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_forecast_casasdept_direct_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description32', 'interpretación23',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación23', 'description32',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description32" style="display: none;">
                            <p class="text">
                            Proporciona estimaciones porcenctuales anuales sobre la tendencia en la cantidad de
                                    casas y departamentos que se anticipa serán ofertados en cada año, abarcando desde
                                    el presente hasta los próximos años.
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación23" style="display: none;">
                            <ul class="text">
                            <li>La línea azul representa el porcentaje de cambio en la oferta de casas. Se puede
                                        observar como va en crecimiento a lo largo del tiempo.
                                    </li>
                </ul>
                        </div>
                    </div>
                </div>
                <!-- Tiempo en el mercado -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Tiempo en el mercado<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_tiempoXmercado_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description27', 'interpretación27',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación27', 'description27',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description27" style="display: none;">
                            <p class="text">
                            La distribución se presenta en cinco categorías según el número de días que las
                                    propiedades han estado disponibles, lo que proporciona información sobre la
                                    disponibilidad y el estado actual de las propiedades en el mercado inmobiliario.
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación27" style="display: none;">
                            <ul class="text">
                            <li>La mayor concentración de unidades se encuentra en las categorías de
                                        <strong>31-100 días</strong>
                                        y <strong>101-365 días</strong>, indicando que muchas propiedades permanecen en
                                        el mercado
                                        durante períodos de tiempo más prolongados antes de su venta.
                                    </li>
                             </ul>
                        </div>
                    </div>
                </div>
                <!-- Proyección poblacional -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Proyección poblacional<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_proyeccionXpoblacional_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description24', 'interpretación24',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación24', 'description24',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description24" style="display: none;">
                            <p class="text">
                            La proyección poblacional es una estimación de cuántas personas se espera que vivan
                            en una región o área geográfica específica a lo largo de varios años.</p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación24" style="display: none;">
                            <p class="text">
                            La estimación poblacional revela un crecimiento progresivo en la región a lo largo
                                    de los años <strong>2020 a 2026</strong>. Iniciando con <strong>106,163</strong>
                                    habitantes en <strong>2020</strong>, la población
                                    experimenta un incremento constante, alcanzando los <strong>161,033</strong>
                                    habitantes en <strong>2026</strong>.
                </p>
                        </div>



                        
                    </div>
                </div>
                <!-- Riesgo -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Riesgo<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <!--<iframe src="/datalpine/resources/jupyter/graficas/g_pie_riesgo_tulancingo.html"-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_riesgo_direct_tulancingo.html"                        
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description28', 'interpretación28',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación28', 'description28',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description28" style="display: none;">
                            <p class="text">
                            El riesgo de stock en el mercado inmobiliario se relaciona con la cantidad de casas
                                    disponibles durante distintos lapsos de tiempo. Esta métrica es esencial para
                                    evaluar la dinámica de oferta y demanda en el sector.
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación28" style="display: none;">
                            <p class="text">
                                Cerca del <strong>39.0%</strong> de las propiedades han estado en el mercado por
                                    <strong>más de un año</strong>,
                                    indicando un nivel de riesgo potencialmente mayor en términos de su comercialización
                                    y venta. Este grupo de propiedades podría enfrentar desafíos relacionados con la
                                    demanda o características específicas.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Proyección en días -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Proyección en días<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_stockdias_direct_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                         <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description281', 'interpretación281',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación281', 'description281',this)">Interpretación</button>
                        </div>
                        <div class="description" id="description281" style="display: none;">
                            <p class="text">
                            La proyección en días permite anticipar la duración promedio que las propiedades
                                    podrían requerir para su venta, lo que resulta esencial para ajustar estrategias de
                                    comercialización, establecer precios competitivos y adaptarse a las dinámicas
                                    cambiantes del mercado.
                            </p>
                        </div> 
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación281" style="display: none;">
                            <ul class="text">
                            <li>En el historial de stock, se evidencia una duración de <strong>23 días en
                                            Diciembre de
                                            2023</strong>, seguida de una ligera reducción a <strong>22 días en Enero de
                                            2024</strong> y <strong>42 días en
                                            Febrero 2024</strong>. La proyección para <strong>Marzo</strong> sugiere una
                                        continuación de esta
                                        tendencia, con estimaciones de <strong>50 días</strong> respectivamente.
                                    </li>
                                    <li>La proyección muestra una disminución gradual en la duración promedio de venta,
                                        lo que puede ser interpretado como una posible mejora en la agilidad del mercado
                                        inmobiliario.</li>
                </ul>
                        </div>



                    </div>
                </div>
                <!-- Meses de oferta (Month of Supply) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Meses de oferta (Month of Supply)<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_MonthSupply_tulancingo.html" width="1000"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description44', 'interpretación44',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación44', 'description44',this)">Interpretación</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description44" style="display: none;">
                            <p class="text">
                            Los meses de oferta es una métrica que refleja cuantos meses pasarían antes de que
                                    todas las propiedades disponibles se agotaran si las mismas se compraran con los
                                    créditos demandados (es decir, si se usaran todos los créditos disponibles de dicho
                                    mes) . Se calcula dividiendo el total de propiedades del mes listadas en el mercado
                                    inmobiliario entre el promedio mensual del volumen de créditos demandados durante
                                    dicho año.
                            </p>
                        </div>                        
                       
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación44" style="display: none;">
                            <p class="text">
                            Este gráfico te permite visualizar cómo es la relación entre la oferta de
                                    propiedades y la demanda de créditos a lo largo del tiempo. Un promedio de meses
                                    alto indica que se tiene un mercado más competitivo, puesto que hay más propiedades
                                    "peleando" contra los créditos otorgados para dicho mercado inmobiliario. En
                                    <strong>julio
                                        de 2023</strong>, la cifra alcanzó su punto más alto, con aproximadamente
                                    <strong>37.89 meses</strong>. Esto
                                    podría sugerir un exceso de oferta de propiedades o una disminución en la demanda de
                                    créditos. Por otra parte, el mejor punto para invertir se encontró en octubre de
                                    <strong>2023</strong>, debido a que disminuyó significativamente a aproximadamente
                                    <strong>16.72 meses</strong>. Esto
                                    podría indicar una reducción en el número de propiedades listadas o un aumento en la
                                    demanda de créditos y, por lo tanto, un mercado menos competitivo.
                            </p>
                        </div>                       
                    </div>
                </div>
                <!-- Cambio de Precios en el Mercado Inmobiliario de Pachuca -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Cambio de Precios en el Mercado Inmobiliario de Pachuca<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_precioscambiomes_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description43', 'interpretación477',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación477', 'description43',this)">Interpretación</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description43" style="display: none;">
                            <p class="text">
                            El gráfico de Análisis de Cambio de Precios a lo largo del tiempo ilustra los
                                    cambios porcentuales en los precios promedio de las propiedades en el mercado
                                    inmobiliario de Pachuca para los meses disponibles. Aquí están las perspectivas
                                    clave.</p>
                        </div>                        
                       
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación477" style="display: none;">
                            <ul class="text">
                            <li>Hay fluctuaciones significativas en los precios de mes a mes. Por ejemplo, hubo
                                        una disminución de aproximadamente el <strong>13.34%</strong> en
                                        <strong>noviembre de 2022</strong> en comparación con <strong>octubre de
                                            2022</strong>, seguida de un aumento notable del <strong>15.43%</strong> en
                                        <strong>febrero de 2023</strong>.
                                    </li>
                                    <li>El dato más reciente, <strong>diciembre de 2023</strong>, muestra una
                                        disminución del <strong>15.44%</strong> en comparación con <strong>septiembre de
                                            2023</strong>.</li>
                            </ul>
                        </div>                        
                    </div>
                </div>
                <!-- Tendencia de Mercado & Dinamica de Precios -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Tendencia de Mercado & Dinamica de Precios<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description453',this)">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description453" style="display: none;">
                            <p class="text">
                            El mercado inmobiliario de Pachuca ha experimentado una considerable variabilidad
                                    durante el período examinado, como lo demuestran los datos de transacciones y los
                                    movimientos de precios promedio. Nuestro análisis actualizado ofrece las siguientes
                                    perspectivas:
                            </p>
                            <ul class="text">
                            <li>El precio promedio de la propiedad experimentó una notable disminución en
                                        noviembre de <strong>2022</strong>, cayendo a <strong>2.69 millones de
                                            MXN</strong>, lo que significa una disminución del <strong>13.34%</strong>
                                        desde <strong>octubre de 2022</strong>. Esto fue seguido por un aumento a
                                        <strong>3.16 millones de MXN</strong> en <strong>febrero de 2023</strong>, un
                                        significativo aumento del <strong>15.43%</strong>, reflejando la resiliencia y
                                        el potencial de recuperación del mercado.
                                    </li>
                                    <li>En los meses siguientes, observamos una disminución en <strong>marzo de
                                            2023</strong>, con precios promedio cayendo a <strong>2.72 millones de
                                            MXN</strong>, y un aumento en <strong>junio de 2023</strong>, subiendo
                                        nuevamente a <strong>3.02 millones de MXN</strong>. Los datos más recientes de
                                        <strong>diciembre de 2023</strong> muestran una disminución a <strong>2.58
                                            millones de MXN</strong>.
                                    </li>
                                    <li>Los volúmenes de transacciones fluctuaron correspondientemente, alcanzando un
                                        pico en <strong>febrero de 2023</strong>, lo que se alinea con el aumento en los
                                        precios promedio, sugiriendo una actividad de mercado incrementada durante ese
                                        período.</li>
                            </ul>
                        </div>                        
                       
                    </div>
                </div>
                <!-- Precio promedio por número de baños -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Precio promedio por número de baños <span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromediobaños_v_tulancingo.html"
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Este análisis de distribución de precios ofrece una visión clara de la composición
                                    del mercado en Pachuca, destacando la prevalencia de propiedades asequibles y de
                                    gama media. También apunta a la existencia de un mercado de gama alta más exclusivo,
                                    aunque estas propiedades son menos comunes. Esta información es crucial para
                                    comprender la dinámica del mercado y las oportunidades de inversión potenciales,
                                    especialmente para enfocarse en segmentos de precios específicos.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Rangos de Precios Más Comunes:</strong> La mayoría de las propiedades se
                                        encuentran en el rango de <strong>1M a 3M de pesos</strong>. Específicamente,
                                        alrededor del <strong>31.82%</strong> de las propiedades tienen precios entre
                                        <strong>1M y 2M</strong> de pesos, y aproximadamente el <strong>30.19%</strong>
                                        están en el rango de <strong>2M a 3M</strong> de pesos.
                                    </li>
                                    <li><strong>Propiedades de Gama Media:</strong> El rango de <strong>3M a 4M</strong>
                                        de pesos representa el <strong>16.50%</strong> del mercado, indicando una
                                        presencia significativa de propiedades de gama media.</li>
                                    <li><strong>Segmento de Mercado de Alto Nivel:</strong> A medida que nos movemos
                                        hacia rangos de precios más altos, el porcentaje de propiedades disminuye. El
                                        rango de <strong>4M a 5M</strong> de pesos abarca el <strong>6.90%</strong> del
                                        mercado, y el rango de <strong>5M a 6M</strong> de pesos incluye alrededor del
                                        <strong>3.46%</strong>.
                                    </li>
                                    <li><strong>Propiedades de Lujo:</strong> Las propiedades con precios superiores a
                                        9M de pesos representan una pequeña fracción del mercado, señalando un segmento
                                        limitado pero distintivo de propiedades de lujo.</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Precio Promedio de la Propiedad por Número de Habitaciones (de 1 a 5)</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    En Pachuca, el precio promedio de la propiedad muestra una tendencia variada a
                                    medida que aumenta el número de habitaciones. Para propiedades con dos habitaciones,
                                    hay una disminución de aproximadamente el **20.34%** en comparación con aquellas de
                                    una habitación. Sin embargo, esta tendencia se invierte para propiedades de tres
                                    habitaciones, que muestran un aumento significativo del **56.98%** en comparación
                                    con las propiedades de dos habitaciones. La tendencia continúa con propiedades de
                                    cuatro habitaciones, que son **47.41%** más caras que las de tres habitaciones. El
                                    aumento es más modesto para las propiedades de cinco habitaciones, mostrando un
                                    aumento del **4.19%** sobre las propiedades de cuatro habitaciones. Estas cifras
                                    destacan una clara preferencia del mercado por propiedades de tres y cuatro
                                    habitaciones, que se consideran más valiosas, probablemente debido a su idoneidad
                                    para familias o segmentos de mercado de mayor nivel.</p>
                            </div>
                        </div>
                -->
                    </div>
                </div>
                <!-- Precio Promedio de la Propiedad por Número de Baños (de 1 a 4) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Precio Promedio de la Propiedad por Número de Baños (de 1 a 4)<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromediobaños_14_tulancingo.html"
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description4', 'interpretación4',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación4', 'description4',this)">Interpretación</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description4" style="display: none;">
                            <p class="text">
                            Este análisis de distribución de precios ofrece una visión clara de la composición
                                    del mercado en Pachuca, destacando la prevalencia de propiedades asequibles y de
                                    gama media. También apunta a la existencia de un mercado de gama alta más exclusivo,
                                    aunque estas propiedades son menos comunes. Esta información es crucial para
                                    comprender la dinámica del mercado y las oportunidades de inversión potenciales,
                                    especialmente para enfocarse en segmentos de precios específicos.</p>
                                    <ul class="text">
                                    <li><strong>Rangos de Precios Más Comunes:</strong> La mayoría de las propiedades se
                                        encuentran en el rango de <strong>1M a 3M de pesos</strong>. Específicamente,
                                        alrededor del <strong>31.82%</strong> de las propiedades tienen precios entre
                                        <strong>1M y 2M</strong> de pesos, y aproximadamente el <strong>30.19%</strong>
                                        están en el rango de <strong>2M a 3M</strong> de pesos.
                                    </li>
                                    <li><strong>Propiedades de Gama Media:</strong> El rango de <strong>3M a 4M</strong>
                                        de pesos representa el <strong>16.50%</strong> del mercado, indicando una
                                        presencia significativa de propiedades de gama media.</li>
                                    <li><strong>Segmento de Mercado de Alto Nivel:</strong> A medida que nos movemos
                                        hacia rangos de precios más altos, el porcentaje de propiedades disminuye. El
                                        rango de <strong>4M a 5M</strong> de pesos abarca el <strong>6.90%</strong> del
                                        mercado, y el rango de <strong>5M a 6M</strong> de pesos incluye alrededor del
                                        <strong>3.46%</strong>.
                                    </li>
                                    <li><strong>Propiedades de Lujo:</strong> Las propiedades con precios superiores a
                                        9M de pesos representan una pequeña fracción del mercado, señalando un segmento
                                        limitado pero distintivo de propiedades de lujo.</li>
                                    </ul>
                        </div>                        
                       
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación4" style="display: none;">
                            <p class="text">
                                Los datos para Pachuca revelan una tendencia ascendente consistente en los precios
                                    de las propiedades con el aumento en el número de baños. Las propiedades con dos
                                    baños tienen un precio <strong>51.40%</strong> más alto en promedio que aquellas con
                                    solo uno. Esta tendencia ascendente continúa con propiedades de tres baños, que son
                                    <strong>31.52%</strong> más caras que las de dos baños. La tendencia es aún más
                                    pronunciada para las propiedades con cuatro baños, mostrando un incremento del
                                    <strong>39.80%</strong> sobre las de tres baños. Este aumento constante en el precio
                                    con baños adicionales indica una fuerte preferencia del mercado por propiedades con
                                    más comodidades, reflejando la demanda de confort y lujo.
                            </p>
                        </div>
                      
                    </div>
                </div>
                <!-- Tendencias de Mercado en Colonias -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Tendencias de Mercado en Colonias<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_colbaratas_t5_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>'Colonias' Activas en el Mercado Inmobiliario de Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El primer gráfico ofrece una imagen reveladora del paisaje inmobiliario de Pachuca,
                                    mostrando la distribución de la actividad del mercado a través de varias colonias.
                                    Al presentar los datos en términos de porcentaje del total de anuncios, obtenemos
                                    una perspectiva comparativa clara. Colonias como "centro" dominan el mercado,
                                    representando una proporción significativa de los anuncios, lo que podría indicar
                                    una alta demanda de propiedades en estas áreas. Esto también sugiere una
                                    concentración de la vitalidad del mercado en el núcleo de la ciudad, posiblemente
                                    impulsada por el atractivo de las comodidades urbanas y las oportunidades de empleo.
                                    Sin embargo, es crucial considerar que la alta actividad también puede resultar en
                                    un mercado competitivo para los compradores y podría indicar un mercado de alquiler
                                    saturado, factores que deben ser evaluados por inversores potenciales o aquellos que
                                    consideren ingresar al mercado.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y
                                    "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos.
                                    Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas,
                                    probablemente caracterizado por amenidades de lujo, propiedades más grandes y
                                    demografías más acaudaladas. Para inversores o desarrolladores, estos son los
                                    distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.
                                </p>
                            </div>
                        </div>
                -->
                    </div>
                </div>
                <!-- 'Colonias' de Alto Potencial en Pachuca -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                'Colonias' de Alto Potencial en Pachuca<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_colpred_t5_tulancingo.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                       
                    </div>
                </div>
                <!-- Colonias Para inversión (las que más han crecido en precio m² trimestre) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Colonias Para inversión (las que más han crecido en precio m² trimestre)<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_colcaras_t5_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>'Colonias' Activas en el Mercado Inmobiliario de Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El primer gráfico ofrece una imagen reveladora del paisaje inmobiliario de Pachuca,
                                    mostrando la distribución de la actividad del mercado a través de varias colonias.
                                    Al presentar los datos en términos de porcentaje del total de anuncios, obtenemos
                                    una perspectiva comparativa clara. Colonias como "centro" dominan el mercado,
                                    representando una proporción significativa de los anuncios, lo que podría indicar
                                    una alta demanda de propiedades en estas áreas. Esto también sugiere una
                                    concentración de la vitalidad del mercado en el núcleo de la ciudad, posiblemente
                                    impulsada por el atractivo de las comodidades urbanas y las oportunidades de empleo.
                                    Sin embargo, es crucial considerar que la alta actividad también puede resultar en
                                    un mercado competitivo para los compradores y podría indicar un mercado de alquiler
                                    saturado, factores que deben ser evaluados por inversores potenciales o aquellos que
                                    consideren ingresar al mercado.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y
                                    "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos.
                                    Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas,
                                    probablemente caracterizado por amenidades de lujo, propiedades más grandes y
                                    demografías más acaudaladas. Para inversores o desarrolladores, estos son los
                                    distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.
                                </p>
                            </div>
                        </div>
                -->
                    </div>
                </div>

            </div> <!-- end container-fluid -->
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

<!-- rater-js plugin -->
<script src="assets/libs/rater-js/index.js"></script>
<!-- rating init -->
<script src="assets/js/pages/rating.init.js"></script>

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