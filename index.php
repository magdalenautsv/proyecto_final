<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mi proyecto</title>
  <!-- Bootstrap core CSS  -->   
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="./bootstrap5/css/menu.css">
  <script src="bootstrap5/js/carrusel.js"></script>
  <link rel="stylesheet" href="./bootstrap5/css/carrusel.css">
  <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
 </head>

<body>
<div class="content">
      <ul class="section_buttons">
        <li class="btn btn_home">
          <a href="Login.php"><img style="width: 50px;" src="Img/marsys2.png"></a>
        </li>
        <li class="btn btn_home">
          <a class="nav-link active" href="index.php">INICIO</a>
        </li>
        <?php if (!isset($_SESSION["User_Logueado"])) { ?>
          <li class="btn btn_login">
            <a class="nav-link active" href="Login.php">LOGIN</a>
          </li>
        <?php } ?>
        <?php if (isset($_SESSION["User_Logueado"])) { ?>
          <li class="btn btn_producto">
            <a class="nav-link active" href="Producto/index.php">PRODUCTO</a>
          </li>
          <li class="btn btn_login">
            <a class="nav-link active" aria-current="page" href="Empleados/index.php">EMPLEADOS</a>
          </li>
        
        <li class="btn btn_user"><span style="font-size:20px;color:blue; text-align: left;">
            <i class="fa fa-user"></i></span>
          <?php if (!isset($_SESSION["User_Logueado"])) { ?>
            &nbsp
            <b>Iniciar Sesion</b>
          <?php } else {
            echo " &nbsp<b>" . $_SESSION["User_Logueado"] . " &nbsp</b>";
          ?>
          <span style="font-size:20px; color:red;"><i class="fa fa-power-off"></i></span>
          <b><a href="logout.php" style="color:red;"> SALIR </a></b>
<!--           
          <li class="nav-item dropdown; btn btn_home" aria-labelledby="navbarDropdown">
            <a href=""  aria-labelledby="navbarDropdown">DEMO 801</a>
            
          <li><a class="dropdown-item" href="">demo1</a></li>
          <li><a class="dropdown-item" href="">demo2</a></li>

          </li> -->
        </li>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    DEMO 801</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="demo1.php">DEMO 1</a>
                    <a class="dropdown-item" href="demo2.php">DEMO 2</a>
                </div>
            </li>
        </ul>

        <?php } ?>
      <?php  } ?>
      </ul>
    </div>
  <section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target=".carousel" data-slide-to="0" class="active"></li>
      <li data-target=".carousel" data-slide-to="1"></li>
      <li data-target=".carousel" data-slide-to="2"></li>
      <li data-target=".carousel" data-slide-to="3"></li>
    </ol>

    <!-- Imagenes para el Carrusel -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Img/papeleria.jpg">
        <div class="carousel-caption">Imagen 1</div>
      </div>
      <div class="item">
        <img src="Img/507.jpg">
        <div class="carousel-caption">Imagen 2</div>
      </div>
      <div class="item">
        <img src="Img/impresora.png">
        <div class="carousel-caption">impresora</div>
      </div>
      <div class="item">
        <img src="Img/art.png">
        <div class="carousel-caption">articulos</div>
      </div>
      <div class="item">
        <img src="Img/libreta.jpg">
        <div class="carousel-caption">libtetas kiut</div>
      </div>
      <div class="item">
        <img src="Img/plumones.jpg">
        <div class="carousel-caption">img2</div>
      </div>
      <div class="item">
        <img src="Img/marcadores.jpg">
        <div class="carousel-caption">marcadores</div>
      </div>
      <div class="item">
        <img src="Img/crayolas.jpg">
        <div class="carousel-caption">crayolas</div>
      </div>
      <div class="item">
        <img src="Img/papeleria01.jpg">
        <div class="carousel-caption">Paquete Articulos #2</div>
      </div>
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Geri</span>
    </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">İleri</span>
    </a>
  </div>
</section>

    <footer style="color:black; font-size:16pt;color:yellow; text-align: center; "><span style="font-size:24px;color:red;">
      Marsys administrando tu economia.</span>
  </footer>

  <script src="bootstrap5/js/jquery-1.10.2.js"></script>
  <script src="bootstrap5/js/bootstrap.min.js"></script>
  <script src="bootstrap5/js/funciones.js"></script>
</body>

</html>