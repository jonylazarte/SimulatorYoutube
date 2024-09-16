<?php

require_once 'config.php';

  $id = $_POST['id'];
  $busqueda = "SELECT * FROM videos WHERE id LIKE '$id'";
  $resultado = mysqli_query($conn, $busqueda);

       $cadena = array();
       while($fila = mysqli_fetch_array($resultado)){
            $cadena[]= array(
                'archivo' => $fila['archivo'],
                'titulo' => $fila['titulo'],
                'id' => $fila['id'],
                'usuariovideo' => $fila['usuariovideo'],
                'subida' => $fila['subida']
            );
       }

  $jsonstring = json_encode($cadena);
  echo $jsonstring


?>