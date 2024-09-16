<?php

require_once 'config.php';

     $id = $_POST['id'];
     $titulo = $_POST['titulo'];
     $archivo = $_POST['archivo'];
     $UsuarioVideo = $_POST['UsuarioVideo'];
     $subida = $_POST['subida'];

     $query = "UPDATE videos SET titulo = '$titulo', archivo = '$archivo', usuariovideo = '$UsuarioVideo' WHERE id = '$id'";
     $consulta = mysqli_query($conn,$query);
      echo $consulta

?>