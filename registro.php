<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center caja-login">
        <div class="card text-center card-login shadow-lg">
            <div class="card-header w-100 bg-white d-flex align-items-center justify-content-between">
                <div class="contenedor-titulo">
                    <h1>Registro de usuarios:</h1>
                </div>
                <div class="contenedor-img">
                    <img src="logos\logo_01.bmp" class="mx-auto d-block img-thumbnail img-login">
                </div>
            </div>
            <form method="post" action="">
                <?php
                include("./includes/conection.php");
                include("./includes/controller.php");
                ?>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label float-start">Email address</label>
                        <input type="email" name="email" class="form-control" id="inputEmail"
                            aria-describedby="emailHelp" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label float-start">Nombre</label>
                        <input type="text" name="name" class="form-control" id="inputEmail"
                            aria-describedby="nameHelp" placeholder="Nombre Usuario">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label float-start">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword"
                            placeholder="Password">
                    </div>
                </div>
                <div class="card-footer text-muted d-flex justify-content-end">
                    <input name="btnRegistrar" type="submit" value="Registrar Usuario" class="btn btn-primary btn-lg">
                    </input>
                </div>
            </form>
        </div>
    </div>

    <!-- Incluimos los scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>