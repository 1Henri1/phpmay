<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<h2>Formulario - Evento onClick</h2>
	<form name="cadastro" method="get" action="pagina_form.php">
		Nome: <input type="text" name="nome" size="40" maxlength="20" autocomplete="off"> <br/> <br/>
		<input type="submit" name="enviar">
		<br/><br/>
		<a href="#" onclick="document.cadastro.rest()">LIMPAR</a>
	</form>


</body>
</html>