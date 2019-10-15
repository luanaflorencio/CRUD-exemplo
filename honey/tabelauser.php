<?php include 'init.php';
$autenticado = $_SESSION = ['autenticado'] ?? false;
if($autenticado !== true) {
	header('location: login.php');
	exit();
}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="table.css">
	<meta charset="utf-8">
	<title>Usuários e seus Imovéis</title>
</head>
<body>
	<h1>Usuários e seus Imovéis</h1>

	<?php
		$informuser = file('usuario.csv');
		for($i = 0; $i < sizeof($informuser); $i++){
			$informuser[$i]= explode(',', $informuser[$i]);
		}
	?>


	<table>
		<tr>
			<th>CPF</th>
			<th>Usuário</th>
		</tr>

		<?php foreach ($informuser as $id => $dados): ?>
			<tr>
				<td> <?= $dados[0] ?> </td>
				<td> <?= $dados[1] ?> </td>
			</tr>
		<?php endforeach ?>
	</table>

</body>
</html>