<?php

  // Incluir la informacion del archivo conexion.php
  include("conexion.php");

  // Mandamos a llamar la funcion conectar
  $con = conectar();

  // Recibimos el id enviado por la URL
  $id = $_GET['id'];

  // Buscar los datos del alumno
  $sql = "SELECT * FROM alumnos WHERE id='$id'";

  // Ejecutamos la consulta
  $query = mysqli_query($con, $sql);

  // Guardamos los datos del alumno
  $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>
<body>

<h1>EDITAR ALUMNO</h1>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <input type="text" name="matricula" placeholder="Matricula"
    value="<?php echo $row['matricula']; ?>">

    <input type="text" name="nombre" placeholder="Nombre(s)"
    value="<?php echo $row['nombre']; ?>">

    <input type="text" name="apellido_p" placeholder="Apellido Paterno"
    value="<?php echo $row['apellido_p']; ?>">

    <input type="text" name="apellido_m" placeholder="Apellido Materno"
    value="<?php echo $row['apellido_m']; ?>">

    <input type="text" name="edad" placeholder="Edad"
    value="<?php echo $row['edad']; ?>">

    <button type="submit">Actualizar</button>

</form>

</body>
</html>