<?php

//---------------------------------------------------------Filtro dos parametros de entrada-------------------------------------------------------------

class tabela {

    private $extenssao;

    function __construct($extenssao) {

        $this->extenssao = $extenssao;
        $this->geraTabela($this->valida());
    }

    private function valida() {

        if (!isset($_GET['tbl']) && (!isset($_GET['offset'])) && (!isset($_GET['prox'])) && (!isset($_GET['ant']))) {
//            session_start("operadores");
            $_SESSION['ORDEM'] = 1;
            $_SESSION['LIMITE'] = 5;
            $_SESSION['OFFSET'] = 0;
            $_SESSION['PAG'] = 1;
            $val = array($_SESSION['ORDEM'], $_SESSION['LIMITE'], $_SESSION['OFFSET'], $_SESSION['PAG']);
        } else {
            if (isset($_GET['tbl'])) {
//                session_start("operadores");
                $_SESSION['ORDEM'] = $_GET['tbl'];
                $_SESSION['LIMITE'] = $_SESSION['LIMITE'];
                $_SESSION['OFFSET'] = $_SESSION['OFFSET'];
                $_SESSION['PAG'] = $_SESSION['PAG'];
                $val = array($_SESSION['ORDEM'], $_SESSION['LIMITE'], $_SESSION['OFFSET'], $_SESSION['PAG']);
            } else {
                if (isset($_GET['offset'])) {
//                    session_start("operadores");
                    $_SESSION['ORDEM'] = $_SESSION['ORDEM'];
                    $_SESSION['LIMITE'] = $_SESSION['LIMITE'];
                    $_SESSION['OFFSET'] = $_GET['offset'];
                    $_SESSION['PAG'] = $_SESSION['PAG'];
                    $val = array($_SESSION['ORDEM'], $_SESSION['LIMITE'], $_SESSION['OFFSET'], $_SESSION['PAG']);
                } else
                if (isset($_GET['prox'])) {
                    $_SESSION['ORDEM'] = $_SESSION['ORDEM'];
                    $_SESSION['LIMITE'] = $_SESSION['LIMITE'];
                    $_SESSION['OFFSET'] = $_SESSION['OFFSET'];
                    $_SESSION['PAG'] = $_GET['prox'];
                    $val = array($_SESSION['ORDEM'], $_SESSION['LIMITE'], $_SESSION['OFFSET'], $_SESSION['PAG']);
                } else
                if (isset($_GET['ant'])) {
                    $_SESSION['ORDEM'] = $_SESSION['ORDEM'];
                    $_SESSION['LIMITE'] = $_SESSION['LIMITE'];
                    $_SESSION['OFFSET'] = $_SESSION['OFFSET'];
                    $_SESSION['PAG'] = $_GET['ant'];
                    $val = array($_SESSION['ORDEM'], $_SESSION['LIMITE'], $_SESSION['OFFSET'], $_SESSION['PAG']);
                }
            }
        }return $val;
    }

//------------------------------------------------------------Geração da tabela-------------------------------------------------------------------------


    private function geraTabela($param = array()) {

        $expre = $this->extenssao;

        try {

            include('../conexaoDB/conexao.php');
            $pdo = $conexao;

            $comando = $pdo->query('SELECT * FROM cad_usuario WHERE ' . $expre . ' ORDER BY ' . $param[0] . ' LIMIT ' . $param[1] . ' OFFSET ' . $param[2]);

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

            echo "<table class=priTbl>
                        <tbody>
                            <tr>
                        <div class=divPriTitTr>
                            <div class=divTitTr><a href=?tbl=1>Código</a></div>
                            <div class=divTitTr><a href=?tbl=2>Nome usuário</a></div>
                            <div class=divTitTr><a href=?tbl=5>Nome completo</a></div>
                            <div class=divTitTr><a href=?tbl=6>Nivel acesso</a></div>
                            <div class=divTitTr><a href=?tbl=6>Data cadastro</a></div>
                            <div class=divTitOpr>Editar</div>
                            <div class=divTitOpr>Deletar</div>
                        </div>
                        </tr>";

            if ($listar == NULL) {
                echo "<tr>
                        <div class=divtrInfo><p>Não foi encontrado registros</p></div>
                        </tr>";
            }
            foreach ($listar as $list):
                echo '<tr>
                        <div class=divPriTr>
                            <div class= "divtr">' . $list['id'] . '</div>
                            <div class= "divtr">' . $list['usuario'] . '</div>
                            <div class= "divtr">' . $list['nome_usuario'] . '</div>';
                switch ($list['nivel_usuario']) {
                    case 2:
                        $nivel = 'Administrador';
                        break;
                    case 1:
                        $nivel = 'Basico';
                        break;
                }
                echo '<div class= "divtr">' . $nivel . '</div>
                            <div class= "divtr">' . date('d/m/Y H:i:s', strtotime($list['data_cadastro'])) . '</div>
                            <div class=divtrOpr><a href=telaEditaUsuario.php?id=' . $list['id'] . '> <img src= ../imagensSistema/imgEditar.jpg width=40 height=40 alt=sort_both/></a></div>
                            <div class=divtrOpr><a href= javascript:func() onclick=confirmacao(' . $list['id'] . ')> <img src= ../imagensSistema/imgDeletar.png width=40 height=40 alt=sort_both/></a></div>
                        </div>
                        </tr>';
            endforeach;

            echo "</tbody>

          <TFOOT>
                <TR>
                <div class=divPriTf>";

//--------------------------------------------------------------Rodape Paginação------------------------------------------------------------------------

            $sql = $pdo->query('SELECT COUNT(id) AS contagem FROM cad_usuario WHERE ' . $expre . ' LIMIT 500');
            $listar = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($listar as $list):
                $pag = ceil($list['contagem'] / $param[1]);
            endforeach;

            $limite = $pag;
            $numer1 = $param[3];
            $numer2 = $numer1 + 3;

            if ($numer1 != 1) {
                echo '<div class="divtfo Ant"><a href=?ant=' . ($numer1 - 3) . '>Anterior</a></div>';
            }
            if ($numer2 > $limite) {
                $numer2 = $limite + 1;
                while ($numer1 < $numer2) {
                    echo "<div class=divtf><a href=?npgn=" . $numer1 . "&offset=" . ($numer1 * $param[1] - $param[1]) . "> " . $numer1 . " </a></div>";
                    $numer1 ++;
                }
            } else {
                while ($numer1 < $numer2) {
                    echo "<div div class=divtf><a href=?npgn=" . $numer1 . "&offset=" . ($numer1 * $param[1] - $param[1]) . "> " . $numer1 . " </a></div>";
                    $numer1 ++;
                }
                if ($numer1 <= $limite) {
                    echo '<div class="divtfo Pro"><a href=?prox=' . $numer2 . '>Próximo</a></div></br>';
                }
            }
            if (!isset($_GET['npgn'])) {
                $_GET['npgn'] = 1;
                echo "<p>Você esta na página " . $_GET['npgn'] . " de um total de " . $pag . " páginas</p>";
            } else {
                echo "<p>Você esta na página " . $_GET['npgn'] . " de um total de " . $pag . " páginas</p>";
            }

            "</div>
                </TR>
                  </TFOOT>";
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
