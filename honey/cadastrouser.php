<?php include 'init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<title>Página de Cadastro do Usuário</title>
</head>
<body>
	<?php $informimv = file('imovel.csv'); ?>

	<form  action="adicionandouser.php" method="POST">
		CPF <br>
		<input type="text" name="cpf"><br>
		E-mail <br>
		<input type="email" name="email"><br>
		Senha <br>
		<input type="password" name="senha"><br>
		<button>Cadastrar</button>
	</form>

</body>
</html>

<!--CPF (que será sua chave primária), email (ou nome de usuário (login)) e senha. A outra entidade pode ter quais atributos você quiser (lembrando que, por estar no lado N deve ter uma chave estrangeira para o usuário).-->
