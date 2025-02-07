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
                            <!--<h4 class="mb-sm-0 font-size-18">Pachuca</h4>-->
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

                <!-- Visión General del Mercado -->
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
                    <h1>Visión General del Mercado</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.
                </p>
                 <!--Mapa de calor Propiedades -->
                 <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                            Distribución de Propiedades
                            <span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!-- Link de la gráfica -->
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="flex: 1; margin-right: 20px;">
                                <iframe src="/datalpine/resources/jupyter/mapas/hidalgo_heat_map.html" 
                                    width= 800px; height= 400px; frameborder="0" id="contenido01"
                                    style="width: 100%; min-height: 430px; border: 0;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description2', 'interpretación2',this)">Descripción</button>
                        <button class="mostrar" onclick="toggleDescription('interpretación2', 'description2',this)">Interpretación</button>
                    </div>
                    <!-- Explicación de la gráfica -->
                    <div class="description" id="description2" style="display: none;">
                        <div class="subtitles"><span class="icon"></span></div>
                        <p class="text">El mapa de calor presentado ofrece una visualización de la densidad de
                            propiedades
                            disponibles en la ciudad. La representación utiliza una escala de colores que va desde
                            el rojo intenso, indicando una alta concentración de propiedades en una zona
                            específica, hasta el azul más claro, denotando una menor oferta de propiedades en esa
                            área, donde cada propiedad está geolocalizada mediante sus coordenadas de latitud
                            y longitud. </p>
                        <p class="text">Esta representación permite identificar fácilmente áreas con alta demanda y
                            concentración de propiedades, así como áreas con menor competencia y potencial para el
                            desarrollo inmobiliario.</p>
                    </div>
                    <div class="interpretation" id="interpretación2" style="display: none;">
                        <div class="subtitles"><span class="icon"></span></div>
                        <p class="text">El análisis de la distribución de la oferta de propiedades revela que algunas
                            colonias destacan por su alta densidad de disponibilidad, como <strong>La Providencia,
                                Miguel
                                Hidalgo, Lomas Residencial, Real Toledo Fase 4 y Lomas de Nueva Airosa. </strong></p>
                        <p class="text">
                            Por otro lado, existen colonias donde la oferta es notablemente más limitada,
                            como <strong>La Misión, Ex-Hacienda de Pitahayas, Carlos Rovirosa, Hacienda la Herradura y
                                Privada
                                Rinconadas del Sur.</strong>
                        </p>
                        <p class="text">
                            Este panorama ofrece una visión clara de las áreas con mayor y menor
                            disponibilidad de propiedades. </p>
                    </div>
                </div>
                <!--Mapa de calor -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                            Distribución de Colonias <span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="flex: 1; margin-right: 20px;">
                                <iframe src="/datalpine/resources/jupyter/mapas/map_2_pachuca.html" width="800"
                                    height="400" frameborder="0" id="contenido01"
                                    style="width: 100%; min-height: 430px; border: 0;"></iframe>
                            </div>
                        </div>
                    </div>                   
                    <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description', 'interpretación',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación', 'description',this)">Interpretación</button>
                    </div>
                    <!-- Descripción -->
                    <div class="description" id="description" style="display: none;">
                        <div class="subtitles"><span class="icon"></span>Descripción:</div>
                        <p class="text">Este mapa interactivo despliega una representación visual de las colonias
                            locales junto con información clave sobre el mercado inmobiliario como el el precio
                            promedio tanto de propiedades como de m2 de terreno y m2 construido, de
                            igual forma, engloba información sobre el promedio de recamaras, baños,
                            cajones de estacionamiento y precios promedio de m2 de terreno y de
                            construcción. Cada colonia se clasifica en un segmento específico, desde E
                            (menor precio) hasta S (mayor precio), según el rango de precios de las
                            propiedades y están representados de la siguiente manera:</p>
                        <ul class="text">
                            <li>SEGMENTO E: Menor a <strong>1M</strong> (Verde)</li>
                            <li>SEGMENTO D: <strong>1M - 1.75M</strong> (Amarillo)</li>
                            <li>SEGMENTO C: <strong>1.75M-2.5M</strong> (Azul)</li>
                            <li>SEGMENTO B: <strong>2.5M-3.25</strong> (Morado)</li>
                            <li>SEGMENTO A: <strong>3.25M-4M</strong> (Naranja)</li>
                            <li>SEGMENTO S: <strong>4KK+</strong> (Rojo)</li>
                        </ul>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation" id="interpretación" style="display: none;">
                        <div class="subtitles"><span class="icon"></span>Interpretación:</div>
                        <p class="text">Analizando el mapa, se destaca que en Pachuca, varias colonias se encuentran
                            principalmente en el segmento de precios más alto, identificado como S.
                            Entre ellas se incluyen:</p>
                        <ul class="text">
                            <li>Valle de San Javier</li>
                            <li>Club de Golf</li>
                            <li>La Moraleja</li>
                            <li>Periodista</li>
                        </ul>
                        <p class="text">
                            Por otro lado, se observa que entre las colonias con precios más accesibles
                            se
                            encuentra:</p>
                        <ul class="text">
                            <li>La Palma</li>
                        </ul>
                        <p class="text">
                            Además, se identifican colonias cuyos precios se sitúan en un rango
                            promedio, como:</p>
                        <ul class="text">
                            <li>Santa Julia</li>
                            <li>Piracantos</li>
                            <li>Pitahayas</li>
                        </ul>
                        <p class="text">
                            Este mapa nos proporciona una visión clara de la diversidad de precios en
                            las
                            diferentes colonias de Pachuca.</p>
                    </div>
                </div>
               
                <!--Clientes potenciales foráneos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">Clientes potenciales foráneos<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <!-- Link de la gráfica -->
                        <?php
                        // Ruta de la imagen
                        $ruta_imagen = "/datalpine/resources/jupyter/mapas/map_ClientesPotencialesForaneos_pachuca.png";
                        $ancho_imagen = 800; // Ancho deseado para la imagen
                        $alto_imagen = 400; // Alto deseado para la imagen
                        ?>

                        <!-- Contenedor para centrar la imagen -->
                        <div style="display: flex; justify-content: center;">
                            <!-- Insertar la imagen en el contenedor -->
                            <img src="<?php echo $ruta_imagen; ?>" width="<?php echo $ancho_imagen; ?>"
                                height="<?php echo $alto_imagen; ?>" alt="Imagen">
                        </div>

                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3', 'interpretación3',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación3', 'description3',this)">Interpretación</button>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitles"><span class="icon"></span>Descripción:</div>
                            <p class="text">El mapa
                                proporciona una representación de la distribución de compradores foráneos
                                interesados en adquirir propiedades en la zona metropolitana de Pachuca. Estos
                                compradores están clasificados por su región de origen y se ponderan según la
                                importancia relativa asignada basada en un meticuloso análisis de variables
                                clave,
                                como el tamaño del mercado, la demanda del producto o servicio y la
                                accesibilidad
                                logística. Con esta información, se puede comprender la procedencia geográfica
                                de
                                los interesados en el mercado inmobiliario local, lo que facilita la
                                identificación
                                de tendencias y preferencias de compra. </p>
                        </div>
                        <div class="interpretation" id="interpretación3" style="display: none;">
                            <div class="subtitles">Interpretación:</div>
                            <p class="text">
                            El mapa proporciona datos sobre la distribución de compradores foráneos interesados
                                en
                                adquirir propiedades en la ciudad de Pachuca. Estos compradores están clasificados
                                por
                                región de origen y se muestran sus respectivas ponderaciones, reflejando el
                                porcentaje
                                de contribución relativa de cada región al total de compradores foráneos.
                                Según los datos, la región de Ciudad de México representa el mayor porcentaje, con
                                un
                                <strong>33%</strong>, seguida por el Estado de México con un <strong>27%</strong>,
                                Nuevo León con un <strong>20%</strong>, Jalisco con
                                un
                                <strong>13%</strong>, y finalmente Puebla con un <strong>7%</strong>.
                                Este análisis revela la procedencia geográfica de los compradores foráneos y su
                                importancia relativa en el mercado inmobiliario de Pachuca, lo que puede ser
                                esencial
                                para comprender y atender las necesidades de estos grupos de compradores en
                                particular.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TABLAS -->
            <div class="container-fluid page__container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="card-header__title flex m-0">PRECIO MERCADO </h4>
                            </div>
                            <div class="card-header d-flex align-items-center justify-content-end"
                                style="background-color: #FAFBFE;">
                                <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                </div>
                                <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Información relevante sobre los precios de mercado, relacionada con las propiedades existentes en el mercado.">
                                    <i class="material-icons icon-14pt text-success">info</i>
                                </a>
                            </div>
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Minimo</strong>
                                    <div>
                                        <span>$ 240,600.00</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Maximo</strong>
                                    <div>
                                        <span>$ 28,500,000.00</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Promedio</strong>
                                    <div>
                                        <span>$ 2,968,023.00</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Mediana</strong>
                                    <div>
                                        <span> $ 2,540,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="card-header__title flex m-0">M2 TERRENO </h4>
                            </div>
                            <div class="card-header d-flex align-items-center justify-content-end"
                                style="background-color: #FAFBFE;">
                                <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                </div>
                                <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Muestra la variabilidad en los tamaños de M2 de terrenos en la muestra, desde los más pequeños hasta los más grandes, proporcionando una visión general de la distribución.">
                                    <i class="material-icons icon-14pt text-success">info</i>
                                </a>
                            </div>
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Minimo</strong>
                                    <div>
                                        <span>45</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Maximo</strong>
                                    <div>
                                        <span>1,609</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Promedio</strong>
                                    <div>
                                        <span>149</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Mediana</strong>
                                    <div>
                                        <span>128</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="card-header__title m-0">M2 CONSTRUCCIÓN </h4>
                            </div>
                            <div class="card-header d-flex align-items-center justify-content-end"
                                style="background-color: #FAFBFE;">
                                <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                </div>
                                <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Aquí te presentamos la variedad en el tamaño de M2 de construcciones en nuestra muestra. Desde las más pequeñas hasta las más grandes.">
                                    <i class="material-icons icon-14pt text-success">info</i>
                                </a>
                            </div>
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Minimo</strong>
                                    <div>
                                        <span>47</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Maximo</strong>
                                    <div>
                                        <span>1,100</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Promedio</strong>
                                    <div>
                                        <span>194</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Mediana</strong>
                                    <div>
                                        <span>179</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="card-header__title flex m-0">PRECIO M2 CONSTRUCIÓN</h4>
                            </div>
                            <div class="card-header d-flex align-items-center justify-content-end"
                                style="background-color: #FAFBFE;">
                                <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                </div>
                                <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Estos valores reflejan la variabilidad en los precios de construcción por metro cuadrado, desde muy bajos hasta muy altos.">
                                    <i class="material-icons icon-14pt text-success">info</i>
                                </a>
                            </div>
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Minimo</strong>
                                    <div>
                                        <span>$ 1,544.00</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Maximo</strong>
                                    <div>
                                        <span> $ 200,600 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Promedio</strong>
                                    <div>
                                        <span> $ 15,227 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-3">
                                    <strong>Mediana</strong>
                                    <div>
                                        <span> $ 14,088 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="card-header__title flex m-0">CASA PROMEDIO </h4>
                            </div>
                            <div class="card-header d-flex align-items-center justify-content-end"
                                style="background-color: #FAFBFE;">
                                <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                </div>
                                <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title=" Comparación de datos de propiedades, resaltando las estadísticas promedio.">
                                    <i class="material-icons icon-14pt text-success">info</i>
                                </a>
                            </div>
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Recámaras</strong>
                                    <div>
                                        <span>3.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Baños</strong>
                                    <div>
                                        <span>3.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Estacionamientos</strong>
                                    <div>
                                        <span>2.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Terreno</strong>
                                    <div>
                                        <span>149</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>M2 Construido</strong>
                                    <div>
                                        <span>194</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Precio</strong>
                                    <div>
                                        <span> $ 2,968,023.00 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Precio M2 Construido</strong>
                                    <div>
                                        <span> $ 15,227.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="card-header__title m-0">CASA MEDIA </h4>
                            </div>
                            <div class="card-header d-flex align-items-center justify-content-end"
                                style="background-color: #FAFBFE;">
                                <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                </div>
                                <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Comparación de datos de propiedades, resaltando las estadísticas medias.">
                                    <i class="material-icons icon-14pt text-success">info</i>
                                </a>
                            </div>
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Recámaras</strong>
                                    <div>
                                        <span>3.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Baños</strong>
                                    <div>
                                        <span>3.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Estacionamientos</strong>
                                    <div>
                                        <span>2.0</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Terreno</strong>
                                    <div>
                                        <span>128</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>M2 Construido</strong>
                                    <div>
                                        <span>179</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Precio</strong>
                                    <div>
                                        <span> $ 2,540,000.00 </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-1">
                                    <strong>Precio M2 Construido</strong>
                                    <div>
                                        <span> $ 14,088.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

<!-- Chart JS -->
<script src="assets/libs/chart.js/chart.umd.js"></script>
<!-- chartjs init -->
<script src="assets/js/pages/chartjs.init.js"></script>

<script src="assets/js/app.js"></script>


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