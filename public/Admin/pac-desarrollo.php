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
                                    <li class="breadcrumb-item active">Pachuca</li>
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
                    <h1>Características y Distribución de Propiedades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

                <!-- 1. Distribución de Propiedades -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Columna izquierda: Distribución de Propiedades -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">1. Distribución por M2 construcción por rango (segmentos)</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-user-tie me-2"></i>
                                        <span class="developer-label">Desarrollador</span>
                                    </div>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal1">Descripción</button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal1">Interpretación</button>
                                        </div>
                                    </div>
                                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/mapas/hidalgo_heat_map.html" 
                                            width="100%" height="400" frameborder="0" 
                                            style="min-height: 430px; border: 0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Columna derecha: Distribución de Colonias -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">Distribución por M2 construcción por rango (gral)</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span class="developer-label">Desarrollador</span>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal2">Descripción</button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal2">Interpretación</button>
                                        </div>
                                    </div>
                                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                        <iframe src="\datalpine\resources\Ciudades\Pachuca\assets\mapas\map_2_pachuca.html" 
                                            width="100%" height="400" frameborder="0" 
                                            style="min-height: 430px; border: 0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modales para Descripción e Interpretación del primer gráfico -->
                <div class="modal fade" id="descriptionModal1" tabindex="-1" aria-labelledby="descriptionModal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descriptionModal1Label">Descripción - Distribución de Propiedades</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>Esta gráfica muestra la distribución de propiedades en Pachuca.</li>
                                    <li>Se presentan los datos por tipos de propiedades.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="interpretationModal1" tabindex="-1" aria-labelledby="interpretationModal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interpretationModal1Label">Interpretación - Distribución de Propiedades</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>La distribución de propiedades refleja la composición del mercado inmobiliario en Pachuca.</li>
                                    <li>Se pueden observar qué tipos de propiedades son más comunes o demandadas en la ciudad.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modales para Descripción e Interpretación del segundo gráfico -->
                <div class="modal fade" id="descriptionModal2" tabindex="-1" aria-labelledby="descriptionModal2Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descriptionModal2Label">Descripción - Distribución de Colonias</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>Esta gráfica muestra la distribución de colonias en Pachuca.</li>
                                    <li>Se presentan los datos por colonias más representativas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="interpretationModal2" tabindex="-1" aria-labelledby="interpretationModal2Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interpretationModal2Label">Interpretación - Distribución de Colonias</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>La distribución de colonias refleja la diversidad de zonas residenciales en Pachuca.</li>
                                    <li>Se pueden identificar las colonias con mayor concentración de propiedades o mayor actividad inmobiliaria.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3. Precio de oferta -->
                    <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                3. Precio promedio por M2 totales
                                <span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_segmentos.html"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description4', 'interpretación3',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación4', 'description3',this)">Interpretación</button>
                        </div> 

                        <!-- Descripción -->
                        <div class="description" id="description4" style="display: none;">
                            <ul class="text">
                                <li>Esta gráfica muestra la distribución de los precios de oferta en el mercado inmobiliario de Pachuca.</li>
                                <li>Se presentan los datos de precios en diferentes rangos.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation" id="interpretación4" style="display: none;">
                            <ul class="text">
                                <li>La distribución de precios de oferta proporciona una visión general de la estructura de precios en el mercado inmobiliario de Pachuca.</li>
                                <li>Se pueden identificar los rangos de precios más comunes y las tendencias en la oferta de propiedades.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <!-- Columna izquierda: Distribución de segmentos -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">4. Distribución de recamaras (Segmentos)</h5>
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
                                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_segmentos.html" 
                                            width="100%" height="400" frameborder="0" 
                                            style="min-height: 430px; border: 0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Columna derecha: Promedio de precio por segmento -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">5. Distribución de recamaras (General)</h5>
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
                                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/g_bar_promedio_precio_segmento_pachuca.html" 
                                            width="100%" height="400" frameborder="0" 
                                            style="min-height: 430px; border: 0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container-fluid">
                    <div class="row">
                        <!-- Columna izquierda: Distribución de créditos por grupos de edad -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">6. Distribución de baños (segmentos)                                    </h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span class="developer-label">Desarrollador</span>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal6">Descripción</button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal6">Interpretación</button>
                                        </div>
                                    </div>
                                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_creditos_edad.html" 
                                            width="100%" height="400" frameborder="0" 
                                            style="min-height: 430px; border: 0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Columna derecha: Distribución de la población de ciudad por género y rango de edad -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">7. Distribución de baños (Gral)                                    </h5>
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
                                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_piramid_poblacion.html" 
                                            width="100%" height="400" frameborder="0" 
                                            style="min-height: 430px; border: 0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modales para Descripción e Interpretación de la gráfica 6 -->
                <div class="modal fade" id="descriptionModal6" tabindex="-1" aria-labelledby="descriptionModal6Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descriptionModal6Label">Descripción - Distribución de créditos por grupos de edad</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>Esta gráfica muestra la distribución de créditos otorgados por grupos de edad en Pachuca.</li>
                                    <li>Se presentan los datos por rangos de edad de los solicitantes de créditos.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="interpretationModal6" tabindex="-1" aria-labelledby="interpretationModal6Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interpretationModal6Label">Interpretación - Distribución de créditos por grupos de edad</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>La distribución de créditos por grupos de edad refleja las tendencias en la adquisición de propiedades en diferentes etapas de la vida.</li>
                                    <li>Se pueden observar qué grupos de edad son más propensos a solicitar créditos inmobiliarios en Pachuca.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modales para Descripción e Interpretación de la gráfica 7 -->
                <div class="modal fade" id="descriptionModal7" tabindex="-1" aria-labelledby="descriptionModal7Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descriptionModal7Label">Descripción - Distribución de la población por género y rango de edad</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>Esta gráfica muestra la distribución de la población de Pachuca por género y rango de edad.</li>
                                    <li>Se presentan los datos demográficos de la ciudad, categorizados por género y grupos de edad.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="interpretationModal7" tabindex="-1" aria-labelledby="interpretationModal7Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interpretationModal7Label">Interpretación - Distribución de la población por género y rango de edad</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>La distribución de la población por género y rango de edad proporciona información valiosa sobre la estructura demográfica de Pachuca.</li>
                                    <li>Esta información puede ser útil para entender las necesidades de vivienda y las tendencias del mercado inmobiliario en diferentes segmentos de la población.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 

                         

                <div class="container-fluid">
                    <div class="row">
                        <!-- Columna izquierda: Distribución de propiedades por segmento 2022 -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">8. Distribución de estacionamientos (segmentos)                                    </h5>
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
                                        <!-- Aquí puedes agregar el contenido específico para esta gráfica -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Columna derecha: Distribución de propiedades por segmento 2023 -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title subtitle mb-3 text-center">9. Distribución de estacionamientos (gral)</h5>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span class="developer-label">Desarrollador</span>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal11">Descripción</button>
                                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal11">Interpretación</button>
                                        </div>
                                    </div>
                                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" frameborder="0"></iframe>
                                        <!-- Aquí puedes agregar el contenido específico para esta gráfica -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modales para Descripción e Interpretación de los gráficos -->
                <div class="modal fade" id="descriptionModal10" tabindex="-1" aria-labelledby="descriptionModal10Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descriptionModal10Label">Descripción - Distribución de propiedades por segmento 2022</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Agregar descripción aquí -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="interpretationModal10" tabindex="-1" aria-labelledby="interpretationModal10Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interpretationModal10Label">Interpretación - Distribución de propiedades por segmento 2022</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Agregar interpretación aquí -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="descriptionModal11" tabindex="-1" aria-labelledby="descriptionModal11Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descriptionModal11Label">Descripción - Distribución de propiedades por segmento 2023</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Agregar descripción aquí -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="interpretationModal11" tabindex="-1" aria-labelledby="interpretationModal11Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="interpretationModal11Label">Interpretación - Distribución de propiedades por segmento 2023</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Agregar interpretación aquí -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- end row -->

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