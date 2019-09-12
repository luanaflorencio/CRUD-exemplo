<?php
$nome = $_POST['nome'];
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
$data = join(',', [$nome, $autor, $ano]) . "\n";
$handle = fopen('luana.csv', 'a');
fwrite($handle, $data);
header('location: luana.php');
?>