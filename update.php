<?php 
    include("connection.php");
    $con=connection();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE id='$id'";
$query=mysqli_query($con, $sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']?>">
                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']?>">
                <input type="text" class="form-control mb-3" name="username" placeholder="Username" value="<?php echo $row['username']?>">
                <input type="number" min="1" max="99" class="form-control mb-3" name="rol" placeholder="Rol" value="<?php echo $row['rol']?>">
                <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']?>">
                <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email']?>">
                <input type="text" minlength="9" maxlength="9" class="form-control mb-3" name="dui" placeholder="DUI" value="<?php echo $row['dui']?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>
</html>