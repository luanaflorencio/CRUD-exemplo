<?php
include 'init.php';
$cpf= $_SESSION['cpf'];
$tipo= $_POST['tipo'];
$valor= $_POST['valor'];

$handle= fopen('imovel.csv' ,'a');
$dados= join(',', [$tipo, $valor, $cpf]). "\n";
fwrite($handle, $dados);
header('location: tabelaimv.php');
 ?>