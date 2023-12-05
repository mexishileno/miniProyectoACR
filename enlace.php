<?php
include "conn.php";

$email = $_POST['email'];
$password = $_POST['contrasena'];

$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (`email`, `contrasena`) VALUES ('$email', '$PasswordEncriptado')";
$selecionar = "SELECT * FROM  usuarios where email = '$email'";

if (mysqli_query($conectar, $sql)) {
    $con = $conectar->prepare($selecionar);
    $con->execute();
    $resul = $con->get_result();
    $data = $resul->fetch_assoc();

    session_start();

    $_SESSION["seccionIni"] = $data;

    header("Location: ./peronaslInfo.php");
    echo "Conexión satisfactoria";
} else {
    echo "Error en la conexión" . mysqli_error($conectar);
}

mysqli_close($conectar);
