<?php
include 'init.php';

$deletar = $_GET ['id'];
$dado = file('imovel.csv');
unset($dado[$deletar]);
file_put_contents('imovel.csv', $dado);
header('location: tabelaimv.php');
 ?>