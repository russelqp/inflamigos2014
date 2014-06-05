 <?php
function urls_amigables($url) {

// Tranformamos todo a minusculas

$url = strtolower($url);

//Rememplazamos caracteres especiales latinos

$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

$repl = array('a', 'e', 'i', 'o', 'u', 'n');

$url = str_replace ($find, $repl, $url);

// Añaadimos los guiones

$find = array(' ', '&', '\r\n', '\n', '+'); 
$url = str_replace ($find, '-', $url);

// Eliminamos y Reemplazamos demás caracteres especiales

$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

$repl = array('', '-', '');

$url = preg_replace ($find, $repl, $url);

return $url;

}
?>
<?php
$inflable=$_GET['inflable'];
if($inflable=="dora-box"){
	$brincolin = "dorabox";
	$titulo = "Dora Box";
	$precio = "900";
	$miniDesc = "Fabuloso para la diversión en la alberca con Dora";
	$ancho = "4";
	$largo = "5.5";
	$alto = "3";
	$edades = "2 a 9";
	$capacidad="10";
	$detalles ="Para los más exigentes, ideal para las pequeñas exploradoras. La mejor calidad y con un diseño muy atractivo en 3D, la festejada lo amará y tus invitados lo recordaran y hablarán maravillas de tu evento. Altamente recomendado para tu fiesta de alberca, donde los peques disfrutarán al máximo gracias a su resbaladilla. ";
	$id_video = "";
	$acuatico = 1;
}
if($inflable=="minions-box"){
	$brincolin = "minionsbox";
	$titulo = "Minions Box";
	$precio = "700";
	$miniDesc = "Unos divertidos Minios que harán maravillas en tu evento";
	$ancho = "3";
	$largo = "4";
	$alto = "3";
	$edades = "2 a 9";
	$capacidad="8";
	$detalles ="Un increíble diseño 3D de los Minions, muy atractivo y recomendado para espacios pequeños. Los niños lo amaran y se divertirán a lo grande, tus invitados lo recordaran siempre y hablarán de ello. Excelente para esas épocas de lluvia, ya que puedes colocarlo incluso dentro de tu hogar.";
	$id_video = "";
	$acuatico = 0;
}
if($inflable=="angry-box"){
	$brincolin = "angrybox";
	$titulo = "Angry Box";
	$precio = "700";
	$miniDesc = "¡Para los más peques!, con rótulos de Angry Birds.";
	$ancho = "3";
	$largo = "4";
	$alto = "3";
	$edades = "2 a 8";
	$capacidad="8";
	$detalles ="Recomendado para los más pequeños, cuenta con una sola entrada, ésta se encuentra en la parte frontal del brincolin. Tiene divertidos rótulos de los Angry Birds.";
	$id_video = "";
	$acuatico = 0;
}
if($inflable=="castillo-aventura"){
	$brincolin = "caventura";
	$titulo = "Castillo Aventura";
	$precio = "600";
	$miniDesc = "¡Un divertido castillo inflable!, con rótulos de los Backyardigans. Puedes usarlo junto a la piscina, a los niños les encantará";
	$ancho = "3";
	$largo = "6";
	$alto = "3";
	$edades = "2 a 10";
	$capacidad="7";
	$detalles ="El brincolin más rentable, un divertido castillo inflable, con resbaladilla, entrada en la parte posterior y un punching bag en su interior. Tiene rótulos de los Backyardigans: Pablo y Tasha. Puedes usarlo en tus fiestas junto a la piscina, los niños se divertiran.";
	$id_video = "alSfViRYZhQ";
	$acuatico = 1;
}
if($inflable=="castillo-princess"){
	$brincolin= "cprincess";
	$titulo = "Castillo Princess";
	$precio = "600";
	$miniDesc = "Un castillo inflable para las princesas, con rótulos de Blanca Nieves y Cenicienta. Ideal para espacios pequeños.";
	$ancho = "3";
	$largo = "4";
	$alto = "3";
	$capacidad="7";
	$edades ="2 a 10";
	$detalles = "Para las princesas, este inflable cuenta con un punching bag en el interior, con entrada en la parte frontal. Ideal para espacios pequeños. Tiene dos rótulos Blanca Nieves y Cenicienta.";
	$id_video = "";
	$acuatico = 0;
}
if($inflable=="escaladora"){
	$brincolin= "escaladora";
	$titulo = "Escaladora";
	$precio = "700";
	$miniDesc = "Haz que se ejerciten tus niños con esta divertida escaladora, tiene 4 cuerdas para escalar y  rótulos de Spiderman y Batman.";
	$ancho = "3";
	$largo = "6";
	$alto = "2";
	$capacidad = "7";
	$edades = "4 a 10";
	$detalles = "Para mantener en forma a los niños, este brincolin cuenta con 4 cuerdas para escalar, y doble punching bag en uno de sus extremos. Tiene dos rótulos: de un costado Spiderman y del otro Batman.";
	$id_video = "";
	$acuatico = 1;
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
	$id_video = "";
	$acuatico = 0;
}
if($inflable=="resbaladilla-bob-esponja"){
	$brincolin = "bobesponja";
	$titulo = "Bob Esponja Resbaladilla";
	$precio = "1000";
	$miniDesc = "Un brincolin con colores alegres, en la parte frontal se encuentra el rostro de Bob Esponja";
	$ancho = "4";
	$largo = "7";
	$alto = "3.5";
	$edades = "4 a 10";
	$capacidad="8";
	$detalles ="Un brincolin con colores alegres, en la parte frontal se encuentra el rostro de Bob Esponja, en el interior se encuentra un punching bag de Patricio, tiene espacio para brincar, escalar y en la parte posterior una emocionante resbaladilla donde tus niños se divertirán mucho.";
	$id_video = "";
	$acuatico = 1;
}
if($inflable=="ultra-cubo"){
	$brincolin= "ucubo";
	$titulo = "Ultra Cubo";
	$precio = "1200";
	$miniDesc = "El gran brincolin interactivo, cuenta con dos entradas y una emocionante resbaladilla que sin duda mantendrá entretenidos a los niños";
	$ancho = "5";
	$largo = "7";
	$alto = "3.70";
	$capacidad = "12";
	$edades = "6 a 11";
	$detalles = "El gran brincolin interactivo, cuenta con dos entradas y una emocionante resbaladilla que mantendrá entretenidos a los niños, cuenta además en su interior con área para jugar, brincar, un túnel, punching bag y un montable. Tiene rótulos de Mario y Yoshi.";
	$id_video = "";
	$acuatico = 1;
}
if(	
	$inflable=="arco-slide"){
	$brincolin= "aslide";
	$titulo = "Arco Slide";
	$precio = "1200";
	$miniDesc = "El brincolin ideal para la diversión en la alberca. Cuenta con una gran resbaladilla doble de 2 m de alto y 3mts de largo.";
	$ancho = "5";
	$largo = "7";
	$alto = "3.70";
	$capacidad = "10";
	$edades = "6 a 11";
	$detalles = "El brincolin ideal para la diversión en la alberca, cuenta con una gran resbaladilla doble de 2 m de alto y 3mts de largo. En su interior cuenta con área para jugar, brincar, un punching bag y un montable. Tiene rótulos de los Simpson: Bart Y Lisa.";
	$id_video = "";
	$acuatico = 1;
}
if($inflable=="space-lab"){
	$brincolin = "spacelab";
	$titulo = "Space Lab";
	$precio = "1500";
	$miniDesc = "Es el brincolin que vino del espacio, sus tripulantes, dos alienígenas que los esperan en la entrada del laboratorio espacial";
	$ancho = "6";
	$largo = "6";
	$alto = "2.5";
	$edades = "2 a 10";
	$capacidad="13";
	$detalles ="Un diseño original donde los niños podrán experimentar mucha diversión en este interactivo inflable. Es el brincolin que vino del espacio, sus tripulantes, dos alienígenas que los esperan en la entrada del laboratorio espacial, túneles y punching bags alienígenas. Lleva un pequeño rótulo de Buzz Lightyear.";
	$id_video = "MLT13KpBzV0";
}
if($inflable=="escaladrilo"){
	$brincolin = "escaladrilo";
	$titulo = "Escaladrilo";
	$precio = "600";
	$miniDesc = "Una divertida resbaladilla para la alberca";
	$ancho = "2.5";
	$largo = "4";
	$alto = "2";
	$edades = "5 a 12";
	$capacidad="2";
	$detalles ="Este inflable es especial para la alberca, ya que no cuenta con área para brincar, pero es una divertida resbaladilla que se ajusta a espacios pequeños.";
	$id_video = "";
	$acuatico = 1;
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
	$id_video = "";
	$acuatico = 1;
}
if($inflable=="aqualand"){
	$brincolin = "aqualand";
	$titulo = "Aqualand";
	$precio = "1300";
	$miniDesc = "Un inflable muy completo, el Aqualand cuenta con chapoteadero, resbaladilla, túnel  y espacio para brincar.";
	$ancho = "5";
	$largo = "4.5";
	$alto = "2.5";
	$edades = "2 a 10";
	$capacidad="10";
	$detalles ="Un inflable muy completo, el Aqualand cuenta con chapoteadero, resbaladilla, túnel  y espacio para brincar. Es un brincolin que se recomienda mucho para los días soleados y de mucho calor pues los niños pueden refrescarse en el y  pasar horas de diversión y des estrés. Una idea excelente es juntarse entre varios vecinos, amigos o familiares  y rentar este inflable todo un fin de semana, y obtener un precio especial. Tiene rótulos de Los padrinos mágicos.";
	$id_video = "";
	$acuatico = 1;
}
if($inflable=="splash-pool"){
	$brincolin = "splashpool";
	$titulo = "Splash Pool";
	$precio = "1900";
	$miniDesc = "";
	$ancho = "5";
	$largo = "9";
	$alto = "5";
	$edades = "4 a 12";
	$capacidad="12";
	$detalles ="El gran tobogán acuático, diversión extrema para los niños. Tiene un diseño muy moderno, cuenta con dos carriles para deslizarse a gran velocidad hasta llegar a una refrescante alberca. Es nuestra manera de decirle NO al calor. Invita a tus amigos para cooperar y rentar este inflable en tu jardín para que se diviertan los niños y pasen momentos de diversión garantizada. Rótulos de Phineas y Ferb, y sin faltar Perry el ornitorrinco.";
	$id_video = "";
	$acuatico = 1;
}
?>

<?php 
$titlePage=$titulo." - Inflamigos";
$descPage= $miniDesc;
$btn_activo="brincolines";


// La variable del título de la noticia 
$url = $inflable;
?>




 <?php include('header.php');?>
 

<section id="section-rounded">
  <article id="item">

<?php echo "<h3>".$titulo. "</h3>";?>

<br />
<!--Inicia lista-imagenes-->
<div class="lista-imagenes">
<?php
   $ruta="../inflables/thumbs/".$brincolin."/";
   $ruta2="../inflables/g/".$brincolin."/brincolin_inflable_";
   $images = glob($ruta . "*");
   echo "<h4>Imagenes:</h4><ul>" ; 
 
	  foreach($images as $image)
	 { 
	 	  
	 	
	 	$ext = ".jpg";/*pathinfo( $ruta2, PATHINFO_EXTENSION );*/
	 	$name = pathinfo( $image, PATHINFO_FILENAME );
	    $name = explode("thumb_",$name);
	  
	    echo '<li><a href="'.$Myurl.$ruta2.$name[0].$name[1].$ext.'" data-target="flare" data-flare-gallery="gallery1" data-flare-thumb="'.$Myurl.''.$image.'" title="'.$titulo.'"><img src="'.$Myurl.''.$image.'" alt="'.$brincolin."_thumb".'" /></a></li>';
		
	}
	if ($id_video !="")
		{ 
			
			


			echo '<li><a data-target="flare" data-flare-gallery="gallery1" data-flare-thumb="images/video.png" href="http://www.youtube.com/watch?v='.$id_video.'" title="Video de '.$titulo.'" ><img src="'.$Myurl.'images/video.png" alt ="video_'.$brincolin.'" /></a></li>';
			//echo '<li><a href="http://www.youtube.com/embed/'.$id_video.'" rel="LightFrame" title="Video de '.$titulo.'"><img src="images/video.png" alt ="video_'.$brincolin.'" /></a></li>' ;
		  
 		}

		//echo('<div class="uvideo"><iframe class="youtube-player" type="text/html" width="100%" height="50%" src="http://www.youtube.com/embed/'.$id_video.'" frameborder="0"></iframe></div>');}

	echo "</ul>";
?>
<div id ="detalle-brincolin">

<?php
echo "<p>";
echo "Características: <br />".$detalles;
if ($acuatico==true)
	{
		echo " <span>¡Máxima Diversión Acuática!</span> ";
	}
echo "</p>";
?>
</div>
</div>

			
	 
<div class="datos">
<?php
echo "<p>";
echo '<g:plusone href="http://www.inflamigos.com.mx/brincolines/'.$inflable.'/"></g:plusone>';
echo '<div data-href="http://www.inflamigos.com.mx/brincolines/'.$inflable.'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>';
echo "<br />";
echo "<h5>Precio por día: $".$precio.".00</h5>";
echo "Ancho: ".$ancho." m";
echo "<br />";
echo "Largo: ". $largo." m";
echo "<br />";
echo "Alto: ".$alto." m";
echo "<br />";
echo "Capacidad: ".$capacidad." niños";
echo "<br />";
echo "Edad recomendada: ".$edades." años";
echo "<br />";
echo "</p>";
?>
<!--<button class="btn_reservar" type="button">Reservar</button><button class="btn_reservar" type="button">Condiciones</button>-->
</div>

<div class="fb-comments" data-href="http://www.inflamigos.com.mx/brincolines/<?php echo $inflable.'/';?>"></div>

<!--Inicia menu_inflables_mini-->
<div class="menu_inflables_mini">
<h4>Ver los otros inflables</h4>
    <ul>
    <li><?php echo '<a href=""https://www.inflamigos.com.mx/appcatalogo/brincolines/castillo-aventura/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/caventura_thumb.png" alt="castillo_aventura_middle" title="Castillo Aventura"/></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/castillo-princess/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/cprincess_thumb.png" alt="castillo_princess_middle" title="Castillo Princess"/></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/escaladrilo/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/escaladrilo_thumb.png" alt="escaladrilo-middle" title="Escaladrilo" /></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/angry-box/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/angry_box.jpg"  alt="angry-box-middle" title="Angry Box" /></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/minions-box/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/minions_box_thumb.png"  alt="minions-box-middle" title="Minions Box" /></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/escaladora/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/escaladora_thumb.png" alt="escaladora_middle" title="Escaladora"/></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/dora-box/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/dora_box_thumb.png" alt="dora-box_middle" title="Dora Box"/></a></li>
   	<li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/resbaladilla-bob-esponja/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/bobesponja_thumb.png" alt="bob-esponja-middle" title="Bob Esponja Resbaladilla" /></a></li>
  	<li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/arco-slide/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/aslide_thumb.png" alt="arco_slide_middle" title="Arco Slide"/></a></li>
	<li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/ultra-cubo/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/ucubo_thumb.png" alt="ultra_cubo_middle" title="Ultra Cubo"/></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/space-lab/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/spacelab_thumb.png" alt="space-lab-middle" title="Space Lab" /></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/aqualand/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/aqualand_thumb.png" alt="aqualand-middle" title="Aqualand" /></a></li>
    <li><?php echo '<a href="https://www.inflamigos.com.mx/appcatalogo/brincolines/splash-pool/">'; ?><img src="http://www.inflamigos.com.mx/inflables/thumbs/splashpool_thumb.png" alt="splash-pool-middle" title="Splash Pool" /></a></li>
    </ul>
  </div><!--End menu_inflables_mini--> 


</article>
	
		</section>
		<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
		<?php include('footer.php');?>
		 <?php //Limpia el posible bucle, es decir, se puede volver a hacer el envío.
 $_SESSION['Listo']=0;
 ?> 