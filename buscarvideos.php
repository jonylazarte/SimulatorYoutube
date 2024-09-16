<?php

require_once 'config.php';

  $titulo = $_POST['busqueda'];
  $busqueda = "SELECT * FROM videos WHERE titulo LIKE '$titulo%'";
  $resultado = mysqli_query($conn, $busqueda);

       $cadena = array();
       while($fila = mysqli_fetch_array($resultado)){
            $cadena[]= array(
                'archivo' => $fila['archivo'],
                'titulo' => $fila['titulo'],
                'id' => $fila['id'],
                'usuariovideo' => $fila['usuariovideo']
            );
       }

  $jsonstring = json_encode($cadena);
  echo $jsonstring


?>