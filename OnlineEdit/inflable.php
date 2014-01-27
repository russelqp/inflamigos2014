<?php 
/***
Archivo descargado de http://willy.tiperu.com/
*/
//Iniciamos o continuamos la sesión encargada de evitar el bucle infinito
session_name("url_amigable");
session_start();
//Almacenamos datos del server, script y variables (pasadas por GET)
$Server=$_SERVER['SERVER_NAME'];
$Script=$_SERVER['PHP_SELF'];
$Variables=$_SERVER['QUERY_STRING'];

//Verificando si tiene variables por GET 
//y no se han pasado datos mediante un form por POST
//ya q al redireccionar un  post puede ocasionar errores.
//Tambien verificamos que la variable de sesión 'Listo' 
//sea diferente a 1, esto nos eviara un bucle infinito.
if(!empty($Variables) && $_SERVER['REQUEST_METHOD']=='GET' && $_SESSION['Listo']!=1){ 
	//Si tiene variables pasadas por GET se procede a hacer el cambio.
	//1. Agrupando $Variables por "variable=valor" en el array $Variable.
	
    
	$Variable=explode("&",$Variables);
	//2. Sustituyendo "=" por "," y concadenandolo en variable $Amigable.
	for($i=0;$i<count($Variable);$i++){
			
		$Amigable.="/".str_replace("inflable=","",$Variable[$i]);
		}
		
	//3. Quitando la extension ".php" a $Script para simular un directorio.
	$Dir=str_replace(".php","",$Script);
	//4. Generando la URL Amigable.
	$URL_AMIGABLE="http://".$Server.$Dir.$Amigable."/";
	//5. Colocando la variable de sesión 'Listo' a 1 para evitar el bucle infinito
	// al redireccionar la web.
	$_SESSION['Listo']=1;
	//6. Redireccionando a la url amigable
	header("Location: $URL_AMIGABLE");
	//7. Exit hará que culmine hasta este punto el script, si no estuviera 'exit'
	// el script continuaría ejecutándose y llegaría hasta el final del mismo, es decir,
	// a la parte donde colocamos a la variable de sesión 'Listo' en cero, originandose 
	// entonces un bucle infinito.
	exit;
}
//Cambie $_URL_BASE por la ruta raiz de su web, ya que al simular la url amigable
//directorios, hará que no muestre adecuadamente los origenes de los recursos que 
//llama su página web.
$_URL_BASE="http://".$Server."/";

/* http $_URL_BASE="http://".$Server."/";*/
 ?>
<?php
$inflable=$_GET['inflable'];
if($inflable=="castillo-aventura"){
	$brincolin = "caventura";
	$titulo = "Castillo Aventura";
	$miniDesc = "¡Un divertido castillo inflable!, con rótulos de los Backyardigans. Puedes usarlo junto a la piscina, a los niños les encantará";
	$ancho = "3";
	$largo = "6";
	$alto = "3";
	$edades = "2 a 10";
	$capacidad="7";
	$detalles ="El brincolin más rentable, un divertido castillo inflable, con resbaladilla, entrada en la parte posterior y un punching bag en su interior. Tiene rótulos de los Backyardigans: Pablo y Tasha. Puedes usarlo en tus fiestas junto a la piscina, los niños se divertiran.";
}
if($inflable=="castillo-princess"){
	$brincolin= "cprincess";
	$titulo = "Castillo Princess";
	$miniDesc = "Un castillo inflable para las princesas, con rótulos de Blanca Nieves y Cenicienta. Ideal para espacios pequeños.";
	$ancho = "3";
	$largo = "4";
	$alto = "3";
	$capacidad="7";
	$edades ="2 a 10";
	$detalles = "Para las princesas, este inflable cuenta con un punching bag en el interior, con entrada en la parte frontal. Ideal para espacios pequeños. Tiene dos rótulos Blanca Nieves y Cenicienta.";
}
if($inflable=="escaladora"){
	$brincolin= "escaladora";
	$titulo = "Escaladora";
	$miniDesc = "Haz que se ejerciten tus niños con esta divertida escaladora, tiene 4 cuerdas para escalar y  rótulos de Spiderman y Batman.";
	$ancho = "3";
	$largo = "6";
	$alto = "2";
	$capacidad = "7";
	$edades = "4 a 10";
	$detalles = "Para mantener en forma a los niños, este brincolin cuenta con 4 cuerdas para escalar, y doble punching bag en uno de sus extremos. Tiene dos rótulos: de un costado Spiderman y del otro Batman.";
}
if($inflable=="la-cajita"){
	$brincolin= "lacajita";
	$titulo = "La Cajita";
	$miniDesc = "Para los más pequeños, un pequeño cuadrilatero ideal para espacios pequeños. ";
	$ancho = "3";
	$largo = "4";
	$alto = "1.80";
	$capacidad = "7";
	$edades = "2 a 6";
	$detalles = "Para los más pequeños, un pequeño cuadrilatero con una entrada en la parte frontal. Ideal para espacios pequeños o una combinación ganadora junto a un brincolin más grande. Tiene rótulos de Disney Babies: Daisy y Donald.";
}
if($inflable=="resbaladilla-bob-esponja"){
	$brincolin = "bobesponja";
	$titulo = "Bob Esponja Resbaladilla";
	$miniDesc = "Un brincolin con colores alegres, en la parte frontal se encuentra el rostro de Bob Esponja";
	$ancho = "4";
	$largo = "7";
	$alto = "3.5";
	$edades = "4 a 10";
	$capacidad="8";
	$detalles ="Un brincolin con colores alegres, en la parte frontal se encuentra el rostro de Bob Esponja, en el interior se encuentra un punching bag de Patricio, tiene espacio para brincar, escalar y en la parte posterior una emocionante resbaladilla donde tus niños se divertirán mucho.";
}
if($inflable=="ultra-cubo"){
	$brincolin= "ucubo";
	$titulo = "Ultra Cubo";
	$miniDesc = "El gran brincolin interactivo, cuenta con dos entradas y una emocionante resbaladilla que sin duda mantendrá entretenidos a los niños";
	$ancho = "5";
	$largo = "7";
	$alto = "3.70";
	$capacidad = "1 a 12";
	$edades = "6 a 11";
	$detalles = "El gran brincolin interactivo, cuenta con dos entradas y una emocionante resbaladilla que mantendrá entretenidos a los niños, cuenta además en su interior con área para jugar, brincar, un túnel, punching bag y un montable. Tiene rótulos de Mario y Yoshi.";
}
if($inflable=="arco-slide"){
	$brincolin= "aslide";
	$titulo = "Arco Slide";
	$miniDesc = "El brincolin ideal para la diversión en la alberca. Cuenta con una gran resbaladilla doble de 2 m de alto y 3mts de largo.";
	$ancho = "5";
	$largo = "7";
	$alto = "3.70";
	$capacidad = "1 a 10";
	$edades = "6 a 11";
	$detalles = "El brincolin ideal para la diversión en la alberca, cuenta con una gran resbaladilla doble de 2 m de alto y 3mts de largo. En su interior cuenta con área para jugar, brincar, un punching bag y un montable. Tiene rótulos de los Simpson: Bart Y Lisa.";
}
if($inflable=="space-lab"){
	$brincolin = "spacelab";
	$titulo = "Space Lab";
	$miniDesc = "Es el brincolin que vino del espacio, sus tripulantes, dos alienígenas que los esperan en la entrada del laboratorio espacial";
	$ancho = "6";
	$largo = "6";
	$alto = "2.5";
	$edades = "2 a 10";
	$capacidad="13";
	$detalles ="Un diseño original donde los niños podrán experimentar mucha diversión en este interactivo inflable. Es el brincolin que vino del espacio, sus tripulantes, dos alienígenas que los esperan en la entrada del laboratorio espacial, túneles y punching bags alienígenas. Lleva un pequeño rótulo de Buzz Lightyear.";
}
if($inflable=="escaladrilo"){
	$brincolin = "escaladrilo";
	$titulo = "Escaladrilo";
	$miniDesc = "Una divertida resbaladilla para la alberca";
	$ancho = "2.5";
	$largo = "4";
	$alto = "2";
	$edades = "2 a 12";
	$capacidad="2";
	$detalles ="Este inflable es especial para la alberca, ya que no cuenta con área para brincar, pero es una divertida resbaladilla que se ajusta a espacios pequeños.";
}
if($inflable=="aventura-palmeras"){
	$brincolin = "aventurapalmeras";
	$titulo = "Aventura Palmeras";
	$miniDesc = "#";
	$ancho = "3";
	$largo = "6";
	$alto = "3";
	$edades = "2 a 10";
	$capacidad="7";
	$detalles ="Si ya conoces el Castillo Aventura, este te resultara familiar ya que tiene las mismas dimensiones, pero lo diferencian los colores y las llamativas palmeras en las esquinas. Muy divertido y recomendable para la alberca. Tiene 2 rótulos de Dragon Ball: Gokú y el maestro Roshi.";
}
if($inflable=="aqualand"){
	$brincolin = "aqualand";
	$titulo = "Aqualand";
	$miniDesc = "Un inflable muy completo, el Aqualand cuenta con chapoteadero, resbaladilla, túnel  y espacio para brincar.";
	$ancho = "5";
	$largo = "4.5";
	$alto = "2.5";
	$edades = "2 a 10";
	$capacidad="10";
	$detalles ="Un inflable muy completo, el Aqualand cuenta con chapoteadero, resbaladilla, túnel  y espacio para brincar. Es un brincolin que se recomienda mucho para los días soleados y de mucho calor pues los niños pueden refrescarse en el y  pasar horas de diversión y des estrés. Una idea excelente es juntarse entre varios vecinos, amigos o familiares  y rentar este inflable todo un fin de semana, y obtener un precio especial. Tiene rótulos de Los padrinos mágicos.";
}
if($inflable=="splash-pool"){
	$brincolin = "splashpool";
	$titulo = "Splash Pool";
	$miniDesc = "";
	$ancho = "5";
	$largo = "9";
	$alto = "5";
	$edades = "4 a 12";
	$capacidad="12";
	$detalles ="El gran tobogán acuático, diversión extrema para los niños. Tiene un diseño muy moderno, cuenta con dos carriles para deslizarse a gran velocidad hasta llegar a una refrescante alberca. Es nuestra manera de decirle NO al calor. Invita a tus amigos para cooperar y rentar este inflable en tu jardín para que se diviertan los niños y pasen momentos de diversión garantizada. Rótulos de Phineas y Ferb, y sin faltar Perry el ornitorrinco.";
}
?>
<?php 
$titlePage=$titulo." - Inflamigos";
$descPage= $miniDesc;
?>
 <?php include('header.php');?>
 

  <div id="mainContent">
  <div class="top_main"><?php include('inflable_top.php'); ?>
    <p><a href="index.php">Inicio</a>&gt;<a href="brincolines.php">Brincolines</a>&gt;<?php echo $titulo;?></p></div>
  <div class="middle_main">
  <?php include('sidebar.php');?>
  <div id="articulo">
  <div class="top_art"></div>
<div class="inflable">
<?php echo "<h3>".$titulo. "</h3>";?>

<br />
<div class="imagenbig">
<?php


echo "<p>";
echo '<g:plusone href="http://www.inflamigos.com.mx/inflable/'.$inflable.'/"></g:plusone>';
echo '<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.inflamigos.com.mx%2Finflable%2F'.$inflable.'%2F&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>';
echo '<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.inflamigos.com.mx/inflable/'.$inflable.'/" data-via="Inflamigos" data-lang="es" data-related="Inflamigos" data-hashtags="inflamigos">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
echo "<br />";
echo "<br />";
echo "Ancho: ".$ancho." m";
echo "<br />";
echo "Largo: ". $largo." m";
echo "<br />";
echo "Alto: ".$alto." m";
echo "<br />";
echo "<br />";
echo "Capacidad: ".$capacidad." niños";
echo "<br />";
echo "Edad recomendada: ".$edades." años";
echo "<br />";
echo "</p>";
?>
</div>
<!--Inicia miniGalery-->
<div class="minigalery">
<?php
   $ext=".jpg";
   $ruta="inflables/thumbs/".$brincolin."/";
   $ruta2="inflables/g/".$brincolin."/";
   $total_imagenes =count(glob($ruta."*_thumb*"));
   $array_nombres = $total_imagenes;
   $arr_ext=array("jpg","png","gif");
   $mydir=opendir($ruta);
   echo "<ol>" ; 
   for ($i=1; $i<=$total_imagenes;$i++){
   echo '<li><a href="'.$ruta2."brincolin_inflable_".$brincolin."_0".$i.$ext.'" rel="lightbox[roadtrip]" title="'.$titulo.'"><img src="'.$ruta.$brincolin."_thumb_0".$i.$ext.'" alt="'.$brincolin."_thumb".'" /></a></li>';
}
	echo "</ol>";
?>

<div class="clearfloat"></div>
</div>
<!--end minigalery-->
<div class="clearfloat"></div>

<?php
echo "<p>";
echo "<br />";
echo "Detalles: <br />".$detalles;
echo "</p>";

if ($inflable=="castillo-aventura"){ echo('<div class="uvideo"><object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/alSfViRYZhQ&hl=es_MX&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/alSfViRYZhQ&hl=es_MX&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
<p>Enlace en youtube: <a href="http://www.youtube.com/watch?v=alSfViRYZhQ" title="video del castillo inflable">http://www.youtube.com/watch?v=alSfViRYZhQ</a></p>
</div>');}?>
</div><!--end inflables -->

<br />
<p>-------------------------------------------------------------------------------------</p>
<!--Inicia menu_inflables_mini-->
<div class="menu_inflables_mini">
<h4>Ver los otros inflables</h4>
    <ol>
    <li><?php echo '<a href="inflable.php?inflable=castillo-aventura">'; ?><img src="inflables/thumbs/caventura_thumb.png" width="90" height="59" alt="castillo_aventura_middle" title="Castillo Aventura"/></a></li>
    <li><?php echo '<a href="inflable.php?inflable=castillo-princess">'; ?><img src="inflables/thumbs/cprincess_thumb.png" width="90" height="59" alt="castillo_princess_middle" title="Castillo Princess"/></a></li>
    <li><?php echo '<a href="inflable.php?inflable=escaladora">'; ?><img src="inflables/thumbs/escaladora_thumb.png" width="90" height="59" alt="escaladora_middle" title="ver la Escaladora"/></a></li>
    <li><?php echo '<a href="inflable.php?inflable=la-cajita">'; ?><img src="inflables/thumbs/lacajita_thumb.png" width="90" height="59" alt="la_cajita_middle" title="La Cajita"/></a></li>
    <li><?php echo '<a href="inflable.php?inflable=resbaladilla-bob-esponja">'; ?><img src="inflables/thumbs/bobesponja_thumb.png" width="90" height="59" alt="bob-esponja-middle" title="Bob Esponja Resbaladilla" /></a></li>
  	<li><?php echo '<a href="inflable.php?inflable=arco-slide">'; ?><img src="inflables/thumbs/aslide_thumb.png" width="90" height="59" alt="arco_slide_middle" title="Arco Slide"/></a></li>
	<li><?php echo '<a href="inflable.php?inflable=ultra-cubo">'; ?><img src="inflables/thumbs/ucubo_thumb.png" width="90" height="59" alt="ultra_cubo_middle" title="Ultra Cubo"/></a></li>
    <li><?php echo '<a href="inflable.php?inflable=space-lab">'; ?><img src="inflables/thumbs/spacelab_thumb.png" width="90" height="59" alt="space-lab-middle" title="Space Lab" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=escaladrilo">'; ?><img src="inflables/thumbs/escaladrilo_thumb.png" width="90" height="59" alt="escaladrilo-middle" title="Escaladrilo" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=aventura-palmeras">'; ?><img src="inflables/thumbs/aventurapalmeras_thumb.png" width="90" height="59" alt="aventura-palmeras-middle" title="Aventura Palmeras" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=aqualand">'; ?><img src="inflables/thumbs/aqualand_thumb.png" width="90" height="59" alt="aqualand-middle" title="Aqualand" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=splash-pool">'; ?><img src="inflables/thumbs/splashpool_thumb.png" width="90" height="59" alt="splash-pool-middle" title="Splash Pool" /></a></li>
    </ol>
 <div class="clearfloat"></div>
 </div>
 <div class="bottom_art"></div> 
 </div>

<div class="clearfloat"></div>
<!--End menu_inflables_mini--> 
</div><!--- end middlemain-->
<div class="bottom_main"></div>
	<!-- end #mainContent --></div>
	<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->

 <?php //Limpia el posible bucle, es decir, se puede volver a hacer el envío.
 $_SESSION['Listo']=0;
 ?> 
<?php include('footer.php');?>