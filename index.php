<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM users";
$query =mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>CRUD Registro</title>
</head>
<body>

    <table>
    <thead>
    

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>Crear Registro</h1>
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="username" placeholder="Apodo">
            <input type="text" name="password" placeholder="Contraseña">
            <input type="text" name="email" placeholder="Gmail">
            <input type="submit" value="Agregar Registro">
        </form>
    </div>
  </div>
</div>

<table class="tabla">

        <tr class="datos">
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Apodo</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th></th>
            <th></th>            
        </tr>

    <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['password'] ?></td>
            <td><?= $row['email'] ?></td>
            <th><a href="update.php?id=<?= $row['id'] ?>" class="boton_editar">Editar</a></th>
            <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="boton_eliminar">Eliminar</a></th>
        </tr>
        <?php endwhile; ?>
        <!--  -->
        
    </tbody>
</table>
    <div>  
      <button class="boton" id="openModalBtn">Nuevo usuario</button>

    </div>
    <script src="./index.js"></script>
</body>
</html>