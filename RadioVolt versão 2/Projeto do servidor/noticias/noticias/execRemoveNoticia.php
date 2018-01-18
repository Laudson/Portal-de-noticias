<?php

$insere = new removeNoticia($_GET['id']);

class removeNoticia {

    public function removeNoticia($id) {

        include_once '../conexaoDB/conexao.php';

        $pdo = $conexao;

        try {
            $consulta = $pdo->query("select imagem from cad_noticia where id = '" . $id . "'");
            $listar = $consulta->fetchAll(PDO::FETCH_ASSOC);

            foreach ($listar as $list):

                $arquivo = "../imagensNoticias/" . $list['imagem'];
                unlink($arquivo);

            endforeach;

            $remove = $pdo->prepare("CALL remove_noticia (?)");
            $remove->bindValue(1, $_GET['id']);
            $remove->execute();
            
            echo "<script language=javascript>alert( 'Registro excluido!' ); window.location= '../noticias/telaConsultaNoticia.php';</script>";
            
        } catch (PDOException $ex) {
            echo 'Erro ao listar' . $ex->getMessage();
        }
    }

}
