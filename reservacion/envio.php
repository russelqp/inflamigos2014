<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'buzon@inflamigos.com.mx';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.inflamigos.com.mx';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
