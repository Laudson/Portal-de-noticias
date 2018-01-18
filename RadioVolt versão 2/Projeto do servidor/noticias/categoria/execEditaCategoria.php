<?php

if (isset($_GET['id'])) {
    include_once 'execEditaCategoria.php';
    $edit = new editar($_GET['id']);
} else {
    include_once 'execEditaCategoria.php';
    $edit = new editar(NULL);
}

class editar {

    private $id;

    public function editar($_id) {
        $this->id = $_id;
        $this->Edicao($this->id);
    }

    private function Edicao($id) {

        if (!isset($_SESSION))
            session_start();

        if ($id != Null) {

            try {
                include('../conexaoDB/conexao.php');
                $pdo = $conexao;
                $comando = $pdo->query("SELECT * FROM cad_categoria WHERE id = " . $id);
                $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

                foreach ($listar as $list):
                    echo "<input type= text name= valorEdit value= " . $list['Nome'] . " />";
                endforeach;

                $_SESSION['codigo'] = $id;
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        } else {

            try {
                include('../conexaoDB/conexao.php');
                $pdo = $conexao;
                $edita = $pdo->prepare("CALL editar_categoria (?,?)");
                $edita->bindValue(1, $_GET["valorEdit"]);
                $edita->bindValue(2, $_SESSION['codigo']);
                $edita->execute();
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            
                echo "<script language=javascript>alert( 'Alteração realizada com sucesso!' ); window.location= '../categoria/telaConsultaCategoria.php';</script>";
        }
    }

}
