<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_GET['sair'])) {
    session_destroy();
    header('location: ../seguranca/telaLogin.php');
} else {
    include_once '../seguranca/execAutenticacao.php';
    $apresenta = new autenticacao();
    $apresenta->apresentaUsuario();
}    