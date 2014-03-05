 <?php
  $titlePage="Inflamigos - Renta de brincolines inflables en la Riviera Maya";
  $descPage="Brincolines Inflamigos, renta de juegos inflables para fiestas y eventos en Playa del Carmen y toda la Riviera Maya. Entretenimiento Infantil.";
  $btn_activo="index";
  ?>
 <?php include('header.php');?>
<!--<div class="ubicacion"><p>Inicio</p></div>-->
<section id="welcome">

      <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
<li><img src="data1/images/banner_1.jpg" alt="Inflamigos_banner_1" title="Eventos Hoteleros" id="wows1_0"/></li>
<li><img src="data1/images/banner_2.jpg" alt="Inflamigos_banner_2" title="Diversión Acuática" id="wows1_1"/></li>
<li><img src="data1/images/banner_3.jpg" alt="Inflamigos_banner_3" title="Al aire libre" id="wows1_2"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Eventos Hoteleros"><img src="data1/tooltips/banner_1.jpg" alt="_banner_1"/>1</a>
<a href="#" title="Diversión Acuática"><img src="data1/tooltips/banner_2.jpg" alt="_banner2"/>2</a>
<a href="#" title="Al aire libre"><img src="data1/tooltips/banner_3.jpg" alt="_banner_3"/>3</a>
</div></div>
  <div class="ws_shadow"></div>
  </div>
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
  <!-- End WOWSlider.com BODY section -->

    	<div id="box-ofer">
            
            <form action="reservacion/envio.php" method="post">
                  <h4>¡Reserva ahora!</h4>
                 	<input type="email" id="user-email" name="email" placeholder="Email" required/>
                  	<input type="text" id="user-mensaje"  name="mensaje" placeholder="Mensaje" required/>
                   	<input id="user-submit" type="submit" name="submit" value="Enviar" />
                    <input type="hidden" value="Página principal" name="item">
                 <p><strong class="icon-phone"> 9841416137</strong></p>

            </form>

            <div id="box-sm">
                <ul>
                     <li><a href="https://plus.google.com/108078750244157653212/"  class="icon-google-plus" title="Página Inflamigos en Google+"></a></li>
                     <li><a href="http://www.facebook.com/inflamigos"  class="icon-facebook" title="Fanpage Inflamigos" ></a></li> 
                      <li><a href="http://twitter.com/#!/inflamigos" class="icon-twitter" title="Sigue nuestros tweets"></a></li>
                     <li><a href="http://vimeo.com/user11306967"  class="icon-vimeo" title="Videos Inflamigos en Vimeo"></a></li>
                     <li><a href="http://www.youtube.com/user/inflamigos/"  class="icon-youtube" title="Videos de Inflamigos en Youtube"></a></li>
                </ul>
            </div>

      </div>

</section>

<section id="welcome-servicios">
<article>
<h3>Nuestros servicios</h3>
<figure class="miniserv">
  <img src="<?php echo $Myurl; ?>imagenes/inflamigos-renta-de-brincolines.jpg" alt="" />
  <h4>Renta de Brincolines</h4>
  <figcaption>Tenemos una variedad de brincolines</figcaption>
   <p><a href="<?php echo $Myurl; ?>brincolines/" title="">Ver más</a><p><br />
  <p class="compartir">
   <div class="fb-like" data-href="http://www.inflamigos.com.mx/brincolines/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
  </p>

</figure>
<figure class="miniserv">
  <img src="<?php echo $Myurl; ?>imagenes/servicios/inflamigos_toldos_6x6.jpg" alt="" />
   <h4>Renta de Toldos</h4>
  <figcaption>Contamos con toldos de diferentes medidas: 3 x 6, 6 x 6 y 6 x 12.</figcaption>
  <p><a href="<?php echo $Myurl; ?>servicios/toldos/" title="">Ver más</a><p><br />
  <p class="compartir">
   <div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/toldos/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
  </p>
  
</figure>
<figure class="miniserv">
  <img src="<?php echo $Myurl; ?>imagenes/servicios/inflamigos_sillas-y-mesas_silla_adulto_plegable.jpg" alt="" />
   <h4>Alquiler de sillas y mesas</h4>
  <figcaption>Manejamos paquetes de un tablón con 10 sillas, para niños y adultos.</figcaption>
   <p><a href="<?php echo $Myurl; ?>servicios/sillas-y-mesas/" title="">Ver más</a><p><br />
  <p class="compartir">
   <div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/sillas-y-mesas/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
  </p>
</figure>
</article>
</section>

<section id="boletin_video">

<?php include('aside.php');?>
<!--
    <h3>Bienvenida al Sitio</h3>
    <p><strong>Playa del Carmen, Quintana Roo, Mexico</strong></p>
    

<p  class="p1"><strong>Inflamigos, </strong>ofrece servicio de renta de juegos inflables a toda la <strong>Riviera Maya, </strong>brindando entretenimiento infantil para tus eventos: empresariales, campañas publicitarias,  graduaciones, primera comunión, bautizo, confirmación, cumpleaños, bodas, quinceaños, ferias, expos, hoteles, posadas, halloween y otros eventos especiales. Conoce más de nosotros en la sección <a href="http://www.inflamigos.com.mx/acercade.php" title="ir a acerca de inflamigos">acerca de</a>.</p>
<p class="p2"><a href="http://www.inflamigos.com.mx/brincolines.php" title="ver los brincolines inflables">Nuestros brincolines</a> son innovadores, fabricados con  material importado y de alta calidad, con el respaldo de nuestros proveedores.</p>
<p class="p3">Aparta tu brincolin con un 50% de anticipo a la brevedad, para asegurar la disponibilidad  del equipo. Nosotros te lo llevamos hasta el lugar del evento.</p>
<p class="p4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contamos con 10 modelos diferentes, entre ellos: <a href="http://www.inflamigos.com.mx/inflable/castillo-aventura/" title="ver el castillo inflable">castillos inflables</a>, <a href="http://www.inflamigos.com.mx/inflable/aqualand/" title="ver aqualand">chapoteaderos</a>, <a href="http://www.inflamigos.com.mx/inflable/escaladora/" title="ver el inflable escaladora inflable">escaladora</a>, un <a href="http://www.inflamigos.com.mx/inflable/space-lab/" title="ver Inflable: SpaceLab">laboratorio espacial</a>, una <a href="http://www.inflamigos.com.mx/inflable/escaladrilo/" title="ver el inflable escaladrilo">resbaladilla</a> para la piscina y un interactivo <a href="http://www.inflamigos.com.mx/inflable/ultra-cubo/" title="ver el inflable ultra cubo">ultracubo</a>. </p>
-->

<article id="banner_video">
<iframe id="vp1XqISc" title="Video Player" width="432" height="243" frameborder="0" src="https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&e=1391897476&f=XqIScB4M20jd1Db100j1Vg&d=0&m=a&r=360p&volume=100&start_res=360p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=" allowfullscreen></iframe>

</article>
<blockquote>Brincolines <strong>Inflamigos</strong>, los más divertidos amigos inflables para tus niños.</blockquote>
</section>
<?php include('footer.php');?>