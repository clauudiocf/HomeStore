<?php
    //$nombre = $_GET['nom'];
    if(isset($_REQUEST['enviar'])){
        $nombre = $_REQUEST['nombre'];
        echo "El nombre ingresado es ".$nombre;
    }
    else{
        echo '<a href="formulario.php">Volver al Formulario </a>';
    }
        echo '<br/>';
    if(isset($_REQUEST['enviar'])){
        $contraseña = $_REQUEST['contraseña'];
        echo "La altura ingresada es ".$contraseña;
    }
    else{
        echo '<a href="formulario.php">Volver al Formulario </a>';
    }
       echo '<br/>';
    if(isset($_REQUEST['enviar'])){
        $contraseña2 = $_REQUEST['contraseña2'];
        echo "El diamentro ingresado es ".$contraseña2;
    }
    else{
        echo '<a href="formulario.php">Volver al Formulario </a>';
    }
    echo '<br/>';
    if(isset($_REQUEST['enviar'])){
        $email = $_REQUEST['email'];
        echo "El diamentro ingresado es ".$email;
    }
    else{
        echo '<a href="formulario.php">Volver al Formulario </a>';
    }
    
?>