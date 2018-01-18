<?php

if (empty($_POST['senha']) || ( empty($_POST['usuario']))) {

    echo "<script language=javascript>alert('Todos os campos devem ser preenchidos'); window.location= '../seguranca/telaLogin.php';</script>";
    
} else {

    include_once '../seguranca/execAutenticacao.php';

    $cessao = new autenticacao();
    $cessao->autentica($_POST['senha'], $_POST['usuario']);
}