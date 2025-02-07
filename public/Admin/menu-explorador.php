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
                            <h4 class="mb-sm-0 font-size-18">Explorador de valuación y precios</h4>
                            <div></div> 
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menú</a></li>
                                    <li class="breadcrumb-item active">Explorador de valuación y precios</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>-->
                <!-- end page title -->

                <!-- Explorador de valuación y precios -->
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
                        <h1>Explorador de valuación y precios
                    </div>
                    <div style="border-top: 1px solid #86ADFF; padding-top: 10px;">
                        <p style="font-size: 18px; line-height: 1.5; color: #444;">Estamos trabajando diligentemente
                            para brindarte una experiencia única y enriquecedora. Mantente al tanto, ¡pronto estará
                            lista para ti!
                        </p>
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

<script src="assets/libs/fullcalendar/index.global.min.js"></script>

<!-- Calendar init -->
<script src="assets/js/pages/calendar.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>