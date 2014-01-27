 <?php 
 $titlePage="Categoria - Inflamigos";
 $categoria=$_GET['categoria'];
 $descPage="Empresas encontradas para la categoría Payasos.";
 

include('data/data.php');
$con = mysql_connect($server, $user, $pass)or die (mysql_error());
mysql_select_db($db,$con) or die (mysql_error());

 ?>
 
 
 <?php include('header.php');?>
 
<section>  <article>
  
   <a href="armatuevento.php" title="volver a categorias arma tu evento">Volver a las categorias</a>
   <br />
   
 <?php $sql = "SELECT * FROM proveedores WHERE categoria LIKE '$categoria'";
$result = mysql_query($sql) or die (mysql_error());
$row = mysql_fetch_array($result);
?>


<h3><?php echo $categoria;?></h3>
<h4><?php echo $row['nombre'];?></h4>
<p><?php echo $row['imagen'];?></p>
<p><?php echo $row['descripcion'];?></p>
<h4>Contacto:</h4>
<dl>
<dt>Telefono:</dt>
<dd><?php echo $row['telefono'];?></dd>
<dt>Celular:</dt>
<dd><?php echo $row['celular'];?></dd>
<dt>Nextel</dt>
<dd><?php echo $row['nextel'];?></dd>
<dt>Direcci&oacute;n:</dt>
<dd><?php echo $row['direccion'];?></dd>
<dt>Twitter:</dt>
<dd><?php echo $row['twitter'];?></dd>
<dt>Facebook:</dt>
<dd><?php echo $row['facebook'];?></dd>
<dt>E-Mail</dt>
<dd><?php echo $row['email'];?></dd>
<dt>Web:</dt>
<dd><?php echo $row['url'];?></dd>
</dl>

<p>&nbsp;</p>


<?php

mysql_free_result($result);
mysql_close($con);

?>

</article>
<?php include('aside.php');?>


</section>
<?php include('footer.php');?>