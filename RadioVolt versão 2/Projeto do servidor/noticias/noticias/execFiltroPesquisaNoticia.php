<?php

include_once 'execConsultaNoticia.php';

if (empty($_SESSION['expr'])) {
    $_SESSION['expr'] = '1';
    $geraTabela = new tabela($_SESSION['expr']);
} else {

    if (isset($_GET['colu']) && isset($_GET['sql']) && isset($_GET['valorPesquisa']) && !isset($_GET['excluir'])) {

        switch ($_GET['sql']) {
            case 'igual a':
                $_GET['sql'] = " = '" . $_GET['valorPesquisa'] . "'";
                break;
            case 'diferente de':
                $_GET['sql'] = " != '" . $_GET['valorPesquisa'] . "'";
                break;
            case 'menor que':
                $_GET['sql'] = " < '" . $_GET['valorPesquisa'] . "'";
                break;
            case 'maior que':
                $_GET['sql'] = " > '" . $_GET['valorPesquisa'] . "'";
                break;
            case 'contem expressão':
                $_GET['sql'] = " like '%" . $_GET['valorPesquisa'] . "%'";
                break;
            case 'Não contem expressão':
                $_GET['sql'] = " not like '%" . $_GET['valorPesquisa'] . "%'";
                break;
            case 'esta contido':
                $_GET['sql'] = " in '" . $_GET['valorPesquisa'] . "'";
                break;
            case 'não esta contido':
                $_GET['sql'] = " not in '" . $_GET['valorPesquisa'] . "'";
                break;
            case 'esta entre':
                $_GET['sql'] = " between '" . $_GET['valorPesquisa'] . "'";
                break;
        }
//        switch ($_GET['e_ou']) {
//            case 'e':
//                $_GET['e_ou'] = ' and ';
//                break;
//            case 'ou':
//                $_GET['e_ou'] = ' or ';
//                break;
//            case '':
//                $_GET['e_ou'] = '';
//                break;
//        }
        $_SESSION['expr'] = $_GET['colu'] . $_GET['sql'];
        $geraTabela = new tabela($_SESSION['expr']);
    } else {
        if (!empty($_SESSION['expr']) && !isset($_GET['colu']) && !isset($_GET['sql']) && !isset($_GET['valorPesquisa']) && !isset($_GET['excluir'])) {
            $_SESSION['expr'] = $_SESSION['expr'];
            $geraTabela = new tabela($_SESSION['expr']);
        }
    }
}

if (isset($_GET['excluir'])) {
    $_SESSION['expr'] = '1';
    $geraTabela = new tabela($_SESSION['expr']);
}