<?php
     require_once 'config.php';
     $query= "SELECT *FROM videos";
     $resultado= mysqli_query($conn, $query);

     $array = array();
     while($filas = mysqli_fetch_array($resultado)){
        $query2= "SELECT *FROM usuarios2 WHERE token = '{$filas['usuariovideo']}'";
        $resultado2 = mysqli_query($conn, $query2);
        $usuario = mysqli_fetch_array($resultado2);
           $array[] = array(
               'titulo' => $filas['titulo'],
               'archivo' => $filas['archivo'], 
               'id' => $filas['id'],
               'usuariovideo' => $filas['usuariovideo'],
               'subida' => $filas['subida'],
               'usuario' => $usuario,
               'tipo' => $filas['tipo']
           );
     }

     $jsonstring = json_encode($array);
     echo $jsonstring

?>