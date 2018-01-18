<?php

//define('HOST', 'localhost');
//define('USUARIO', 'root');
//define('SENHA', 'l@ujur10407915');
//define('BD', 'radiovolt');

$servidor = 'radiovolt.radiovolt.com.br';
$baseDados = 'radiovoltfm';
$usuario = 'radiovolt';
$senha = 'voltvolt879';

try {
    $dsn = "mysql:host=" . $servidor . ";dbname=" . $baseDados;
    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $ex) {
    echo 'Erro ao conectar banco de dados' . $ex->getMessage();
}
