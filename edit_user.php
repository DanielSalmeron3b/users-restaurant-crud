<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$rol = $_POST['rol'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$dui = $_POST['dui'];

$sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', username='$username',rol='$rol', telefono='$telefono', email='$email', dui='$dui' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: user.php");
}else{

}

?>