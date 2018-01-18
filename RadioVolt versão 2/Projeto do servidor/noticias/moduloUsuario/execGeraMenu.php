<?php

try {

    include_once '../conexaoDB/conexao.php';
    $pdo = $conexao;

    $comando = $pdo->query('SELECT DISTINCT categoria FROM cad_noticia');

    $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

    echo " <a href= telaAcervoNoticia.php><div class=linkMenu><p>Todas as notícias</p></div></a>";

    foreach ($listar as $list):
        echo " <a href= telaAcervoNoticia.php?categoria=" . $list['categoria'] . "><div class=linkMenu><p>" . $list['categoria'] . "</p></div></a>";
    endforeach;
} catch (PDOException $ex) {
    echo $ex->getMessage();
}