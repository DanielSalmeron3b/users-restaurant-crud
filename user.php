<?php
    include("connection.php");
    $con = connection();

    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Users CRUD</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Crear usuario</h1>
                <form action="insert_user.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="username" placeholder="Username">
                    <input type="password" class="form-control mb-3" name="password" placeholder="Password">
                    <input type="number" min="1" max="99" class="form-control mb-3" name="rol" placeholder="Rol">
                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                    <input type="text" minlength="9" maxlength="9" class="form-control mb-3" name="dui" placeholder="DUI">

                    <input type="submit" class="btn btn-primary" placeholder="Nombre">
                </form>
            </div>
            <div class="col-md-8">
                <h2>TABLE</h2>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Rol</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>DUI</th>
                            <th></th><th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <th><?php echo $row['id']?></th>
                            <th><?php echo $row['nombre']?></th>
                            <th><?php echo $row['apellidos']?></th>
                            <th><?php echo $row['username']?></th>
                            <th><?php echo $row['password']?></th>
                            <th><?php echo $row['rol']?></th>
                            <th><?php echo $row['telefono']?></th>
                            <th><?php echo $row['email']?></th>
                            <th><?php echo $row['dui']?></th>
                            <th><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete_user.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>  
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>