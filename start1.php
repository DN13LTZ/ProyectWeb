<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyect X - Inicio</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/lockscreen-bg.jpg" alt="kali" style="width: 420px; height: 510px;">
                            </div>
                            <div class="col-lg-7">
                                <div class="p-5">
                        <?php
                        if(isset($_GET['estado'])){
                            $estado = $_GET['estado'];
                            if($estado==1){
                                ?>
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Usuario Creado Correctamente</span>
                                </a>
                                <?php
                            }
                            if($estado==2){
                                ?>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Correo / Contraseña Incorrectos</span>
                                    </a>
                                <?php
                            }
                            if($estado==3){
                                ?>
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Contraseña Actualizada</span>
                                </a>
                                <?php
                            }
                        }
                        ?><hr>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Ingresa a tu Usuario</h1>
                                    </div>
                                    <form class="user" action="start.php" method="POST">
                                        <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Ingrese su Correo Electronico" name="correo" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Ingrese su Contraseña"
                                                name="pass1" required>
                                        </div><hr>
                                        <button type="submit"
                                            class="btn btn-primary btn-user btn-block">INGRESAR</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p class="small">No Tienes Cuenta? <a href="register1.php"> Crea tu Cuenta</a></p>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="resetpass.php">Has Olvidado tu Contraseña</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>