<?php

$exec = new variaveisSessaoPaginacao();

class variaveisSessaoPaginacao {

    public function variaveisSessaoPaginacao() {

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
        
        if (!isset($_GET['sequPaginas'])) {
            $_SESSION['_sequPaginas'] = 1;
            $exprSequPaginas = $_SESSION['_sequPaginas'];
        } else {
            $_SESSION['_sequPaginas'] = $_GET['sequPaginas'];
            $exprSequPaginas = $_SESSION['_sequPaginas'];
        }
        
        include_once 'execGeraPaginacao.php';
        $pois = new paginacao($exprSql,$exprSequPaginas);
    }

}
