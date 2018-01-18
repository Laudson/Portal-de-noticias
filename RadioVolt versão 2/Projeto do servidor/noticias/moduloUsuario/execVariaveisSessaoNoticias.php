<?php

$exec = new variaveisSessaoNoticias();

class variaveisSessaoNoticias {

    public function variaveisSessaoNoticias() {
        //session_start();

        if (!isset($_GET['categoria']) && !isset($_GET['vlPesquisa']) && !isset($_GET['offset']) && !isset($_GET['npgn']) && !isset($_GET['sequPaginas'])) {
            $_SESSION['_categoria'] = '';
            $_SESSION['_valorPesquisa'] = '';
            $exprSql = $_SESSION['_valorPesquisa'] . $_SESSION['_categoria'];
        } else {

            if (isset($_GET['categoria'])) {
                $_SESSION['_categoria'] = 'and categoria = "' . $_GET['categoria'] . '"';
                $_SESSION['_valorPesquisa'] = $_SESSION['_valorPesquisa'];
                $exprSql = $_SESSION['_valorPesquisa'] . $_SESSION['_categoria'];
            } else {
                if (isset($_GET['vlPesquisa'])) {
                    $_SESSION['_categoria'] = $_SESSION['_categoria'];
                    $_SESSION['_valorPesquisa'] = 'and titulo like "%' . $_GET['vlPesquisa'] . '%"';
                    $exprSql = $_SESSION['_valorPesquisa'] . $_SESSION['_categoria'];
                } else {
                    if (isset($_GET['excluir'])) {
                        $_SESSION['_categoria'] = '';
                        $_SESSION['_valorPesquisa'] = '';
                        $exprSql = $_SESSION['_valorPesquisa'] . $_SESSION['_categoria'];
                    } else {
                        if (isset($_GET['offset']) || isset($_GET['npgn']) || isset($_GET['sequPaginas'])) {
                            $_SESSION['_categoria'] = $_SESSION['_categoria'];
                            $_SESSION['_valorPesquisa'] = $_SESSION['_valorPesquisa'];
                            $exprSql = $_SESSION['_valorPesquisa'] . $_SESSION['_categoria'];
                        }
                    }
                }
            }
        }

        if (!isset($_GET['offset'])) {
            $_SESSION['_offset'] = 0;
            $exprOffset = $_SESSION['_offset'];
        } else {
            $_SESSION['_offset'] = $_GET['offset'];
            $exprOffset = $_SESSION['_offset'];
        }

        include_once 'execGeraAcervo.php';
        $pois = new geraAcervo($exprSql, $exprOffset);
    }

}
