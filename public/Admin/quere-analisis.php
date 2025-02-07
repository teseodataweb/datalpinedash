<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Queretaro | DatAlpine</title>
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Querétaro</a></li>
                                    <!--<li class="breadcrumb-item active">Pachuca</li>-->
                                </ol>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Análisis de Segmentos y Precios -->
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
                    <h1>Análisis de Segmentos y Precios</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
                <!--1. Segmentos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                                1. Segmentos<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!--1.1 Distribución de segmentos -->
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.1 Distribución de segmentos</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src=""
                        
                        /graficas/g_bar_distsegmentos_pachuca.html" 
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                            <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description', 'interpretación',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretación', 'description',this)">Interpretación</button>
                        </div> 
                        <!-- Descripción -->
                        <div class="description" id="description" style="display: none;">
                            <p class="text">
                                Distribución de segmentos. Conoce la participación en el mercado
                                inmobiliario por segmentos (S, A, B, C, D, E). Cada sección representa el
                                porcentaje o proporción en ese segmento específico en relación con el total.
                            </p>
                        </div>
                    </div>
                    <div class="interpretation" id="interpretación" style="display: none;">
                        <p class="text">
                            La gráfica revela una distribución variada de propiedades en diferentes
                            rangos de precios en el mercado inmobiliario. El análisis del comportamiento
                            de cada segmento y sus subsegmentos revela patrones interesantes en el
                            mercado inmobiliario.</p>
                        <ul class="text">
                            <li><strong>Segmento E:</strong> El subsegmento <strong>E1</strong> es el
                                más destacado, mientras que <strong>E2 y E3</strong>
                                tienen una menor representación, indicando una demanda más limitada en
                                los rangos de precios más altos.</li>
                            <li><strong>Segmento B:</strong> Los subsegmentos <strong>B1, B2 y
                                    B3</strong> ofrecen una variedad de
                                opciones para compradores con presupuestos variados, mostrando una
                                distribución equilibrada de propiedades en diferentes rangos de precios.
                            </li>
                            <li><strong>Segmento D:</strong> Aunque <strong>D1</strong> muestra una
                                presencia notable, <strong>D2 y D3</strong> tienen una
                                representación más baja, sugiriendo una demanda relativamente menor en
                                los rangos de precios más altos.</li>
                            <li><strong>Segmento C:</strong> Los subsegmentos <strong>C1, C2 y
                                    C3</strong> muestran una distribución
                                uniforme, reflejando estabilidad en la demanda en la gama media del
                                mercado.</li>
                            <li><strong>Segmento A:</strong> <strong>A1, A2 y A3</strong> tienen una
                                representación similar, indicando una
                                demanda estable en los rangos de precios más altos..</li>
                            <li><strong>Segmento S:</strong> Este segmento no está dividido en
                                subsegmentos, siendo <strong>S1</strong> el
                                más prominente.</li>
                        </ul>
                        <p class="text">
                            Mientras que los segmentos S y B muestran una fuerte presencia en los
                            extremos de la escala de precios, los segmentos D, C, A y E muestran una
                            distribución más equilibrada en sus respectivos subsegmentos. Esta
                            información nos permite entender las tendencias de demanda y adaptar
                            estrategias de comercialización y desarrollo de propiedades en consecuencia.
                        </p>
                    </div>


                    <!--1.2 Distribución por M2 construcción por rango -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>1.2 Distribución por M2 construcción por rango</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                    value="Segmentos">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                    value="General">
                            </div>
                        </div>
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_dist_m2_construidos_pachuca.html"
                                    id="contenido1"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_dist_m2_construidos_pachuca.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div>
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1', 'interpretació1n',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretació1n', 'description1',this)">Interpretación</button>
                        </div> 
                        <!-- Explicación de la gráfica -->
                        <!-- Descripción -->
                        <div class="description" id="description1" style="display: none;">
                            <p class="text">
                                Distribución por M2 de construcción por rango para las
                                propiedades
                                en
                                diferentes segmentos (S, A, B, C, D, E).
                                En función de la cantidad de metros cuadrados de construcción,
                                observa cómo
                                se agrupan las viviendas según su tamaño disponible permitiendo
                                una
                                visión
                                rápida y clara de cómo se distribuyen y cuales son más
                                predominantes
                                en un
                                cierto mercado inmobiliario.
                            </p>
                            <ul class="text">
                                <li>Si una barra es alta, significa que hay muchas propiedades
                                    que
                                    tienen un
                                    tamaño de construcción dentro de ese rango específico.</li>
                                <li>Si una barra es baja, existen menos propiedades en ese rango
                                    en
                                    particular.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="interpretation" id="interpretació1n" style="display: none;">
                        <ul class="text">
                            <li><strong>Segmento S:</strong> Posee una alta concentración de
                                propiedades con
                                un
                                tamaño de
                                construcción mayor a los <strong>300 m2</strong>.</li>
                            <li><strong>Segmento A:</strong> Tiene una cantidad significativa de
                                propiedades
                                de
                                <strong>0-100m2
                                    de construcción</strong>.
                            </li>
                            <li><strong>Segmento B:</strong> Destaca las propiedades con 100-150m2,
                                seguido
                                de
                                <strong>150-200m2
                                    de construcción</strong>.
                            </li>
                            <li><strong>Segmento C:</strong> Las mayores concentraciones son en
                                200-250m2,
                                seguido de
                                <strong>150-200m2 de construcción</strong>.
                            </li>
                            <li><strong>Segmento D:</strong> Posee los valores más cercanos a la
                                media
                                presupuestal y
                                tiene una distribución equitativa. Destaca las propiedades
                                con
                                un tamaño
                                de construcción mayor a los <strong>200-250M2</strong> y mayor a
                                <strong>300M2 de
                                    construcción</strong>.
                            </li>
                            <li><strong>Segmento E:</strong> Tiene pocos terrenos en m2 de
                                construcción en
                                todos
                                los
                                rangos. Esto podría indicar que este segmento tiene una
                                oferta
                                limitada
                                de terrenos debido a su poco valor en el mercado.</li>
                        </ul>
                    </div>
                </div>
                <!-- 2. Precio promedio por M2 totales -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                                2. Precio promedio por M2 totales<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromedio-x-M2_pachuca.html"
                            width="800" height="520" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2', 'interpretació1n2',this)">Descripción</button>
                            <button class="mostrar" onclick="toggleDescription('interpretació1n2', 'description2',this)">Interpretación</button>
                        </div> 

                        <!-- Descripción -->
                        <div class="description" id="description2" style="display: none;">
                            <p class="text">
                                Este análisis visual presenta la variación en costos por metro cuadrado
                                en distintos segmentos inmobiliarios. Se observa un aumento progresivo
                                de los valores a medida que se avanza de un rango a otro, proporcionando
                                una representación concisa de las tendencias de precios en diferentes
                                dimensiones de propiedades.
                            </p>
                        </div>
                    </div>
                    <div class="interpretation" id="interpretació1n2" style="display: none;">
                        <p class="text">
                            La gráfica presenta los precios promedio por metro cuadrado en
                            diferentes rangos, ofreciendo una perspectiva clara de la variación de
                            costos en el mercado inmobiliario. Desde <strong>$17,784</strong> en el
                            rango de <strong>0-100</strong>
                            metros cuadrados hasta <strong>$19,652</strong> para propiedades que
                            superan los <strong>300
                                metros</strong> cuadrados, la visualización destaca la evolución de
                            los precios a
                            medida que aumenta la dimensión de las propiedades.</p>
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

<!-- jquery-knob plugin  -->
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
<!-- jquery-knob init -->
<script src="assets/js/pages/jquery-knob.init.js"></script>

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