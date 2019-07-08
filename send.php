<?php 
if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['asunto']) && !empty($_POST['asunto']) &&
isset($_POST['mensaje']) && !empty($_POST['mensaje']))
   
{
    $destino = "ingsistemas7.pj@gmail.com";
    $desde   = "From:". "Furia Koryo";
    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $asunto  = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    mail($destino,$desde,$nombre,$email,$asunto,$mensaje)
    echo "Correo enviado...";
}else{
    echo "Problemas al enviar...";
}



?> 