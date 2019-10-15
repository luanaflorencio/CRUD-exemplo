<?php include 'init.php'; ?>
<!DOCTYPE html>		
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<form action="auth.php" method="POST">
		E-mail <br>
		<input type="email" name="email"><br>
		Senha <br>
		<input type="password" name="senha"><br>
		<button>Entrar</button>
	</form>

</body>
</html>