

//ACLARO QUE FALTA UNA PARTE QUE NO PUDE RESOLVER. El CORREO SE ENVIA PERO NO PUDE REDIRECCIONARME A LA PAGINA DE CONTACTO OTRA VEZ. 
//DE TODAS FORMAS ES ALGO QUE LE AGREGUE Y NO ERA ALGO DEL CURSO


<?php

$remitente = $_POST['email'];/*email es el "name" del input mail*/
$destinatario = 'tobigpossetto@gmail.com'; /*Mail al cual llegará el contenido del cormulario. Aca iria el mail al cual debe llegar el contenido del form*/
$asunto = 'Consulta'; /*Asunto del mail*/
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo = "Email: " . $_POST["email"] . "\r\n";

	$cuerpo = "Consulta: " . $_POST["consulta"] . "\r\n";
	$headers  = "MIME-Version: 1.0\n";
    $headers = "Content-type: text/plain; charset=utf-8\n";
    $headers = "X-Priority: 3\n";
    $headers = "X-MSMail-Priority: Normal\n";
    $headers = "X-Mailer: php\n";
    $headers = "From: \"".$_POST['nombre']."  <".$remitente.">\n";
    mail($destinatario, $asunto, $cuerpo, $headers);
    
    //header('Location: https://pizzaclubtp.000webhostapp.com/pages/contacto.html/' . getenv('HTTP_REFERER'));
    //include '../pages/contacto.html';
    
}
?>
