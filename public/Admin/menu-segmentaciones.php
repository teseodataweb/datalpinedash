<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>


    <title>Menú | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

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
                <!--<div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Segmentaciones de mercado</h4>
                            <div></div> 
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menú</a></li>
                                    <li class="breadcrumb-item active">Segmentaciones de mercado</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- end page title -->

                <!-- Segmentaciones de mercado -->
                <div class="row align-items-center"
                    style="border: 1px solid #86ADFF; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
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
                        <h1>Segmentaciones de mercado</h1>
                    </div>
                    <div style="border-top: 1px solid #86ADFF; padding-top: 10px;">
                        <p style="font-size: 18px; line-height: 1.5; color: #444;">Para comprender mejor el dinámico y
                            amplio
                            mercado inmobiliario, se desarrolla una clasificación por segmentos (S, A, B, C, D, E)
                            basada en
                            la
                            oferta de precios de las viviendas. Dicha segmentación proporciona una visión rápida y clara
                            que
                            facilita el análisis de las opciones actuales disponibles, que van desde propiedades
                            asequibles
                            hasta lujosas residencias. ¡Descubre el rango de posibilidades que el mercado tiene para
                            ofrecer!
                        </p>
                        <div class="row align-items-center"
                            style="border: 1px solid #C0D5FF; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="modal-body">
                                <?php
                                echo "<li style='font-size: 20px;'>Clasificación de mercado</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-10 col-md-3 table-responsive">
                                        <table class="table table-sm">
                                            <tr class="table-primary">
                                                <th style="color: blue;" scope="col" colspan="2" class="text-center">E
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">E1</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        <$500K </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">E2</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $500k - $750K</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">E3</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $750K - $1M</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-10 col-md-3 table-responsive">
                                        <table class="table table-sm">
                                            <tr class="table-primary">
                                                <th style="color: purple;" scope="col" colspan="2" class="text-center">D
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">D1</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $1M - $1.25M </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">D2</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $1.25M - $1.5M</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">D3</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $1.5M - $1.75M</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-10 col-md-3 table-responsive">
                                        <table class="table table-sm">
                                            <tr class="table-primary">
                                                <th style="color: green;" scope="col" colspan="2" class="text-center">C
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">C1</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $1.75M - $2M </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">C2</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $2M - $2.25M</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-2 py-3">C3</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $2.25M - $2.5M</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-10 col-md-3 table-responsive">
                                        <table class="table table-sm">
                                            <tr class="table-primary">
                                                <th style="color: orange;" scope="col" colspan="2" class="text-center">B
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-left px-2 py-3">B1</th>
                                                    <td class="text-center" style="background-color: #FAFBFE;"> $2.5M -
                                                        $2.75M </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left px-2 py-3">B2</th>
                                                    <td class="text-center" style="background-color: #FAFBFE;"> $2.75M -
                                                        $3M
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-left px-2 py-3">B3</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">$3M
                                                        - $3.25M</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-10 col-md-3 table-responsive">
                                        <table class="table table-sm">
                                            <tr class="table-primary">
                                                <th style="color: red;" scope="col" colspan="2" class="text-center">A
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center px-2 py-3" scope="row">A1</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $3.25M - $3.5M </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-1 py-3">A2</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $3.5M - $3.75M</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-1 py-3">A3</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $3.75M - $4M</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-10 col-md-3 table-responsive">
                                        <table class="table table-sm">
                                            <tr class="table-primary">
                                                <th style="color: black;" scope="col" colspan="2" class="text-center">S
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center px-2 py-3" scope="row">S1</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $4M - $6M </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-1 py-3">S2</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">
                                                        $6M - $8M</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center px-1 py-3">S3</th>
                                                    <td class="text-center px-2 py-3"
                                                        style="background-color: #FAFBFE;">$8M
                                                        - $12M</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the same structure for other tables -->
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

<script src="assets/js/app.js"></script>

</body>

</html>