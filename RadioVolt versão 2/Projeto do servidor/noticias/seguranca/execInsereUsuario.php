<?php

if (empty($_POST['nome']) || (empty($_POST['usuario']) || empty($_POST['senha']))) {

    echo "<script language=javascript>alert('Todos os campos devem ser preenchidos'); window.location= '../seguranca/telaCadastraUsuario.php';</script>";
} else {
        $insere = new insereUsuario();
        if($insere){
            
    echo "<script language=javascript>alert('Usuário cadastrado com sucesso!'); window.location= '../seguranca/telaConsultaUsuario.php';</script>";
        }
    }

class insereUsuario {

    public function insereUsuario() {

        include_once '../conexaoDB/conexao.php';

        $pdo = $conexao;

        try {

            $comando = $pdo->query("SELECT usuario FROM cad_usuario WHERE usuario = '" . $_POST['usuario'] . "'");

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);
            if ($listar == NULL) {

                $insert = $pdo->prepare("CALL insere_usuario (?,?,?,?,?)");
                $insert->bindValue(1, $_POST['usuario']);
                $insert->bindValue(2, $_POST['senha']);
                $insert->bindValue(3, $_POST['nivelUsu']);
                $insert->bindValue(4, $_POST['nome']);
                $insert->bindValue(5, $_POST['redefinir']);
                $insert->execute();
            } else {

                echo "<script language=javascript>alert('Nome de usuário ja existe'); window.location= '../seguranca/telaCadastraUsuario.php';</script>";
            }
                if ($insert->rowCount() == 1):
                    return true;
                else:
                    return false;
                endif;
        } catch (PDOException $ex) {
            echo 'Erro ao listar' . $ex->getMessage();
        }
    }

}
