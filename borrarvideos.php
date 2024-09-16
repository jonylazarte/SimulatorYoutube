<?php

require_once 'config.php';

    $id = $_POST['id'];
    $delete = "DELETE FROM videos WHERE id= $id";
    $resultado = mysqli_query($conn,$delete);
    

    echo "Video eliminado";

?>