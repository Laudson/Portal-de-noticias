<?php

$insere = new removeCategoria();

class removeCategoria {

    public function removeCategoria() {

        include_once '../conexaoDB/conexao.php';

        $pdo = $conexao;

        try {
            $insert = $pdo->prepare("CALL remove_categoria (?)");
            $insert->bindValue(1, $_GET['id']);
            $insert->execute();
            
            echo "<script language=javascript>alert( 'Registro excluido!' ); window.location= '../categoria/telaConsultaCategoria.php';</script>";
            
        } catch (PDOException $ex) {
            echo 'Erro ao listar' . $ex->getMessage();
        }
    }

}
