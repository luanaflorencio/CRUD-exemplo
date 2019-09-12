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
		$livros = file('luana.csv');  //o file está pegando os dados do arquivo e colocando na variavel livros 
        	for ($i = 0; $i < sizeof($livros); $i++) {  //for percorrendo o todos os elementos do array 
            	$livros[$i] = explode(",", $livros[$i]);  //pelos indices dando explode transformando-os em string e dizendo que a vírgula é que
            												//está separando os indices (elementos) da string
            }
     ?>

	<table>

		<tr>
		   	<th>Nome do Livro</th>
		    <th>Autor</th>
		    <th>Ano de lançamemto</th>
       </tr>

		<?php foreach ($livros as $id => $dados): //array, indice, elementos ?>  
	        <tr> 
		        <td><?= $dados[0] ?></td> 
		        <td><?= $dados[1] ?></td> 
		        <td><?= $dados[2] ?></td>
		        <td><a href="removendo.php?id=<?= $id ?>">Remover</a></td> <!-- esse é o link que vai redirecionar o indice da linha para o    																	 arquivo removendo, excluindo a linha  -->
	       	</tr>
        <?php endforeach ?>


	</table> 
	<a href="formulario.php">Adicionar</a> <!-- Redireciona para o arquivo do formulario, apertando em add -->
</body>
</html>

   