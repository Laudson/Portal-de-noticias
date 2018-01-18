<?php

if (isset($_GET['id'])) {
    include_once 'execEditaUsuario.php';
    $edit = new editar($_GET['id']);
} else {
    include_once 'execEditaUsuario.php';
    $edit = new editar(NULL);
}

class editar {

    private $id;

    public function editar($_id) {
        $this->id = $_id;
        $this->Edicao($this->id);
    }

    private function trocaImagem() {

        $imagem = $_FILES['arquivo'];
        $imagemCarregada = $imagem['name'];

        if ($imagemCarregada != '') {

            $caminho = "../imagensNoticias/";
            $arquivo = "../imagensNoticias/" . $_POST['imagem'];
            unlink($arquivo);
            include_once '../noticias/execClassUpload.php';
            $upload = new Upload($_FILES['arquivo'], 100, 200, $caminho);
            $imagem = $upload->salvar();
        } else {
            $imagem = $_POST['imagem'];
        }return $imagem;
    }

    private function Edicao($id) {

        if (!isset($_SESSION))
            session_start();

        if ($id != Null) {

            try {
                include('../conexaoDB/conexao.php');
                $pdo = $conexao;
                $comando = $pdo->query("SELECT * FROM cad_usuario WHERE id = " . $id);
                $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

                foreach ($listar as $list):
                 
              echo'
                <fieldset class="fildPrincipal">
                    <legend class="princLegend">Informações do usuário</legend>
                    <fieldset class="fildInput">
                        <legend>Nome completo</legend>
                        <input type="text" name="nome" value='.$list['nome_usuario'].' />
                    </fieldset>
                    <fieldset class="fildInput">
                        <legend>Nome de acesso</legend>
                        <input type="text" name="usuario" value='.$list['usuario'].' />
                    </fieldset>
                    <fieldset class="fildInput">
                        <legend>Senha</legend>
                        <input type="password" name="senha" value="" />
                    </fieldset>
                </fieldset>
                <fieldset class="fildComplemento">
                    <legend class="princLegend">Complemento</legend>
                    <fieldset class="fildSelect">
                        <legend>Nivel de acesso</legend>
                        <select name="nivelUsu">';
                        switch ($list['nivel_usuario']) {
                    case 2:
                        $nivel = 'Administrador';
                        break;
                    case 1:
                        $nivel = 'Basico';
                        break;
                }
                      echo '<option value="1">'.$nivel.'</option>
                            <option value="1">Básico</option>
                            <option value="2">Administrador</option>
                        </select>
                    </fieldset>
                    <fieldset class="fildRedefine">
                        <legend>Redefinir senha ?</legend>
                        <fieldset class="fildRedefineSim">
                            <legend>Sim</legend>
                            <input type="radio" name="redefinir" value="s" checked="checked" />
                        </fieldset>
                        <fieldset class="fildRedefineNao">
                            <legend>Nao</legend>
                            <input type="radio" name="redefinir" value="n" />
                        </fieldset>
                    </fieldset>
                </fieldset>
                <div class="cadastrar">
                    <input type="submit" value="Editar" class="bnt"/>
                </div>';
                        
                endforeach;

                $_SESSION['codigo'] = $id;
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        } else {

                try {

                    include('../conexaoDB/conexao.php');
                    $pdo = $conexao;
                    $edita = $pdo->prepare("CALL editar_usuario (?,?,?,?,?,?)");
                    $edita->bindValue(1, $_SESSION['codigo']);
                    $edita->bindValue(2, $_POST["usuario"]);
                    $edita->bindValue(3, $_POST['senha']);
                    $edita->bindValue(4, $_POST["nivelUsu"]);
                    $edita->bindValue(5, $_POST['nome']);
                    $edita->bindValue(6, $_POST['redefinir']);
                    $edita->execute();

                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }

                echo "<script language=javascript>alert('Registro atualizado com sucesso!'); window.location= '../seguranca/telaConsultaUsuario.php';</script>";
            }
        }
    }
