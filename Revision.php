<?php
session_start();
$PATH='lib/';
include $PATH.'Conexion.php';
include $PATH.'Usuario.php';
$oUsr=new Usuario();
$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['clave'];
if($oUsr->VerificaUsuarioClave())
   $_SESSION['USR']=$oUsr;
header('Location:http://localhost:8081/proy2305/');
?>