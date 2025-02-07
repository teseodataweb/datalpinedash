<?php
// Include config file
require_once "layouts/config.php";

// Define variables and initialize with empty values
$useremail = $username =  $password = $confirm_password = "";
$useremail_err = $username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate useremail
    if (empty(trim($_POST["email"]))) {
        $useremail_err = "Por favor ingrese un correo electrónico de usuario.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $useremail_err = "Formato de correo inválido";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM usuarios WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            // Set parameters
            $param_useremail = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $useremail_err = "Este correo electrónico de usuario ya está en uso.";
                } else {
                    $useremail = trim($_POST["email"]);
                }
            } else {
                echo "¡Ups! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
            
        }
    }

    // Validate username
    if (empty(trim($_POST["nombre"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["nombre"]);
    }

    // Validate password
    if (empty(trim($_POST["contraseña"]))) {
        $password_err = "Porfavor ingrese una contraseña.";
    } elseif (strlen(trim($_POST["contraseña"])) < 6) {
        $password_err = "La contraseña debe tener al menos 6 caracteres.";
    } else {
        $password = trim($_POST["contraseña"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Por favor ingrese una contraseña de confirmación.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "La contraseña no coincidió.";
        }
    }

    // Check input errors before inserting in database
    if (empty($useremail_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO usuarios (nombre, email, contraseña, tipo_usuario) VALUES (?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_useremail, $param_password, $param_typeuser);

            // Set parameters
            $param_username = $username;
            $param_useremail = $useremail;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_typeuser="usuario";

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: index.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Registro | Datalpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="index.php" class="d-block auth-logo">
                                    <img src="assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">DatAlpine</span>
                                </a>
                            </div>
                            
                                <!--<script>
                                    // Función para mostrar el pop-up
                                    function showPopup() {
                                        document.getElementById("popup").style.display = "block";
                                        document.querySelector(".auth-content").style.display = "none"; // Oculta el div principal
                                    }

                                    // Función para ocultar el pop-up
                                    function closePopup() {
                                        document.getElementById("popup").style.display = "none";
                                        document.querySelector(".auth-content").style.display = "block"; // Muestra el div principal
                                    }

                                    // Ocultar el pop-up al cargar la página
                                    window.onload = function() {
                                        closePopup();
                                    };
                                </script>-->

                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Registro de usuario</h5>
                                    <p class="text-muted mt-2"></p>
                                </div>
                                <form class="needs-validation mt-4 pt-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb-3 <?php echo (!empty($useremail_err)) ? 'has-error' : ''; ?>">
                                        <label for="useremail" class="form-label">Correo Electrónico:</label>
                                        <input type="email" class="form-control" id="useremail" placeholder=" Ingresa una dirección de correo electrónico" required name="email" value="<?php echo $useremail; ?>">
                                        <span class="text-danger"><?php echo $useremail_err; ?></span>
                                    </div>

                                    <div class="mb-3 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                        <label for="username" class="form-label">Nombre de usuario:</label>
                                        <input type="text" class="form-control" id="username" placeholder="Usuario" required name="nombre" value="<?php echo $username; ?>">
                                        <span class="text-danger"><?php echo $username_err; ?></span>
                                    </div>

                                    <div class="mb-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                        <label for="userpassword" class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Contraseña" required name="contraseña" value="<?php echo $password; ?>">
                                        <span class="text-danger"><?php echo $password_err; ?></span>
                                    </div>

                                    <div class="mb-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                        <label class="form-label" for="userpassword">Confirmar contraseña:</label>
                                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirmar contraseña" name="confirm_password" value="<?php echo $confirm_password; ?>">
                                        <span class="text-danger"><?php echo $confirm_password_err; ?></span>
                                    </div>                                                                        
                                    <!--
                                    <div class="mb-4">
                                        <p class="mb-0">Acepto los <a href="#" class="text-primary" onclick="showPopup()">Términos y condiciones</a></p>
                                    </div>
                                    -->
                                    <div class="mb-4">
                                        <p class="mb-0">Acepto los <a href="popup.php" class="text-primary">Términos y condiciones</a></p>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Registrarse</button>
                                    </div>
                                </form>
                                
                                
                                <div class="mt-4 pt-2 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 text-muted fw-medium"></h5>
                                    </div>

                                    <!-- <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>

                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">¿Ya tienes una cuenta? <a href="auth-login.php" class="text-primary fw-semibold"> Iniciar sesión</a> </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> DatAlpine<i class="mdi mdi-heart text-danger"></i> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <!-- end carouselIndicators -->
                                    <!-- <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="testi-contain text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                <h4 class="mt-4 fw-medium lh-base text-white">“I feel confident
                                                    imposing change
                                                    on myself. It's a lot more progressing fun than looking back.
                                                    That's why
                                                    I ultricies enim
                                                    at malesuada nibh diam on tortor neaded to throw curve balls.”
                                                </h4>
                                                <div class="mt-4 pt-3 pb-5">
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-1.jpg" class="avatar-md img-fluid rounded-circle" alt="...">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3 mb-4">
                                                            <h5 class="font-size-18 text-white">Richard Drews
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Web Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- end carousel-inner -->
                                </div>
                                <!-- end review carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>


<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- validation init -->
<script src="assets/js/pages/validation.init.js"></script>

</body>

</html>