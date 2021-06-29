<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyect";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$nm = $_GET['nm'];


$sql="DELETE FROM disponible WHERE id='$nm' ";

if(mysqli_query($conn,$sql)){
    header("Location:Disponible.php");
}else {
    echo "ERROR AL BORRAR EL DATO: ".mysqli_error($conn);
}

?>