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

    if(!empty($_POST['btnRegistrar'])) {
        if (empty($_POST['email']) && empty($_POST['password']) && empty($_POST['name'])) {
            echo '<div class="alert alert-danger mt-2">Todos los campos con obligatorios!!!</div>';
        } else {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $pass = $_POST['password'];
            $sql = $conection->query("INSERT INTO usuarios (correo, nombre, contrasena) VALUES ('$email', '$name', '$pass')");
            if ($sql === true) {
                echo '<div class="alert alert-danger mt-2">Se ha guardado correctamente!!!</div>';
            } else {
                echo '<div class="alert alert-danger mt-2">No se pudo guardar, verifica los datos!!!</div>';
            }
        }
    }