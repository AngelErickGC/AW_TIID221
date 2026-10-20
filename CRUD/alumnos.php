<?php
  
  /* Incluir la informacion del archivo conexion.php */
  include ("conexion.php");

  /* Mandamos a llamar la funcion conectar para ejecutar*/
  $con = conectar();

  /* Dame toda lo que tengas que alumnos*/
  $sql = "SELECT * FROM alumnos";

  /* Ejecutamos la consulta y tenendremos acceso a la conexion */
  $result = mysqli_query($con, $sql);

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <table>
  <tr>
    <th>Matrícula</th>
    <td>125053125</th>
  </tr>
  <tr>
    <th>Nombre</th>
    <td>Angel Erick</td>
  </tr>
  <tr>
    <th>Apellido paterno</th>
    <td>Galvan</td>
  </tr>
  <tr>
    <th>Apellido materno</th>
    <td>Carrasco</td>
  </tr>
  <tr>
    <th>Edad</th>
    <td>19/td>
  </tr>
    <tr>
        <th>Accion</th>
        <td>Editar
            Eliminar
        </td>
</table>
    
  </body>
  </html>