<?php

     require_once 'config.php';

     $email = trim($_POST['mail']);
     $contraseña = trim($_POST['pass']);
     $querymail = "SELECT * FROM usuarios2 WHERE email ='$email'";
     $resultadomail = mysqli_query($conn, $querymail);
     $filasmail = mysqli_num_rows($resultadomail);
     
     


        if($filasmail==1){
            $querycontra = "SELECT * FROM usuarios2 WHERE email ='$email' and contrasena ='$contraseña'";
            $resultadocontra = mysqli_query($conn, $querycontra);
            $filascontra = mysqli_num_rows($resultadocontra);
 
            

            if($filascontra ==1){
                $usuario = mysqli_fetch_array($resultadocontra);
                $json = json_encode($usuario);
            echo $json;
                
            }   else { echo "Contraseña invalida, vuelva a intentarlo";}
        }  else {echo "El correo que ha ingresado no se encuentra registrado";}


         
         

?>