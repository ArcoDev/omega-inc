<?php

    if(!empty($_POST['btnIngresar'])) {
        if (empty($_POST['email']) && empty($_POST['password'])) {
            echo "Todos los campos son obligatorios!!!";
        } else {
            # code...
        }
        
    }