 <?php 
 $titlePage="Contacto - Inflamigos";
 $descPage="¡Contáctanos!, en brincolines inflamigos, estamos al pendiente de tus comentarios o sugerencias acerca de nuestros servicios de renta de inflables";
 $btn_activo="contacto";
 ?>
 <?php include('header.php');?>
 
<section>
  <article>
  
    <h3>Contactanos  <a href="http://www.facebook.com/pages/Playa-Del-Carmen-Mexico/inflamigos/108059039214265?ref=ts" title="ir a nuesta pagina de facebook"><img src="http://www.inflamigos.com.mx/imagenes/mf.png" alt="ico inflamigos facebook" width="60" height="54"/></a><a href="http://www.twitter.com/inflamigos" title="ir a nuesta pagina de twitter"><img src="http://www.inflamigos.com.mx/imagenes/mt.png" alt="ico inflamigos twitter" width="60" height="54"/>  </a> </h3>
   <br />
   
           <!--<div id="mapa"> </div>-->
  <br />
 
  
    <p>Para mayores informes sobre la renta de nuestros juegos inflables, puedes llamar al numero de celular 9841416137, enviandonos un e-mail a: buzon@inflamigos.com.mx &oacute; por medio de nuestro formulario de contacto:</p>

   	<div id="contact-area">
    
    <h4>Formulario de contacto</h4>
    <br />
    <br />
			
  <form method="post" action="../email/sendmail.php">
			
				  <p>Nombre: <br /><input type="text" name="nombre" class="nombre" /></p>
				  <p>Tel&eacute;fono: <br /><input type="text" name="telefono" class="telefono" /></p>
				  <p>Email: <br /><input type="text" name="email" class="email" /></p>
                  <div class="clearfloat"></div>
                                 
                   <br />
                   <p>Mensaje:<br />
                   <br />
		            <textarea name="mensaje" id="mensaje"></textarea>
                   
                     </p>
                     <br />
                      <p>¿Que te parece el sitio?<br />
                  <br />
                    <p>  <input type="radio" name="opinion" value="bueno" class="opinion"/>Bueno                           
                      <input name="opinion" type="radio" class="opinion" value="regular" />Regular  
                      <input type="radio" name="opinion" value="malo" class="opinion" />Malo
              </p>
                  
                      <br />
                      <br />
                  <p> <input type="submit" name="submit" value="Enviar" class="submit-button" /></p>
                    
                    
                    </form>
		
		</div>
   
    <p>&nbsp;</p>

    <blockquote>Brincolines <strong>Inflamigos</strong>, los m&aacute;s divertidos amigos inflables para tus ni&ntilde;os.</blockquote>
<p>&nbsp;</p>
<!--<div class="fb-like-box" data-href="http://www.facebook.com/108059039214265" data-width="240" data-height="232" data-show-faces="true" data-stream="false" data-header="false"></div>-->
 </article>
<?php include('aside.php');?>
</section>
<?php include('footer.php');?>