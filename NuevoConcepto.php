<script type="text/javascript" src="MiJavaScript.js"></script>
<?php
include "login.php";
$nombre=$_POST['NombreNuevo'];
$concepto=$_POST['ConceptoNuevo'];
//tanto nombre como concepto estan seteados
$ConsultaNombre="SELECT * FROM datos WHERE nombre='$nombre'  or concepto='$concepto'";
//$ConsultaConcept=
$result=$Con->query($ConsultaNombre);
$row=mysqli_num_rows($result);
if($row>0):
	//indica que el concepto o palabra ya esta repetido pues encontro un resultado
	?> <script> AlertaRepetido(); setTimeout("location.href='index.php'",500);</script> <?php 
else:
	//no existe esta palabra y este concepto, se puede proseguir
	$Nuevo="INSERT INTO datos (nombre,concepto) VALUES ('$nombre','$concepto')";
	$Con->query($Nuevo);
	?> <script> AlertaAgregado(); setTimeout("location.href='index.php'",500);</script> <?php
endif;

?>