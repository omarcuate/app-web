<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form method="post" action="cargarxml.php">
<fieldset>
<legend>Llenar los datos</legend>
<label for="txtname">Nombre</label>
<input type="text" name="txtname" id="txtname" />
<br /><br />
<label for="txtApellido">Apellido</label>
<input type="text" name="txtApellido" id="txtApellido" /><br /><br />
<label for="list">Pais</label>
<select name="pais" id="list">
<option value="Peru">Peru</option>
<option value="Brasil">Brasil</option>
<option value="Bolivia">Bolivia</option>
</select><br /><br /><br />
<input type="submit" name="enviar" value="Guardar" />
</fieldset>
</form>
</body>
</html> 