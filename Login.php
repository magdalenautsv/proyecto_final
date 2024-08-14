<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../bootstrap5/css/magda.css">
    <title>.::: Login ::::.</title>
    <style>
        body {
            background-image: url("Img/papeleria.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>
<body>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <form class="form-horizontal" action="#" method="post">
                                    <div class="card-header text-center">
                                        <img class="img-thumbnail" src="img/MarSys.jpg" width="200">
                                        <h3 class="font-weight-light my-4">Iniciar Sesión</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label class="medium mb-2" for="email"><i class="fas fa-user"></i> Usuario: </label>
                                            <input type="text" class="form-control" id="usuario" name="usuario">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="medium mb-2" for="pwd"><i class="fas fa-key"></i> Password:</label>
                                            <input type="password" class="form-control" id="pwd" name="password">
                                        </div>
                                        <div class="mb-3" style="text-align : center;">
                                            <button type="submit" name="ingresar" class="btn btn-primary">Ingresar</button>
                                            <a href="index.php" class="btn btn-primary" role="button">Regresar</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php
    if (isset($_POST["ingresar"])) {
        require("db_connection.php");

        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        echo $user, $pass;
        $query = "SELECT * FROM empleados WHERE Usuario = '" . $user . "' AND Contra = '" . $pass . "'";
        $login = $con->query($query);

        if ($login->num_rows > 0) {
            $row = mysqli_fetch_assoc($login);
            $_SESSION["User_Logueado"] = $row["Nombre"];
            $_SESSION["idUser"] = $row["Id_Empleado"];

            header("location:paneladmin.php");
        } else {
            echo "Acceso Denegado";
        }
    }
    ?>
</body>

</html>