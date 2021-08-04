<?php
$dbhost = "sql309.epizy.com";
$dbuser = "epiz_29319014";
$dbpass = "qD4epbQrwHvk";
$dbname = "epiz_29319014_proyect";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];


$sql="DELETE FROM disponible WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:Disponible.php");
}else {
    echo "ERROR AL BORRAR EL DATO: ".mysqli_error($conn);
}

?>