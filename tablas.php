<?php 
	if(!$Con):
		//No existe coneccion
	else:
		//Si existe coneccion
		if(!isset($_GET["NumPagina"])):
			//significa que el valor no esta seteado asi que acaba de iniciar, por lo menos eso se asume xD
			$NumPagina=1;	
			Llenar($Con,$NumPagina);
		else:
			//si se presiono un bonton independientemente cual sea 
			$NumPagina=$_GET["NumPagina"];
			$NumPagina=(int)$NumPagina;
			Llenar($Con,$NumPagina);
		endif;
	endif;

function Llenar($Con, $NumPagina)
{
	$c=1; // variable para el estilo de la tabla
	$NumeroPagina=($NumPagina-1)*5;
	$Consulta="SELECT * FROM DATOS LIMIT $NumeroPagina,5";
	$result=$Con->query($Consulta);		
	while($row=mysqli_fetch_array($result)):	
		if($c%2==0):
			?>
			<tr>
				<td><?php echo "$row[0]"; ?> </td>
				<td><?php echo "$row[1]"; ?> <a href="#"  onclick="Eliminar('<?php echo "$row[0]"; ?>');"> Eliminar</a></td>
			</tr>
			<?php
		else:
			?>
			<tr class="alt">
				<td><?php echo "$row[0]"; ?> </td>
				<td><?php echo "$row[1]"; ?> <a href="#" onclick="Eliminar('<?php echo "$row[0]"; ?>');"> Eliminar</a> </td>
			</tr>
			<?php
		endif;
	$c++;
	endwhile;
}

?>