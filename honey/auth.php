<?php 
include 'init.php';

$email= $_POST['email'];
$pwd= $_POST['senha'];

$users = file('usuario.csv');
foreach($users as $user) {
    $userData = explode(',', $user);
    if (trim($userData[1]) == $email && trim($userData[2]) == $pwd) {
        login($userData[0]);
        redirect('cadastroimv.php');
        break;
    }
}

header('location: login.php');
 ?>