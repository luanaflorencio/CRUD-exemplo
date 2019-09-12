<?php
$linha = file('luana.csv');

$removido =  $_GET['id'];

$linha[$removido] = "";

file_put_contents('luana.csv', implode('', $linha));
header('location:luana.php');
?>