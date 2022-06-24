<?php
$remitente = $_POST['email'];
$destinatario = 'silvi.decorte@hotmail.com'; 
$asunto = 'Consulta desde pagina web Desol';
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo = "Apellido: " . $_POST["apellido"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Teléfono: " . $_POST["teléfono"] . "\r\n";
    $cuerpo .= "Deja tu mensaje: " . $_POST["message"] . "\r\n";
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'gracias.html'; 
}
?>
