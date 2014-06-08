		 <?php
			 $titlePage="Brincolines - Inflamigos";
			 $descPage="En inflamigos contamos con 13 modelos de brincolines para todos los gustos y edades, desde una alberca de pelotas hasta un gran interactivo.";
			 $btn_activo="brincolines";
			 ?>
			 <?php include('header.php');?>

			 <section id="section-rounded">
			 	<article>
			 		<h3>Brincolines</h3>
			 		<?php include('cat_brincolines.php');?>
					<h4>También puedes descargar nuestro catálogo</h4>
					<br />
					<p> 
						Versión Word: <a href="<?php echo $Myurl; ?>/downloads/catalogo_inflamigos_2013.doc" title="Descarga el catálogo versión .doc"><img src="<?php echo $Myurl; ?>/imagenes/doc.png" width="45" height="47" alt="ico-word-download" /></a>
						<br />
						Versión PDF: <a href="<?php echo $Myurl; ?>/downloads/catalogo_inflamigos_2013.pdf" title="Descarga el catálogo versión .pdf"><img src="<?php echo $Myurl; ?>/imagenes/pdf.png" width="45" height="47" alt="ico-pdf-download" /></a>
					</p>

			
				<div class="lista">
					<div class="img-list"><img src="<?php echo $Myurl; ?>imagenes/punching-bag.png" title="alegria"/></div>
					<ol>
						<li>Mida el área que va a designar para  el brincolin inflable, para facilitarle la elección del equipo adecuado.</li>
						<li>Tenga el área lista y limpia, para instalar el brincolin y puedan disfrutarlo de inmediato.</li>
						<li>Asegurece de que el suministro eléctrico se encuentre en óptimas condiciones, el motor que usamos es de 110V (1hp).</li>
						<li>Si tiene más dudas visite la sección de <a href="http://www.inflamigos.com.mx/faq/" title="ir a las preguntas frecuentes">P.M.F.</a>(preguntas más frecuentes) o la sección de <a href="http://www.inflamigos.com.mx/contacto/" title="ir a la seccion de contacto">contacto.</a></li>
					</ol>

				</div>


		</article>
		

		</section>
		<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
		<?php include('footer.php');?>