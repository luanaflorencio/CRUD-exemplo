 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Adicionar Livro</title>
 </head>
 <body>

 	<form action="adicionar.php" method="POST"> <!--form está iniciando o formulario, o action diz para onde vão ser enviadas as informações-->
        <fieldset> <!-- linha que fica em volta do formulario, design -->
            <legend>Dados dos livros</legend> <!-- A parte abertinha fica com esse nome dentro do legend-->
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="autor" placeholder="Autor">
            <input type="number" name="ano" placeholder="Ano">
            <input type="submit" value="Adicionar">
        </fieldset>
    </form>
	<a href="luana.php">Voltar para Tabela</a>
 </body>
 </html>
