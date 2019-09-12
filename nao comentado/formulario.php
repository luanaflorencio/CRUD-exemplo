 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Adicionar Livro</title>
 </head>
 <body>

 	<form action="adicionar.php" method="POST">
        <fieldset>
            <legend>Dados dos livros</legend>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="autor" placeholder="Autor">
            <input type="number" name="ano" placeholder="Ano">
            <input type="submit" value="Adicionar">
        </fieldset>
    </form>
	<a href="luana.php">Voltar para Tabela</a>
 </body>
 </html>
