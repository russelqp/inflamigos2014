

<?php
/******************************************************************************/
/*  Copyright (©) 2005 Crop Chile                                             */
/*  EMail form Php                                                            */
/*  info@crop.cl                                                              */
/*                                                                            */
/*  Este script es gratuito, proporcionado por:                               */
/*  Crop Chile                                                                */
/*  Estudio de diseño                                                         */
/*  I + D En comunicación                                                     */
/*  http://www.crop.cl                                                        */
/*                                                                            */
/* Modificado por : Faust -www.faustdesign.com.mx- Viernes 16/01/09
/******************************************************************************/

{
$Nombre = $_POST["nombre"];
$Telefono = $_POST["telefono"];
$Email = $_POST["email"];
$Comentarios = $_POST["mensaje"];
$Opinion = $_POST["opinion"];
$boundary = md5(time().rand(1,100));
$fecha = date("d-M-y H:i");
$content='
<¡Doctype html>
<meta charset="utf-8">
<head>
<title>Formulario de la web de Inflamigos</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body link="/* CCCCCC" vlink="/* FFFFFF" alink="/* CC0033">
<table width="600" height="300" border="0" align="center" >
    
<tr > 
          <td width="100" height="20" align="left" valign="middle"  bgcolor="#CCCCCC"> 
          <img src="http://www.inflamigos.com.mx/email/img/logoinflamigos.png"alt="logo-inflamigos" width="120" height="134" align="middle"></td>
          <td width="450" height="20" colspan="2"><div align="center">Comentarios de la web inflamigos</div></td>
  </tr>
  <tr><td width="550" colspan="3" height="30" bordercolor="#FFFFFF">&nbsp;</td></tr>
  <tr bordercolor="#0099FF"> 
  <td width="100"></td>
    <td width="100" height="20" align="left" valign="middle" bgcolor="#0099FF"> 
    <p class="style1">Nombre:</font></p></td>
<td  height="20" align="left" valign="middle" bgcolor="#00CCFF"> 
    <p>'.$Nombre.'</p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Telefono:</p></td>
                <td height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF" > 
                <p>'.$Telefono.'</p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Correo:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#F0F8FF" > 
                <p><a href="'.$Email.'">'.$Email.'</a></p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Comentarios:</p></td>
                <td  height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#00CCFF" > 
                <p>'.$Comentarios.'</p></td>
  </tr>
             
<tr>
<td width="100"></td> 
                <td width="100" height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#0099FF"> 
    <p>Opinion:</p></td>
<td  height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#00CCFF" > 
    <p>'.$Opinion.'</p></td>
  </tr>
              
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Fecha:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                <p>'.$fecha.'</p></td>
  </tr>
  <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>IP:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                <p>'.$_SERVER[REMOTE_ADDR].'</p></td>
  </tr>
         <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Navegador Utilizado:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                <p>'.$_SERVER[HTTP_USER_AGENT].'</p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Serie:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                '.$boundary.'</p></td>
  </tr>
          
       

  <tr>
  <td width="550" colspan="3" bordercolor="#FFFFFF"><div align="right"><img src="http://www.inflamigos.com.mx/email/img/inflamigos.jpg" alt="inflamigos" width="300" height="172">  </div></td>
  </tr>
</table>
</body>
</html>

';

mail('buzon@inflamigos.com.mx', 'Formulario de contacto',$content,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: $Nombre < $Email >");

$mensaje = '
<html>
<head>
<title>Confirmaci&oacute;n de envio del formulario de la web Inflamigos</title>
</head>
<body link="/* 666666" vlink="/* 999999" alink="/* CCCCCC">
<table width="495" height="320" border="0" align="center" >
  <tr>
    <td width="494" height="320" align="center" valign="top"> 
      <table width="495" height="83" border="0">
        <tr>
          <td width="198" height="83" >&nbsp;</td>
          
          <td width="287" height="83"><img src="http://www.inflamigos.com.mx/email/img/logoinflamigos.png" alt="logo-inflamigos" width="120" height="134"></td>
        </tr>
      </table> 
      <table width="550" height="228" border="0">
        <tr bordercolor="#0099FF">
          <td width="91" height="201">&nbsp;</td>
          <td width="394" height="201" bordercolor="#0099FF"><div align="justify">
            <blockquote>
              <p align="justify"> <font color="#0066FF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Hola<b> '.$Nombre.'</b>, 
                gracias por sus comentarios.</font><br>
                </p>
                <div align="justify"><font size="2"><font color="/* 999999" face="Verdana, Arial, Helvetica, sans-serif"> Su 
                  correo ha sido recibido y ser&aacute; respondido con la mayor brevedad 
                  posible.<br>
                  <br>
                  Este correo confirma su env&iacute;o efectuado desde nuestro formulario 
                  de contacto. </font><br> 
                  <font color="/* 999999" face="Verdana, Arial, Helvetica, sans-serif">Si 
                    recibe este correo por accidente, por favor, comun&iacute;quelo a 
                    nuestro <a href="mailto:webmaster@inflamigos.com.mx">Administrador</a>.                </font></font> <font color="/* 999999" size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
                      <br>
                      Si lo desea puede hacerlo a trav&eacute;s de nuestro <a href="http://www.www.inflamigos.com.mx/contacto.php">formulario</a> 
                      de contacto.</font><font size="2"><br> 
                      <br> 
                      <font color="/* 999999" face="Verdana, Arial, Helvetica, sans-serif">Este 
                          formulario a sido enviado el '.$fecha.'.<br>
                      Desde la IP: '.$_SERVER[REMOTE_ADDR].' <br>
                      Numero de serie: '.$boundary.'</font></font>
                  </p>
                .</div>
            </blockquote>
          </div></td>
        </tr>
          <tr bordercolor="#0099FF">
          <td width="91" height="27">&nbsp;</td>
         <td width="394" height="172" bordercolor="#0099FF"><div align="right"><img src="http://www.inflamigos.com.mx/imagenes/inflamigos.jpg" alt="Inflamigos" width="300" height="172"></div></td>
        </tr>
       
      </table> 
    </td>
  </tr>
</table>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Inflamigos WebSite < buzon@inflamigos.com.mx >' . "\r\n";
mail ("$Nombre < $Email >", "Su correo ha sido recibido",$mensaje,$cabeceras);
echo '<Script>alert("¡Mensaje enviado, Gracias =D!")</Script>';
echo "<meta content='0;url=http://www.inflamigos.com.mx/contacto.php' http-equiv='refresh'/>
";
}


?>
