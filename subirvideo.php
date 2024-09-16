<?php

require_once 'config.php';

        $archivo = $_POST['archivo'];
        $titulo = $_POST['titulo'];
        $UsuarioVideo = $_POST['UsuarioVideo'];
        $subida = $_POST['subida'];
        $insersion = "INSERT INTO videos(archivo, titulo, usuariovideo, subida, tipo) VALUES ('$archivo','$titulo','$UsuarioVideo','$subida','video')";
        $consulta = mysqli_query($conn, $insersion);
        echo $consulta
?>

