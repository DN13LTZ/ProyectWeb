<?php
$dbhost = "sql309.epizy.com";
$dbuser = "epiz_29319014";
$dbpass = "qD4epbQrwHvk";
$dbname = "epiz_29319014_proyect";

session_start();
//Conexion a Base de Datos
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Verificar Conexion
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{

$correo = $_POST['correo'];
$pass1 = $_POST['pass1'];

$sql = "SELECT COUNT(*) as contar FROM usuario WHERE correo ='$correo' AND pass ='$pass1'";

$resultado = mysqli_query($conn,$sql);
$cadena = mysqli_fetch_array($resultado);

if($cadena['contar'] > 0){
    $_SESSION['uss'] = $correo;
    header("Location: disponible.php");
} else{
//Datos Incorrectos
header("Location: start1.php?estado=2");
}
}
?>