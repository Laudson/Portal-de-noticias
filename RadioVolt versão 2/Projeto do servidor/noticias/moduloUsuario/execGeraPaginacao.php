<?php

class paginacao {

    private $_expSQL;

    public function paginacao($expSQL,$numerPagina) {
        
        $this->_expSQL = $expSQL;

        //if (!isset($_GET['sequPaginas'])) {
          //  $numerPagina = 1;
        //} else {
          //  $numerPagina = $_GET['sequPaginas'];
        //}

        include('../conexaoDB/conexao.php');
        $pdo = $conexao;
        $sql = $pdo->query('SELECT COUNT(id) AS contagem from cad_noticia where 1 = 1 '.$this->_expSQL);
        $listar = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($listar as $list):
            $pag = ceil($list['contagem'] / 9);
        endforeach;

        $limitePaginas = $pag;
        $numer1 = $numerPagina;
        $numer2 = $numer1 + 5;

        if ($numer1 != 1) {
            echo '<a href=?sequPaginas=' . ($numer1 - 5) . '><div class="divAnt"><p>Anterior</p></div></a>';
        }
        if ($numer2 > $limitePaginas) {
            $numer2 = $limitePaginas + 1;
            while ($numer1 < $numer2) {
                echo "<a href=?npgn=" . $numer1 . "&offset=" . ($numer1 * 9 - 9) . "><div class=bntPagina><p> " . $numer1 . "</p></div></a>";
                $numer1 ++;
            }
        } else {
            while ($numer1 < $numer2) {
                echo "<a href=?npgn=" . $numer1 . "&offset=" . ($numer1 * 9 - 9) . "><div div class=bntPagina><p> " . $numer1 . "</p></div></a>";
                $numer1 ++;
            }
            echo '<a href=?sequPaginas=' . $numer2 . '><div class="divPro"><p>Próximo</p></div></a>';
        }
    }
}
