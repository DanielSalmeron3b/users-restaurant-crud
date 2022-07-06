<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$dui = $_POST['dui'];

$sql = "INSERT INTO usuarios VALUES('$id','$nombre','$apellidos','$username','$password','$rol','$telefono','$email','$dui')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: user.php");
}else{

}


?>

<!-- INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `username`, `password`, `rol`, `telefono`, `email`, `dui`) VALUES (NULL, 'Luis', 'Monge Perez', 'lamp', 'lamp123', '1', '777777', 'lamp@lamp.com', '123456789'); -->