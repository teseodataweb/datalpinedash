<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Inicio | DatAlpine</title>

    <?php include 'layouts/head.php'; ?>

    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <?php include 'layouts/head-style.php'; ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/datalpine/public/Admin/assets/images/index_image.png') no-repeat center center;
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: #ffffff;
            /* Blanco */
            animation: fadeInDown 1s ease-in-out;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Añadir sombra al texto */
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #E0E0E0;
            animation: fadeInUp 1.5s ease-in-out;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Añadir sombra al texto */
            line-height: 1.5; /* Mejorar el espaciado entre líneas */
        }

        .hero-section .btn-primary {
            background-color: #9500ff;
            border-color: #9500ff;
            color: white;
            font-size: 1.5rem;
            padding: 15px 30px;
            border-radius: 50px;
            text-transform: uppercase;
            animation: pulse 2s infinite;
        }
        .hero-section .listo{
            font-size: 2rem;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        #services .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border: none;
            text-align: center;
            background: linear-gradient(135deg, #f3f3f3, #ffffff);
        }

        #services .card:hover {
            transform: translateY(-10px);
        }

        #services .card h3 {
            font-size: 1.5rem;
            margin-top: 15px;
            color: #333;
        }

        #services .card p {
            font-size: 1rem;
            color: #666;
        }

        #services .card i {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        #market-chart {
            width: 100%;
            height: 400px;
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

                <!-- start page title 
                 <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">                            
                            <h4 class="mb-sm-0 font-size-18">Inicio</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">DatAlpine</a></li>
                                    <li class="breadcrumb-item active">Inicio</li>
                                </ol>
                            </div>  

                        </div>
                    </div>
                </div>                
                -->
                
                <!-- end page title -->
                <header class="hero-section">
                    <div>
                        <h1>¡Bienvenido!</h1>
                        <!--<p class="listo">Tu aliado en la toma de decisiones inteligentes en el mercado inmobiliario mexicano.</p>-->
                        <p>¿Preparado para cambiar tu enfoque en el mercado inmobiliario mexicano?</p>
                        <a href="#services" class="btn btn-primary btn-lg">Descubre Más</a>
                    </div>
                </header>                
                <section id="services" style="padding: 35px 0; background-color: #f8f9fa;">
                    <div class="container">
                        <div class="row d-flex align-items-stretch">
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <i class="fas fa-chart-line" style="color: #2962ff;"></i>
                                        <h3 class="card-title">Análisis Detallado</h3>
                                        <p class="card-text">Ofrecemos un análisis detallado y personalizado del mercado inmobiliario en México.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <i class="fas fa-map-marked-alt" style="color: #9500ff;"></i>
                                        <h3 class="card-title">Segmentación de Mercado</h3>
                                        <p class="card-text">Proporcionamos información precisa para tomar decisiones estratégicas con confianza.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <i class="fas fa-home" style="color: #4225CF;"></i>
                                        <h3 class="card-title">Tendencias de Precios</h3>
                                        <p class="card-text">Desde tendencias de precios hasta segmentación de mercado, te proporcionamos la información que necesitas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
                <div class="row card-group-row">
                    <!-- Tabla 1: Ciudades para invertir -->
                    <div class="col-lg-4 col-md-6 card-group-row__col">
                        <div class="card card-group-row__card">
                            <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                <div class="flex">
                                    <div class="card-header__title mb-2" style="color: #ff0059; font-size: 24px;">Top
                                    </div>
                                    <div class="card-header__title mb-1" style="font-size: 20px;"> <strong> Ciudades
                                            para invertir</strong></div>
                                    <div class="text" style="color: #2962ff; font-size: 16px;"> En el último año</div>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center"
                                style="margin-bottom: 20px;">
                                <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ciudad</th>
                                                <th>Valor</th>
                                                <th>Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pachuca</td>
                                                <td>643</td>
                                                <td>5.00%</td>
                                            </tr>
                                            <tr>
                                                <td>Durango</td>
                                                <td>322</td>
                                                <td>4.70%</td>
                                            </tr>
                                            <tr>
                                                <td>Veracruz</td>
                                                <td>234</td>
                                                <td>60.6%</td>
                                            </tr>
                                            <tr>
                                                <td>San Luis Potosí</td>
                                                <td>78</td>
                                                <td>11.1%</td>
                                            </tr>
                                            <tr>
                                                <td>Tlaxcala</td>
                                                <td>45</td>
                                                <td>15.8%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabla 2: Crecimiento en población -->
                    <div class="col-lg-4 col-md-6 card-group-row__col">
                        <div class="card card-group-row__card">
                            <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                <div class="flex">
                                    <div class="card-header__title mb-2" style="color: #ff0059; font-size: 24px;">Top
                                    </div>
                                    <div class="card-header__title mb-1" style="font-size: 20px;"> <strong> Crecimiento
                                            en población</strong></div>
                                    <div class="text" style="color: #2962ff; font-size: 16px;"> En el último año</div>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center"
                                style="margin-bottom: 20px;">
                                <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ciudad</th>
                                                <th>Población</th>
                                                <th>Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pachuca</td>
                                                <td>686,708</td>
                                                <td>54.61%</td>
                                            </tr>
                                            <tr>
                                                <td>Durango</td>
                                                <td>720,626</td>
                                                <td>23.76%</td>
                                            </tr>
                                            <tr>
                                                <td>Veracruz</td>
                                                <td>939,046</td>
                                                <td>12.60%</td>
                                            </tr>
                                            <tr>
                                                <td>San Luis Potosí</td>
                                                <td>1,317,239</td>
                                                <td>26.41%</td>
                                            </tr>
                                            <tr>
                                                <td>Tlaxcala</td>
                                                <td>1,411,572</td>
                                                <td>14.80%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabla 3: Crecimiento en vivienda -->
                    <div class="col-lg-4 col-md-6 card-group-row__col">
                        <div class="card card-group-row__card">
                            <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                <div class="flex">
                                    <div class="card-header__title mb-2" style="color: #ff0059; font-size: 24px;">Top
                                    </div>
                                    <div class="card-header__title mb-1" style="font-size: 20px;"> <strong> Crecimiento
                                            en vivienda </strong></div>
                                    <div class="text" style="color: #2962ff; font-size: 16px;"> En el último año</div>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center"
                                style="margin-bottom: 20px;">
                                <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ciudad</th>
                                                <th>Viviendas</th>
                                                <th>Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pachuca</td>
                                                <td>199,376</td>
                                                <td>45.00%</td>
                                            </tr>
                                            <tr>
                                                <td>Durango</td>
                                                <td>493,698</td>
                                                <td>21.10%</td>
                                            </tr>
                                            <tr>
                                                <td>Veracruz</td>
                                                <td>423,759</td>
                                                <td>10.53%</td>
                                            </tr>
                                            <tr>
                                                <td>San Luis Potosí</td>
                                                <td>774,658</td>
                                                <td>21.00%</td>
                                            </tr>
                                            <tr>
                                                <td>Tlaxcala</td>
                                                <td>341,577</td>
                                                <td>24.57%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <section id="analytics" style="padding: 50px 0;">
                        <div class="container">
                            <h2 class="text-center">Inteligencia de Mercado Personalizada</h2>
                            <p class="text-center">DatAlpine ofrece un análisis detallado y personalizado de tendencias,
                                precios y segmentación del mercado inmobiliario en México, proporcionando a los usuarios
                                información precisa para tomar decisiones estratégicas.</p>
                            <div class="row" style="align:center">
                                <div class="col-lg-12">
                                    <canvas id="market-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                </div><!-- end row -->

            </div>
            <!-- container-fluid -->
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

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('market-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pachuca', 'Tulancingo', 'Puebla', 'Querétaro'],
            datasets: [{
                label: 'Ventas por Ubicación',
                data: [75, 55, 85, 85],
                backgroundColor: ['#2962ff', '#9500ff', '#ff0059', '#ff8c00']
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>

</html>