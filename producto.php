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
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO disponible (nombre, descripcion, precio, stock) VALUE ('".$nombre."' , '".$descripcion."' , '".$precio."' , '".$stock."')";

    if(mysqli_query($conn,$sql)){
            header("Location:Disponible.php");
    } else{
        echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
    }
}
?>