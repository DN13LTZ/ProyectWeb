<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyect";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql="UPDATE disponible SET nombre='$nombre' , descripcion='$descripcion' , precio='$precio' , stock='$stock' WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:Disponible.php");
}else {
    echo "ERROR AL ACTUALIZAR LOS DATOS: ".mysqli_error($conn);
}

?>