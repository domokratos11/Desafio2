<html>
<head>
	<title>Prueba de Paginacion</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript"  src="MiJavaScript.js"></script>
</head>
<body>
	<?php include_once "login.php"; ?>
<div class="datagrid">
<table>
	<tfoot>
		<?php include "footer.php"; ?>
	</tfoot>
	<thead>
		<tr>
			<th>Palabra</th>
			<th>Concepto</th>
		</tr>
	</thead>
	<tbody>
		<?php include "tablas.php"; ?>
	</tbody>
</table>

<table>
	<thead>
		<tr>
			<th>Palabra</th>
			<th>Concepto</th>
		</tr>
	</thead>
	<form action="NuevoConcepto.php" method="POST" onsubmit="return validarForm(this);">
	<tbody>
		<tr class="alt">
			<td>Digite la nueva palabra: <input type="text" name="NombreNuevo" id="new"></td>
			<td>Digite el nuevo concepto: <input type="text" name="ConceptoNuevo" id="con" size="100"></td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
		<td colspan="4"><div id="paging">
			<ul>
				<li><input type="submit" title="Aceptar"></li>
			</ul>	
		</div>
		</tr>
	</tfoot>
	</form>
</table>
</div>
</body>
</html>