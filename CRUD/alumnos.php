<?php
  include("conexion.php");

  $con = conectar();

  // Dame toda la informacion de alumnos
  $sql = "SELECT * FROM alumnos";

  // Ejecutamos la consulta
  $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>

<h1>TABLA DE ALUMNOS</h1>

<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>Accion</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['matricula']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido_p']; ?></td>
            <td><?php echo $row['apellido_m']; ?></td>
            <td><?php echo $row['edad']; ?></td>

            <td>
                <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<h1>FORMULARIO</h1>

<form action="Insertar.php" method="POST">
    <input type="text" name="matricula" placeholder="Matricula">
    <input type="text" name="nombre" placeholder="Nombre(s)">
    <input type="text" name="apellido_p" placeholder="Apellido Paterno">
    <input type="text" name="apellido_m" placeholder="Apellido Materno">
    <input type="text" name="edad" placeholder="Edad">

    <button type="submit">Guardar</button>
</form>

</body>
</html>