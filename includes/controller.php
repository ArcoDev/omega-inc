<?php

    if(!empty($_POST['btnIngresar'])) {
        if (empty($_POST['email']) && empty($_POST['password'])) {
            echo '<div class="alert alert-danger mt-2">Todos los campos con obligatorios!!!</div>';
        } else {
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $sql = $conection->query(" select * from usuarios where correo = '$email' and contrasena = '$pass'");
            if ($data = $sql->fetch_object()) {
                header("location:index.html");
            } else {
                echo '<div class="alert alert-danger mt-2">Acceso denegado!!!</div>';
            }
        }
    }