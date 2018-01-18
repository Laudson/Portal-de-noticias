<?php

$Informativo = new infoFiltroPesquisa();

class infoFiltroPesquisa {

    public function infoFiltroPesquisa() {

        if (isset($_GET['consultar'])) {

            $coluna;
            switch ($_GET['colu']) {
                case 'id':
                    $coluna = "Código ";
                    break;
                case 'Nome':
                    $coluna = "Nome ";
                    break;
            }

            $_SESSION['info'] = 'A consulta de categoria esta limitada pelo filtro: ' . $coluna . ' ' . $_GET['sql'] . ' ' . $_GET['valorPesquisa'] . '.<br>Para retornar a consulta normal clique no botão "Excluir filtro"';
            echo $_SESSION['info'];
        } else {
            if (!isset($_GET['excluir'])) {
                $_SESSION['info'] = $_SESSION['info'];
                echo $_SESSION['info'];
            } else {
                $_SESSION['info'] = '';
                echo $_SESSION['info'];
            }
        }
    }

}
