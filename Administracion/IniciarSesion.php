<?php
session_start();
include '../Lib/Conexion.php';
include '../Mantenedor/Usuario.php';
$oUsr = new Usuario();
$oUsr->rut=$_POST['rut'];
$oUsr->clave=$_POST['password'];
if($oUsr->VerificarUsuarioContrasenna())
{
    $_SESSION["Usuario"]=$oUsr;
    header('location:http://localhost:8081/HomeStore/index.php');
}
else
{
    echo 'No existe';
    
}