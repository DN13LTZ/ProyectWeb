<?php
$dbhost = "sql309.epizy.com";
$dbuser = "epiz_29319014";
$dbpass = "qD4epbQrwHvk";
$dbname = "epiz_29319014_proyect";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $sql = "INSERT INTO usuario (nombre, correo, pass) VALUE ('".$nombre."' , '".$correo."' , '".$pass1."')";
        if(mysqli_query($conn,$sql)){
            header("Location:start1.php?estado=1");
        } else{
            echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
        }
    } else{
        header("Location:register1.php?estado=1");
    }
}
?>