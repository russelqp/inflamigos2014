<!DOCTYPE html>
<html lang="es">
<?php
flush();
$url_a = "http://www.inflamigos.com.mx/prueba2014/";
$url_r = "http://127.1.0.0/inflamigos2014/";
$Myurl = $url_r;
?>
<head>
<meta charset="utf-8">

<link href="<?php echo $Myurl; ?>favicon.ico" rel="icon" type="image/x-icon" />
<meta name="verify-v1" content="/dBtizkBC816xdpFj5usuzYV1icSO40rK16qYBZpRa4=" />
<meta name="Description" content="<?php echo $descPage; ?>" />
<meta name="Keywords" content="brincolines, inflables, renta, fiestas infantiles, entretenimiento infantil, riviera maya, playa del carmen, hoteles, eventos empresariales, castillos, publicidad, fiestas, diversión, entretenimiento, interactivo, renta de inflables, juegos inflables, renta de brincolines, niños." />
<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
<meta property="fb:admins" content="1055109002"/>
<meta property="fb:app_id" content="478839412179968"/>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans|Wendy+One' rel='stylesheet' type='text/css'>
<title><?php echo $titlePage; ?></title>

<link href="<?php echo $Myurl; ?>style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $Myurl; ?>gradientbg.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $Myurl; ?>prefixfree.min.js"></script>
<link href="<?php echo $Myurl; ?>css/lightbox.css" rel="stylesheet" />
<script type="text/javascript" src="[JS library]"></script>

<link rel="stylesheet" type="text/css" href="engine1/style.css" />

<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]-->

<!--<script type="text/javascript" src="gmaps-master/gmaps.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
<script>$(document).ready(function(){
  map = new GMaps({
    div: '#mapa',
    lat: 20.627764,
    lng: -87.092196,
	zoom:17,

  });
});
map.addMarker({
  lat: 20.627764,
  lng: -87.092196,
  title: 'Inflamigos',
  click: function(e) {
    alert('You clicked in this marker');
  }
});
</script>-->

<!-- Coloca esta etiqueta en la cabecera o justo antes de la etiqueta de cierre "body". -->

</head>

<body>
<?php $dir_home=""; ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=478839412179968";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
  

</script>

<div id="container">
<!--<div class="ayudaonline"><a href="#">Ayuda en Linea</a></div>-->
<header>
       <div id="logo">
        <a href="<?php echo $Myurl; ?>"><img src="<?php echo $Myurl; ?>/imagenes/logoinflamigos.png" alt="logo_inflamigos" title="ir al home"/></a>
       </div>
       <div id="info"><h1>Inflamigos</h1>
         <h2>Renta de brincolines en Playa del Carmen</h2>
         <p>Y toda la Riviera Maya | <strong class="icon-phone"> 9841416137</strong></p>
       </div>
       <div id="inflabletop">
        <?php
            $inflabletop ="ultra-cubo";
        ?>
          <a href="<?php echo $Myurl; ?>brincolines/<?php echo $inflabletop; ?>/" title="<?php echo $inflabletop; ?>">
            <img src="<?php echo $Myurl; ?>imagenes/inflable-top/<?php echo $inflabletop; ?>.png" class="inflable-top" alt="<?php echo $inflabletop; ?>" />
          </a>
       </div>
            <?php $btn_activo;?>
              <nav>
                <ul>
                    <li id="bk-home" <?php if ($btn_activo == "index") {echo 'class="btn_activo"';} ?> ><a href="<?php echo $Myurl; ?>" title="ir al inicio ;)" >Inicio</a></li>
                    <li id="bk-brincolines" <?php if ($btn_activo == "brincolines") {echo 'class="btn_activo"';} ?>><a href="<?php echo $Myurl; ?>brincolines/" title="ver los brincolines :D" >Brincolines</a></li>
                    <li id="bk-acercade" <?php if ($btn_activo == "acercade") {echo 'class="btn_activo"';} ?>><a href="<?php echo $Myurl; ?>acercade/" title="ver quienes somos ?">Acercade</a></li>
                    <li id="bk-faq" <?php if ($btn_activo == "faq") {echo 'class="btn_activo"';} ?>><a href="<?php echo $Myurl; ?>faq/" title="ver las preguntas frecuentes ?">Faq</a></li>
                    <li id="bk-contacto" <?php if ($btn_activo == "contacto") {echo 'class="btn_activo"';} ?>><a href="<?php echo $Myurl; ?>contacto/" title="contactanos =)">Contacto</a></li>
                    <li id="bk-blog" <?php if ($btn_activo == "blog") {echo 'class="btn_activo"';} ?>><a href="<?php echo $Myurl; ?>blog/" title="Blog" >Blog</a></li>
                      <!--
                      <li><a href="armatuevento.php" title="Todo para tus eventos" class="btn_menu"><img src="#" alt="ico_tpte" /><br />AtuE</a></li> -->
              </ul>
              </nav>

</header>  <!-- end #header -->
