<?php include 'init.php' ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<title>Cadastro de Imóveis</title>
</head>
<body>
	<form action="adicionandoimv.php" method="POST">
		Tipo do Imóvel <br>
		<select name="tipo">
			<!-- <option></option>
			<?php foreach ($tipos as $tipo): ?>
				<option value="<?= $tipo ?>"><?= $tipo ?></option>
			<?php endforeach ?> -->
			<option value="casa">Casa</option>
			<option value="ap">Apartamento</option>
			<option value="flat">Flat</option>
			<option value="casap">Casa de Praia</option>
			<option value="casag">Casa Geminada</option>
			<option value="mansao">Mansão</option>
		</select><br>
		Valor estimado <br>
		<input type="number" name="valor"><br>
		<button>Guardar Imóvel</button>

	</form>

</body>
</html>