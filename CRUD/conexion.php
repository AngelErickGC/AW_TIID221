<?php
  /* Creamos una funcion llamada conectar */
  function conectar () {
  /* Informacion del servidor */
  $host ="localhost";
  $user ="root"
  $pass ="";

  /* Base de datos */
  $db ="aw221";

  /* Permite conectar a MySQL */
  $con=mysqli_connect($host,$user,$pass);

  /* Le vamos a decir que BD y la informacion*/
  mysqli_select_db($con,$db);

  return $con;
  }
?>