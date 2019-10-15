<?php
session_start();

function login($cpf) {
    $_SESSION['autenticado'] = true;
    $_SESSION['cpf'] = $cpf;
}
function logout() {
    session_destroy();
}
function is_logged() {
    return isset($_SESSION['email']);
}
function userEmail() {
    if (is_logged()) {
        return $_SESSION['email'];
    }
    return false;
}
function redirect($url = '/') {
    header("location: $url");
    exit();
}
?>