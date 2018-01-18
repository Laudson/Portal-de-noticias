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
                case 'usuario':
                    $coluna = "Nome usuário ";
                    break;
                case 'nome_usuario':
                    $coluna = "Nome completo ";
                    break;
                case 'nivel_usuario':
                    $coluna = "Nivel acesso ";
                    break;
                case 'data_cadastro':
                    $coluna = "Data cadstro ";
                    break;
            }

            $_SESSION['info'] = 'A consulta de noticias esta limitada pelo filtro: ' . $coluna . ' ' . $_GET['sql'] . ' ' . $_GET['valorPesquisa'] . '.<br>Para retornar a consulta normal clique no botão "Excluir filtro"';
            echo $_SESSION['info'];
        } else {
            if (!isset($_GET['excluir'])) {
                $_SESSION['info'] = $_SESSION['info'];
                echo $_SESSION['info'];
            } else {
                $_SESSION['info'] = '';
            }
        }
    }

}
