
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
if($servicio=="toldos"){
	$titulo = "Renta de Toldos";
	$miniDesc = "Toldos de: 3x6, 6x6 y 6x12";
}
if($servicio=="sillas-y-mesas"){
	$titulo = "Sillas y Mesas ";
	$miniDesc = "Sillas y mesas para niños y adultos";
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

<?php 
	if ($servicio == "toldos")
		{
		$modelo = array("3x6", "6x6", "6x12");
		
			$i = 0;
		
		for ($i=0; $i<count($modelo); $i++)
			{

				if($modelo[$i] == $modelo[0])
						{
							$h3 = "Toldo de 3 x 6";
							$capacidad="3 mesas tablones";
							$precio = "$600.00";
							$detalles ="Recomendado para espacios pequeños, para talleres u otros juegos.";
							$id_video = "";
						}
				if($modelo[$i] == $modelo[1])
						{
							$h3= "Toldo de 6 x 6";
							$capacidad="4 mesas redondas";
							$precio = "$1,500.00";
							$detalles ="Para casi cualquier espacio";
							$id_video = "";
						}
				if($modelo[$i] == $modelo[2])
						{
							$h3= "Toldo de 6 x 12";
							$capacidad="8";
							$precio = "$2,500.00";
							$detalles ="Patra espacios amplios, tus invitados estaran bien resguardados de el sol o la lluvia.";
							$id_video = "";
						}


				echo '
			
			
					<article id="item">

						<h3>'.$h3.'</h3>

						<br />
						<!--Inicia lista-imagenes-->
						<figure>
							<img src="'.$Myurl.'imagenes/servicios/inflamigos_'. $servicio.'_'.$modelo[$i].'.jpg" alt="inflamigos-toldos"/>
							<figcaption>
								

									<p>
									Características: <br />'.$detalles.'
									</p>
								
							</figcaption>
						</figure>
							 
						<div class="datos">

						<p>
						<g:plusone href="http://www.inflamigos.com.mx/brincolines/'.$servicio.'/"></g:plusone>
						<div class="fb-like" data-href="http://www.inflamigos.com.mx/brincolines/'.$servicio.'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>
						<br />
						<br />
						Precio: '.$precio.'
						<br />
						</p>
						 <form id ="reserva-form" action="reservacion/envio.php" method="post">
			                  <h4>¡Reserva ahora!</h4>
			                 	<input type="email" id="user-email" name="email" placeholder="Email" required/>
			                  	<input type="text" id="user-mensaje"  name="mensaje" placeholder="Mensaje" required/>
			                   	<input id="user-submit" type="submit" name="submit" value="Enviar" />
			                  	<input type="hidden" value="'.$servicio.'_'.$modelo[$i].'" name="Item">
			                    <p><strong class="icon-phone"> 9841416137</strong></p>

           				 </form>
						</div>
						
						<div class="fb-comments" data-href="http://www.inflamigos.com.mx/servicios/'.$servicio.'/"></div>
						<br />
					</article>


			';}

	}
	if ($servicio == "sillas-y-mesas")
		{
		$modelo = array("silla_adulto_plegable", "silla_infantil_plegable", "mesa_adulto_tablon", "mesa_adulto_redonda", "mesa_infantil");
		
			$i = 0;
		
		for ($i=0; $i<count($modelo); $i++)
			{

				if($modelo[$i] == $modelo[0])
						{
							$h3 = "Silla adulto plegable";
							$precio = "$7.00";
							$detalles ="Silla plegable, de plastico con metal, en color negro.";
							$id_video = "";
						}
				if($modelo[$i] == $modelo[1])
						{
							$h3= "Silla infantil plegable";
							$precio = "$7";
							$detalles ="Silla infantil plegable. Contamos con varios colores.";
							$id_video = "";
						}
				if($modelo[$i] == $modelo[2])
						{
							$h3= "Mesa adulto Tablón";
							$capacidad="10 sillas";
							$precio = "$70.00";
							$detalles ="Mesa para adulto, modelo tablón, de acero y fibra de vidrio.";
							$id_video = "";
						}
			
				if($modelo[$i] == $modelo[3])
						{
							$h3= "Mesa adulto redonda";
							$capacidad="10 sillas";
							$precio = "$70.00";
							$detalles ="Mesa para adulto, modelo redonda, de acero y fibra de vidrio.";
							$id_video = "";
						}

				if($modelo[$i] == $modelo[4])
						{
							$h3= "Mesa infantil Tablón";
							$capacidad="10 sillas infantiles";
							$precio = "$70.00";
							$detalles ="Mesa para niños, modelo tablón, de acero y fibra de vidrio.";
							$id_video = "";
						}
				
				echo '
			
			
					<article id="item">

						<h3>'.$h3.'</h3>

						<br />
						<!--Inicia lista-imagenes-->
						<figure>
							<img src="'.$Myurl.'imagenes/servicios/inflamigos_'. $servicio.'_'.$modelo[$i].'.jpg" alt="inflamigos-toldos"/>
							<figcaption>
								

									<p>
									Características: <br />'.$detalles.'
									</p>
								
							</figcaption>
						</figure>
							 
						<div class="datos">

						<p>
						<g:plusone href="http://www.inflamigos.com.mx/brincolines/'.$servicio.'/"></g:plusone>
						<div class="fb-like" data-href="http://www.inflamigos.com.mx/brincolines/'.$servicio.'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>
						<br />
						<br />
						Precio: '.$precio.'
						<br />
						</p>
						<form id ="reserva-form" action="reservacion/envio.php" method="post">
			                  <h4>¡Reserva ahora!</h4>
			                 	<input type="email" id="user-email" name="email" placeholder="Email" required/>
			                  	<input type="text" id="user-mensaje"  name="mensaje" placeholder="Mensaje" required/>
			                   	<input id="user-submit" type="submit" name="submit" value="Enviar" />
			                  	<input type="hidden" value="'.$servicio.'_'.$modelo[$i].'" name="Item">
			                    <p><strong class="icon-phone"> 9841416137</strong></p>

           				 </form>
						</div>
						</div>
						
						<div class="fb-comments" data-href="http://www.inflamigos.com.mx/servicios/'.$servicio.'/"></div>
						<br />
					</article>


			';}

	}
?>





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
