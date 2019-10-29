<?php
$sql= new PDO('mysql:host=localhost;dbname=cadastrouser', 'lua', 'lua');

    $nome = $_POST['nome'];
    $sobren = $_POST['sobrenome'];
    $email = $_POST['email'];
    $confemail = $_POST['confemail'];
    $pwd = md5($_POST['pwd']);
    $confpwd = $_POST['confpwd'];

    if($email == $confemail && $pwd == $confpwd) {
    $statement = $sql->prepare('insert into users (nome, sobrenome, email, password) values (:nome, :sobrenome, :email, :password)');
    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':sobrenome', $sobren);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $pwd);
    $statement->execute();
    header('location: login.php');
}
 ?>