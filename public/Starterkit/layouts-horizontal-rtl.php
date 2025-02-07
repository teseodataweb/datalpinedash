<?php include 'layouts/session.php'; ?>
<?php 
require_once ("./assets/lang/en.php");
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <title>Horizontal Rtl Layout | Minia - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="light" data-layout="horizontal">

<?php include 'layouts/head-main.php'; ?>
    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php include 'layouts/horizontal-menu.php'; ?>

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
                                <h4 class="mb-sm-0 font-size-18">Horizontal</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                        <li class="breadcrumb-item active">Horizontal</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


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

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <!-- dashboard init -->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>