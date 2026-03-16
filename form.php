<?php
    include ('lang/configuracion.php');
 
$error='';
//VALIDANDO NOMBRE
if(empty($_POST["nombre"])){
    $error .=  $lang["ERROR_NOM"]; //'Introdueix un nom </br>';
}else{
    $nombre = $_POST["nombre"];
    $nombre = htmlspecialchars($nombre);//$nombre = filter_var($nombre, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
//VALIDANDO E-MAIL
if(empty($_POST["email"])){
    $error .=  $lang["ERROR_MAIL01"]; //'Introdueix un E-mail</br>';
    }else{
    $email = $_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error .= $lang["ERROR_MAIL02"]; //'Introdueix un E-mail vàlid </br>';
        }else{
            $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        }
    }
//VALIDANDO MENSAJE
if(empty($_POST["mensaje"])){
    $error.= $lang["ERROR_MSG"];//"Introdueix un missatge </br>";
    }else{
        $mensaje = $_POST["mensaje"];
        $mensaje = htmlspecialchars($mensaje);//$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    }

//VALIDANDO CHECK PRIVACIDAD
/*if($_POST["politica"] == false){
    $error.= $lang["ERROR_PRIV"]; //"Has d'acceptar la política de Privadesa</br>";
    }else{
        $privadesa = $_POST["politica"];
    }
*/
//CUERPO DEL MENSAJE
$cuerpo .= "Nom: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";

$cuerpo .= "E-mail: ";
$cuerpo .= $email;
$cuerpo .= "\n";

/*$cuerpo .= "Privadesa: ";
$cuerpo .= $privadesa;
$cuerpo .= "\n";*/

$cuerpo .= "Missatge: ";
$cuerpo .= $mensaje;
$cuerpo .= "\n";

//DIRECCIÓN
$enviarA = "info@ivansala.net"; //REEMPLAZAR CON TU CORREO ELECTRÓNICO
$asunto = "Nou missatge del meu lloc web";

//ENVIAR CORREO
if($error == ""){
$success = mail($enviarA, $asunto, $cuerpo, "de: ".$email);
echo 'exito';
}else{
    echo $error;
}
?>