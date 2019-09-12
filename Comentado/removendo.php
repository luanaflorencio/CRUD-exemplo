<?php
$linha = file('luana.csv'); //o file abri o arquivo csv e passa para o array linha

$removido =  $_GET['id']; //pelo metodo get ele pega o id pela url e guarda na variavel

$linha[$removido] = ""; //no array em um determinado indice ele substitui a linha por nada 

file_put_contents('luana.csv', implode('', $linha)); //o implode transforma o array em string e pelo file put contens ele coloca essa string 															dentro do csv
header('location:luana.php'); //no final o header dereciona de volta para tabela 
?>