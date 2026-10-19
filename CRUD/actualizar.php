<?php

  // Incluir la informacion del archivo conexion.php
  include("conexion.php");

  // Mandamos a llamar la funcion conectar
  $con = conectar();

  // Recibir los datos del formulario
  $id = $_POST['id'];
  $matricula = $_POST['matricula'];
  $nombre = $_POST['nombre'];
  $apellido_p = $_POST['apellido_p'];
  $apellido_m = $_POST['apellido_m'];
  $edad = $_POST['edad'];

  // Crear la consulta para actualizar los datos
  $sql = "UPDATE alumnos SET
  matricula='$matricula',
  nombre='$nombre',
  apellido_p='$apellido_p',
  apellido_m='$apellido_m',
  edad='$edad'
  WHERE id='$id'";

  // Ejecutar la consulta
  $query = mysqli_query($con, $sql);

  // Comprobar y direccionar
  if ($query){
      header("Location: alumnos.php");
      exit();
  }
  else{
      echo "Error al actualizar al alumno";
  }

?>