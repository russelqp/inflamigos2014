<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$item = $_POST['item'];
$para = 'buzon@inflamigos.com.mx';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "E-Mail: $email\n Mensaje:\n $mensaje\n Item: $item\n";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header, $mensaje)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.inflamigos.com.mx';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
