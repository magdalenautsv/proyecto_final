<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Panel de Administración</title>
    <link href="./bootstrap5/css/styles.css" rel="stylesheet" />
    <link href="./bootstrap5/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="./bootstrap5/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./bootstrap5/css/cardpanel.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light" style='background-color: #e3f2fd;'>
        <a class="navbar-brand" href="index.php">MARSYS</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i><?php echo  $_SESSION["User_Logueado"]; ?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" style='background-color: #e3f2fd; color : black;'>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="clientes/">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Clientes
                        </a>
                        <a class="nav-link" href="ventas/">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Ventas
                        </a>
                        <a class="nav-link" href="ventas/listaventas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Ver Ventas
                        </a>
                        <a class="nav-link" href="Producto/index.php">
                            <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
                            Productos
                        </a>
                        <a class="nav-link" href="Empleados/index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Empleados
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid mt-2">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray">Panel de Administración</h1>
                    </div>
                    <div class="container">
                        <a href="ventas/">
                            <div class="card" id="ventas"></div>
                        </a>
                        <a href="Producto/index.php">
                            <div class="card" id="productos"></div>
                        </a>
                        <a href="Empleados/index.php">
                            <div class="card" id="empleados"></div>
                        </a>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"><br></div>
                        <div>
                            <a href="#"><br></a>
                            &middot;
                            <a href="#"><br></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="./bootstrap5/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="./bootstrap5/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./bootstrap5/js/scripts.js"></script>
    <script src="./bootstrap5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="./bootstrap5/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="./bootstrap5/js/sweetalert2.all.min.js"></script>
    <script src="./bootstrap5/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="./bootstrap5/js/Chart.bundle.min.js"></script>
    <script src="./bootstrap5/js/funciones.js"></script>
</body>

</html>