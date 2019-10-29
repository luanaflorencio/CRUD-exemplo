<?php
$email =  $_POST['email'];
$pwd = $_POST['pwd'];

if(isset($_POST['email'])){
	$conn = $SQLConnect();
	$email = mysqli_escape_string($sql, $_POST['email']);
	$senha = mysqli_escape_string($sql, $_POST['senha']);

 $SQLQuery('email', "WHERE login = '$email' AND senha = $senha");
 header('location: listando.php');
}
?>

