<?php

$insere = new removeCategoria();

class removeCategoria {

    public function removeCategoria() {

        include_once '../conexaoDB/conexao.php';

        $pdo = $conexao;

        try {
            $insert = $pdo->prepare("CALL remove_usuario (?)");
            $insert->bindValue(1, $_GET['id']);
            $insert->execute();
            
            echo "<script language=javascript>alert( 'Registro excluido!' ); window.location= '../seguranca/telaConsultaUsuario.php';</script>";
            
        } catch (PDOException $ex) {
            echo 'Erro ao listar' . $ex->getMessage();
        }
    }

}
