
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
$servicio=$_GET['servicio'];
if($servicio=="toldo"){
	$servicio = "toldo";
	$titulo = "Renta de Toldos";
	$miniDesc = "Toldos de: 3x6, 6x6 y 6x12";
	$capacidad="de 4 a 12 mesas redondas";
	$precio = "3 x 6 en $600.00<br /> 6 x 6 en $1,500.00 <br />y 6 x 12 en $2,500.00.";
	$detalles ="Contamos con toldos de 3 x 6, 6 x 6 y de 6 x 12";
	$id_video = "";
}
if($servicio=="sillas-y-mesas"){
	$servicio = "sillas-y-mesas";
	$titulo = "Sillas y Mesas ";
	$miniDesc = "Tenemos alquiler de mesas y sillas para niños y adultos";
	$precio = "";
	$detalles ="Contamos con varios modelos de sillas y mesas para adulto y también para niño, en varios colores. Incluye mantel.";
}

?>

<?php 
$titlePage=$titulo." - Inflamigos";
$descPage= $miniDesc;
 $btn_activo="servicios";


// La variable del título de la noticia 
$url = $servicio;
?>




 <?php include('header.php');?>
 

<section>
 <article id="producto">

<?php echo "<h3>".$titulo. "</h3>";?>

<br />
<!--Inicia lista-imagenes-->
<figure>
	<img src="<?php echo $Myurl ; ?>imagenes/<?php echo $servicio; ?>.jpg''" alt="inflamigos-toldos"/>
	<figcaption>
		<?php

			echo "<p>";
			echo "Características: <br />".$detalles;
			echo "</p>";
		?>
	</figcaption>
</figure>
	 
<div class="datos">
<?php
echo "<p>";
echo '<g:plusone href="http://www.inflamigos.com.mx/brincolines/'.$servicio.'/"></g:plusone>';
echo '<div class="fb-like" data-href="http://www.inflamigos.com.mx/brincolines/'.$servicio.'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>';
echo "<br />";
echo "<br />";
echo "Precio: ".$precio;
echo "<br />";
echo "</p>";
?>
<button class="btn_reservar" type="button">Reservar</button>
</div>

<div class="fb-comments" data-href="http://www.inflamigos.com.mx/servicios/<?php echo $servicio.'/';?>"></div>
<br />

<!--Inicia menu_inflables_mini-->

<div class="menu_inflables_mini">
<h4>Otros servicios</h4>
    <ul>
    <li>---</li>
    </ul>
  </div><!--End menu_inflables_mini-->
</article>

</section>
<?php include('footer.php');?>
 <?php //Limpia el posible bucle, es decir, se puede volver a hacer el envío.
 $_SESSION['Listo']=0;
 ?> 
