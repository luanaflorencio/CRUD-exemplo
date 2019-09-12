<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="luana.css">
	<meta charset="utf-8">
	<title>Tabela PHP</title>
</head>
<body>
	<h1>Livros</h1>

	<?php 
		$livros = file('luana.csv');
        	for ($i = 0; $i < sizeof($livros); $i++) {
            	$livros[$i] = explode(",", $livros[$i]);
            }
     ?>

	<table>

		<tr>
		   	<th>Nome do Livro</th>
		    <th>Autor</th>
		    <th>Ano de lançamemto</th>
       </tr>

		<?php foreach ($livros as $id => $dados): ?>
	        <tr> 
		        <td><?= $dados[0] ?></td> 
		        <td><?= $dados[1] ?></td> 
		        <td><?= $dados[2] ?></td>
		        <td><a href="removendo.php?id=<?= $id ?>">Remover</a></td>
	       	</tr>
        <?php endforeach ?>


	</table> 
	<a href="formulario.php">Adicionar</a>
</body>
</html>

   