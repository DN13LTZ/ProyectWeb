<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyect";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    echo "Conexion Establecida";
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $sql = "INSERT INTO usuario (nombre, correo, pass) VALUE ('".$nombre."' , '".$correo."' , '".$pass1."')";

        if(mysqli_query($conn,$sql)){
            header("Location:index.html");
        } else{
            echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
        }
    } else{
        echo "las contraseñas no coinciden";
    }
}
?>