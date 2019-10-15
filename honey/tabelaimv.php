<?php include 'init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="table.css">
	<meta charset="utf-8">
	<title>Imovéis</title>
</head>
<body>
	<h1>Seus imóveis</h1>
	<?php $cpf=$_SESSION['cpf']; ?>
	<?php echo $cpf ?>
	<?php
		$informimv = file('imovel.csv');
		for($i = 0; $i < sizeof($informimv); $i++){
			$informimv[$i] = explode(',', $informimv[$i]);
		}
	?>

	<table>
		<tr>
		<th>Tipo de Imóvel</th>
		<th>Valor</th>
		<th>Deletar</th>
		</tr>

		<?php foreach($informimv as $id => $dados):?>
			<?php if ($cpf==$dados[2]): ?>
			<?php endif ?>
				<tr>
					<td> <?= $dados[0] ?> </td>
					<td> <?= $dados[1] ?> </td>
					<td><a href="deletar.php?id=<?= $id?>">Deletar</a></td>
				</tr>

			
		<?php endforeach ?>
	</table>

</body>
</html>