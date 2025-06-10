<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // Crear usuarios manualmente
    $usuarios = [
        "admin" => ["password"=>"123456","rol"=>"Administrador","estado"=>true],
        "miguel" => ["password"=>"654321","rol"=>"Normal","estado"=>false]
    ];
    // Condicion logica
    // Verificacion de usuarios
    if(isset($usuarios[$user])) {
        // echo "Usuario existe";
        // Verificacion de contraseña
        if ($pass == $usuarios [$user]["password"]) {
            // echo "Contraseña correcta";
            if ($usuarios [$user]["estado"]){
                echo "Bienvenido al ssitema ".$usuarios[$user]["rol"];
            }else{
                echo"Usuario Bloqueado";
            }
        } else {
            echo "Contraseña incorrecta";
        }        
    }else{
        echo "Usuario no existe";
    }
?>