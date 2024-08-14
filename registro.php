<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0 "> 
    <title>REGISTRO DE EMPLEADOS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        .container{
            width: 600px;
        }
        .bigicon {
            font-size: 35px;
            color: #36A0FF;
        }
    </style>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap5/css/menu.css">
</head>
<body>
    <?php include "menu.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-6" style="align-items: center;">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                            <legend class="text-center header"style="color:black">
                                <h1>Registrar Empleado</h1>
                            </legend>
                    </fieldset>
                            <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
                                        </div>
                                        <input id="lname" name="usuario" type="text" placeholder="Nombre de Usuario" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
                                        </div>
                                        <input id="lname" name="password" type="password" placeholder="Ingresar Contraseña" class="form-control">
                                    </div>
                                </div>
                            <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
                                        </div>
                                        <input id="fname" name="name" type="text" placeholder="Ingresar Nombre" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
                                        </div>
                                        <input id="lname" name="name" type="text" placeholder="Ingresar Apellido" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar bigicon"></i></div>
                                        </div>
                                        <input id="lname" name="direccion" type="date" placeholder="Ingresar Direccion" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope bigicon"></i></div>
                                        </div>
                                        <input id="lname" name="email" type="text" placeholder="Ingresar Correo Electronico" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone-square bigicon"></i></div>
                                        </div>
                                        <input id="lname" name="telefono" type="text" placeholder="Ingresar Telefono" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">

                                        <textarea class="form-control" id="message" name="message" placeholder="Escribenos tus dudas y sugerencias" rows="7"></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-12 mb-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                                </div>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>