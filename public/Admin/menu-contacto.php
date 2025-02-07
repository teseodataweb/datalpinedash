<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Menú | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: #fff;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin: 20px;
        overflow: hidden;
    }

    .circle:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    }

    .circle img {
        width: 60px;
        height: 60px;
        display: block;
        margin: 10px auto;
    }

    .circle span {
        font-size: 12px;
        text-align: center;
        display: block;
        color: #555;
        padding: 5px;
        line-height: 1.2;
    }
</style>
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
                            <h4 class="mb-sm-0 font-size-18">Contacto</h4>
                            <div></div> 
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menú</a></li>
                                    <li class="breadcrumb-item active">Contacto</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- end page title -->

                <!-- Contacto-->

                <div
                    style="text-align: center; margin-top: 20px; background-color: #f9fafb; border-radius: 20px; padding: 30px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h1 style="font-size: 36px; font-family: 'Arial', sans-serif; color: #333; margin-bottom: 20px;">
                        ¿Necesitas ayuda? ¡Estamos aquí para ti!
                    </h1>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <p style="font-size: 20px; font-family: 'Arial', sans-serif; color: #666; margin-bottom: 30px;">
                            Tu satisfacción es nuestra prioridad número uno. No dudes en contactarnos para cualquier
                            consulta o asistencia que necesites.
                        </p>
                        <div class="container">
                            <div class="circle">
                                <a href="tel:7713306407" style="text-decoration: none; color: #333;">
                                    <img src="assets/images/contacto/phone.png" alt="Icono de teléfono">
                                    <span>(771) 330 64 07</span>
                                </a>
                            </div>
                            <div class="circle">
                                <a href="mailto:contacto@datalpine.mx" style="text-decoration: none; color: #333;">
                                    <img src="assets/images/contacto/gmail.png" alt="Icono de correo">
                                    <span>Envíanos un correo</span>
                                </a>
                            </div>
                            <div class="circle">
                                <div>
                                    <a href="https://www.google.com/maps/place/pachuca+soto+hidalgo/data=!4m2!3m1!1s0x85d1a7716f1e038b:0x13315c101496b749?sa=X&ved=1t:155783&ictx=111"
                                        style="text-decoration: none; color: #333;">
                                        <img src="assets/images/contacto/map.png" alt="Icono de ubicación">
                                        <span>Pachuca de Soto, Hidalgo</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 30px;">
                            <a href="https://www.facebook.com/profile.php?id=61552173002247"
                                style="text-decoration: none; color: #333; margin-right: 20px;">
                                <img src="assets/images/contacto/facebook.png" alt="Icono de Facebook"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <a href="https://twitter.com/DatAlpine"
                                style="text-decoration: none; color: #333; margin-right: 20px;">
                                <img src="assets/images/contacto/twitter.png" alt="Icono de Twitter"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <a href="https://www.instagram.com/DatAlpine/"
                                style="text-decoration: none; color: #333; margin-right: 20px;">
                                <img src="assets/images/contacto/instagram.png" alt="Icono de Instagram"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <a href="https://www.tiktok.com/@datalpine?_t=8l1AW0atban&_r=1"
                                style="text-decoration: none; color: #333;">
                                <img src="assets/images/contacto/tiktok.png" alt="Icono de TikTok"
                                    style="width: 40px; height: 40px;">
                            </a>
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

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    </body>

    </html>