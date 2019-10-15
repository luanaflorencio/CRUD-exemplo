<?php
include 'init.php';

$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];

$dados= join(',', [$cpf, $email, $senha]) . "\n";
$handle= fopen('usuario.csv','a');
fwrite($handle, $dados);
header('location: login.php');
 ?>