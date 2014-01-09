<?php
// la parte en donde aparecen los enlaces para mostrar todos los elementos
$Consulta="SELECT * FROM DATOS";//consulta de todos los elementos
$result=$Con->query($Consulta);//ejecuntando consulta
$numero=mysqli_num_rows($result);//nos devuelve el numero de elementos
	?>
	<tr>
		<td colspan="4">
			<div id="paging">
			<ul>
				<?php
					$c=1;
					for($i=0;$i<$numero;$i++):
						if($i%5==0):
							//para sacar por GET el numero de la pagina
					?>
					<li><a href="index.php?NumPagina=<?php echo $c; ?>"><span> <?php echo $c; $c++;?></span></a> </li>
					<?php
						endif;
					endfor;
					?>
			</ul>
			</div>
		</td>
	</tr>