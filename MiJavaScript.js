function validarForm(form)
{//para que se dejen espacios vacios
	if(form.NombreNuevo.value.length===0)
	{
		alert('Campo de Nombre se encuentra vacio');
		form.NombreNuevo.focus();
		return false;
	}
	if(form.ConceptoNuevo.value.length===0)
	{
		alert('Campo de Concepto se encuentra vacio');
		form.ConceptoNuevo.focus();
		return false;
	}
	return true;
}

function Eliminar(nombre)
{
	if(confirm("Desea realmente eliminar "+nombre+" del Diccionario"))
	{
		location.href="eliminar.php?name="+nombre+"";
	}
	else
	{
		location.href="index.php";
	}	
}

function AlertaRepetido()
{
	alert('Su palabra o concepto ya estan en el dicicionario, no se puede ingresar');
}

function AlertaAgregado()
{
	alert('Su palabra y concepto se han ingresado correctamente');
}