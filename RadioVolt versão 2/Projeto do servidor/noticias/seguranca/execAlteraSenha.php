<?php

if (empty($_POST['senha1']) || ( empty($_POST['senha2']) || ( empty($_POST['usuario'])))) {

    echo "<script language=javascript>alert('Todos os campos devem ser preenchidos'); window.location= '../seguranca/telaAlteraSenha.php';</script>";
} else {

    if ($_POST['senha1'] != $_POST['senha2']) {

        echo "<script language=javascript>alert('A mesma senha deve ser informada nos campos senha e Repita senha'); window.location= '../seguranca/telaAlteraSenha.php';</script>";
    } else {
        $isso = new alteraSenha ();
    }
}

class alteraSenha {

    public function alteraSenha() {
        include_once '../conexaoDB/conexao.php';

        $pdo = $conexao;

        try {

            $comando = $pdo->query("SELECT id , usuario FROM cad_usuario WHERE usuario = '" . $_POST['usuario'] . "'");

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);
            if ($listar == NULL) {

                echo "<script language=javascript>alert('Nesse modulo você so pode alterar a senha, para alterar o nome de usuário, consulte o administrador do sistema'); window.location= '../seguranca/telaAlteraSenha.php';</script>";
            } else {
                foreach ($listar as $list):
                $editar = $pdo->prepare("CALL editar_senha (?,?)");
                $editar->bindValue(1, $_POST['senha1']);
                $editar->bindValue(2, $list['id']);
                $editar->execute();
                endforeach;
                echo "<script language=javascript>alert('Senha alterada com sucesso'); window.location= '../seguranca/telaLogin.php';</script>";
            }
            
        } catch (PDOException $ex) {
            echo 'Erro ao listar' . $ex->getMessage();
        }
    }

}
