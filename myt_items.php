
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
if($servicio=="skydancers"){
	$titulo = "SkyDancers";
	$miniDesc = "Sky Dancers, para tus promociones";
}
if($servicio=="sillas-y-mesas"){
	$titulo = "Sillas y Mesas";
	$miniDesc = "Sillas y mesas para niños y adultos";
}


$titlePage=$titulo." - Inflamigos";
$descPage= $miniDesc;
$btn_activo="servicios";


// La variable del título de la noticia 
$url = $servicio;
?>


<?php include('header.php');?>
 
<section id="section-rounded">

<?php 
	if ($servicio == "toldos")
		{
		$modelo = array("toldo-3x6", "toldo-6x6", "toldo-6x12");
		
			$i = 0;
		
		for ($i=0; $i<count($modelo); $i++)
			{

				if($modelo[$i] == $modelo[0])
						{
							$h3 = "Toldo de 3 x 6";
							$capacidad="Tres mesas tablones o dos redondas";
							$precio = "750";
							$detalles ="Recomendado para espacios pequeños, para realización de talleres o actividades. Puedes añadirles paredes, $50.00 pesos extra por cada lado.";
							$id_video = "";
							$img = "toldo_3x6";
						}
				if($modelo[$i] == $modelo[1])
						{
							$h3= "Toldo de 6 x 6";
							$capacidad="5 mesas redondas";
							$precio = "1450";
							$detalles ="Para casi cualquier espacio";
							$id_video = "";
							$img = "toldo_6x6";
						}
				if($modelo[$i] == $modelo[2])
						{
							$h3= "Toldo de 6 x 12";
							$capacidad="10 mesas redondas";
							$precio = "2450";
							$detalles ="Para espacios amplios, tus invitados estaran bien resguardados de el sol y de la lluvia.";
							$id_video = "";
							$img = "toldo_6x12";
						}


				echo '
			
			
					<article id="item">

						<h3>'.$h3.'</h3>

						<br />
						<!--Inicia lista-imagenes-->
						<figure>
							<img src="'.$Myurl.'imagenes/servicios/inflamigos_'.$img.'.jpg" alt="inflamigos-toldos"/>
							<figcaption>
								

									<p>
									Características: <br />'.$detalles.'
									</p>
								
							</figcaption>
						</figure>
							 
						<div class="datos">

						<p>
						<g:plusone href="http://www.inflamigos.com.mx/servicios/'.$modelo[$i].'/"></g:plusone>
						<div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/'.$modelo[$i].'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>
						<br />
						<br />
						Precio: <span class="precio">$'.$precio.'.00</span>
						<br />
						</p>
						
						<!--<button class="btn_reservar" type="button">Reservar</button><button class="btn_reservar" type="button">Condiciones</button>-->
						</div>

						<div class="fb-comments" data-href="http://www.inflamigos.com.mx/servicios/'.$modelo[$i].'/"></div>
						<br />
					</article>


			';}

	}
	if ($servicio == "skydancers")
		{
		$modelo = array("vino", "welcome", "lila");
		
			$i = 0;
		
		for ($i=0; $i<count($modelo); $i++)
			{

				if($modelo[$i] == $modelo[0])
						{
							$h3 = "Sky Tube Color Vino";
							$precio = "200";
							$detalles ="Skydancer sencillo, color vino, para darle un toque elegante a tus promociones.";
							$id_video = "";
							$img = "skydancers_vino";
						}
				if($modelo[$i] == $modelo[1])
						{
							$h3= "Sky Dancer Welcome";
							$precio = "250";
							$detalles ="Divertido Skydancer con brazos y rostro, con las palabras Welcome y Bienvenido, genial para cualquier tipo de evento.";
							$id_video = "";
							$img = "skydancers_welcome";
						}
				if($modelo[$i] == $modelo[2])
						{
							$h3= "Sky Tube Morado";
							$precio = "200";
							$detalles ="Skydancer sencillo, color morado, para darle un toque lujoso a tus promociones.";
							$id_video = "";
							$img = "skydancers_morado";
						}


				echo '
			
			
					<article id="item">

						<h3>'.$h3.'</h3>

						<br />
						<!--Inicia lista-imagenes-->
						<figure>
							<img src="'.$Myurl.'imagenes/servicios/inflamigos_'.$img.'.jpg" alt="inflamigos-skydancers"/>
							<figcaption>
								

									<p>
									Características: <br />'.$detalles.'
									</p>
								
							</figcaption>
						</figure>
							 
						<div class="datos">

						<p>
						<g:plusone href="http://www.inflamigos.com.mx/servicios/skydancers/'.$modelo[$i].'/"></g:plusone>
						<div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/skydancers/'.$modelo[$i].'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>
						<br />
						<br />
						Precio: <span class="precio">$'.$precio.'.00</span>
						<br />
						</p>
						
						<!--<button class="btn_reservar" type="button">Reservar</button><button class="btn_reservar" type="button">Condiciones</button>-->
						</div>

						<div class="fb-comments" data-href="http://www.inflamigos.com.mx/servicios/skydancers/'.$modelo[$i].'/"></div>
						<br />
					</article>


			';}

	}
	if ($servicio == "sillas-y-mesas")
		{
		$modelo = array("silla-adulto-plegable", "silla-infantil-plegable", "mesa-adulto-tablon", "mesa-adulto-redonda", "mesa-infantil");
		
			$i = 0;
		
		for ($i=0; $i<count($modelo); $i++)
			{

				if($modelo[$i] == $modelo[0])
						{
							$h3 = "Silla adulto plegable";
							$precio = "7";
							$detalles ="Silla plegable, de plastico con metal, en color negro.";
							$id_video = "";
							$img = "silla_adulto_plegable"; 
						}
				if($modelo[$i] == $modelo[1])
						{
							$h3= "Silla infantil plegable";
							$precio = "7";
							$detalles ="Silla infantil plegable. Contamos con varios colores.";
							$id_video = "";
							$img = "silla_infantil_plegable";
						}
				if($modelo[$i] == $modelo[2])
						{
							$h3= "Mesa adulto Tablón";
							$capacidad="10 sillas";
							$precio = "70";
							$detalles ="Mesa para adulto, modelo tablón, de acero y fibra de vidrio.";
							$id_video = "";
							$img ="mesa_adulto_tablon";
						}
			
				if($modelo[$i] == $modelo[3])
						{
							$h3= "Mesa adulto redonda";
							$capacidad="10 sillas";
							$precio = "70";
							$detalles ="Mesa para adulto, modelo redonda, de acero y fibra de vidrio.";
							$id_video = "";
							$img ="mesa_adulto_redonda";
						}

				if($modelo[$i] == $modelo[4])
						{
							$h3= "Mesa infantil Tablón";
							$capacidad="10 sillas infantiles";
							$precio = "70";
							$detalles ="Mesa para niños, modelo tablón, de acero y fibra de vidrio.";
							$id_video = "";
							$img = "mesa_infantil";
						}
				
				echo '
			
			
					<article id="item">

						<h3>'.$h3.'</h3>

						<br />
						<!--Inicia lista-imagenes-->
						<figure>
							<img src="'.$Myurl.'imagenes/servicios/inflamigos_'.$img.'.jpg" alt="inflamigos-toldos"/>
							<figcaption>
								

									<p>
									Características: <br />'.$detalles.'
									</p>
								
							</figcaption>
						</figure>
							 
						<div class="datos">

						<p>
						<g:plusone href="http://www.inflamigos.com.mx/servicios/'.$modelo[$i].'/"></g:plusone>
						<div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/'.$modelo[$i].'/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="true"></div>
						<br />
						<br />
						Precio: <span class="precio">$'.$precio.'.00</span>
						<br />
						</p>
						
						<!--<button class="btn_reservar" type="button">Reservar</button><button class="btn_reservar" type="button">Condiciones</button>-->
						</div>
					
						
						<div class="fb-comments" data-href="http://www.inflamigos.com.mx/servicios/'.$modelo[$i].'/"></div>
						<br />
					</article>


			';}

	}
?>





<!--Inicia menu_inflables_mini-->
<!--<article>
<div class="menu_inflables_mini">
<h4>Otros servicios</h4>
    <ul>
    <li></li>
    </ul>
  </div>
</article>
-->
</section>
<?php include('footer.php');?>
 <?php //Limpia el posible bucle, es decir, se puede volver a hacer el envío.
 $_SESSION['Listo']=0;
 ?> 
