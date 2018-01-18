<?php

$inserCat = new insereCategoria();

class insereCategoria {

    public function insereCategoria() {

        include_once '../conexaoDB/conexao.php';

        $pdo = $conexao;

        try {

            if ($_POST["nome"] == '') {

                echo "<script language=javascript>alert( 'Campo nome não pode ficar em branco!' ); window.location= '../categoria/telaCadastraCategoria.php';</script>";
            } Else {

                $insert = $pdo->prepare("CALL insere_categoria (?)");
                $insert->bindValue(1, $_POST["nome"]);
                $insert->execute();

                echo "<script language=javascript>alert('Categoria cadastrada com sucesso!'); window.location= '../categoria/telaConsultaCategoria.php';</script>";
            }
        } catch (PDOException $ex) {
            echo 'Erro ao listar' . $ex->getMessage();
        }
    }

}
