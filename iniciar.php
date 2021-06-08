<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyect";
//Conexion a Base de Datos
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Verificar Conexion
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    echo "Conexion Establecida";
}

$correo = $_POST['correo'];
$pass1 = $_POST['pass1'];

$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='".$correo."' AND pass ='".$pass1."'");
$resultado = mysqli_num_rows($sql);

    if($resultado == 1){
        header("Location: menu.html");
    } else{
        //Datos Incorrectos
        echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
    }
?>