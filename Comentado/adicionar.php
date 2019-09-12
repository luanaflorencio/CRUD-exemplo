<?php
$nome = $_POST['nome']; //pelo metodo post eu coloco o dado 'nome' dentro da variavel
$autor = $_POST['autor'];
$ano = $_POST['ano'];
?>
<h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <strong><?= $nome ?></strong></li>
    <li>Autor: <strong><?= $autor ?></strong></li>
    <li>Ano: <strong><?= $ano ?></strong></li>
</ul>

<?php
$data = join(',', [$nome, $autor, $ano]) . "\n"; //o join está juntando os dados dentro de uma linha e o separador está separando por vírgula 														dentro da linha e logo depois concatenando com o \n para quebrar a linha e ir pra próxima 														tudo está dentro da variavel data para ser reutilizado 
$handle = fopen('luana.csv', 'a'); //o fopen está abrindo o arquivo csv, o 'a' abri em formato de escrita e coloca cursor no final do arquivo
fwrite($handle, $data); //e o fwrite escreve o que tem na variavel handle e em data 
header('location: luana.php'); //vai te redirecionar para o arquivo do location no final
?>