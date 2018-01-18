<?php

class autenticacao {

    public function autentica($_senha, $_usuario) {
        try {

            include('../conexaoDB/conexao.php');
            $pdo = $conexao;

            $comando = $pdo->query("select * from cad_usuario where usuario = '" . $_usuario . "' and senha = MD5('" . $_senha . "')");

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

            if ($listar != NULL) {

                session_start();

                foreach ($listar as $list):
                    $_SESSION['id'] = $list['id'];
                    $_SESSION['usuario'] = $list['usuario'];
                    $_SESSION['senha'] = $list['senha'];
                    $_SESSION['nivel'] = $list['nivel_usuario'];
                    $_SESSION['nome_usuario'] = $list['nome_usuario'];
                    $redefine = $list['redefine_senha'];
                    $chaAltSen = new autenticacao();
                    $chaAltSen->chamaAlteraSenha($redefine);
                endforeach;
            }else {
                
    echo "<script language=javascript>alert('Usuário ou senha inválidos'); window.location= '../seguranca/telaLogin.php';</script>";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function verificaCessaoAberta() {

        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION))
            session_start();

        // Verifica se não há a variável da sessão que identifica o usuário
        if (!isset($_SESSION['id'])) {
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            header("Location: ../seguranca/telaLogin.php");
            exit;
        }
    }

    public function verificaNivelUsuario() {

        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION))
            session_start();

        $nivel_necessario = '2';

        // Verifica se não há a variável da sessão que identifica o usuário
        if (( $_SESSION['nivel'] < $nivel_necessario)) {
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            
    echo "<script language=javascript>alert('Você não tem permissão para acessar esse modulo'); window.location= '../seguranca/telaLogin.php';</script>";

        }
    }

    private function chamaAlteraSenha($redef) {
        if ($redef == 's') {
            header('location: ../seguranca/telaAlteraSenha.php');
        } else {
            header('location: ../noticias/telaConsultaNoticia.php');
        }
    }

    public function apresentaUsuario() {
        echo '' . $_SESSION['nome_usuario'] . ', está logado: <a href="../seguranca/execChamaApresentaUsuario.php?sair=sair">Sair</a>';
    }

    public function geramenu() {
        
        if ($_SESSION['nivel'] == 2) {
            echo '<div class="menu">
                <nav class="bntMenu">
                    <ul>
                        <li class="bntPrecionado"><a href="../noticias/telaConsultaNoticia.php?excluir=excluir">Cadastro/Consulta Notícia</a></li>
                        <li><a href="../categoria/telaConsultaCategoria.php?excluir=excluir">Cadastro/Consulta Categoria</a></li>
                        <li><a href="http://www.radiovolt.com.br/">Grade Notícias</a></li>
                        <li><a href="../seguranca/telaConsultaUsuario.php?excluir=excluir">Cadastro/Consulta Usuário</a></li>
                    </ul>
                </nav>
            </div>';
        }else{
             echo '<div class="menu">
                <nav class="bntMenu">
                    <ul>
                        <li class="bntPrecionado"><a href="../noticias/telaConsultaNoticia.php?excluir=excluir">Cadastro/Consulta Notícia</a></li>
                        <li><a href="../categoria/telaConsultaCategoria.php?excluir=excluir">Cadastro/Consulta Categoria</a></li>
                        <li><a href="http://www.radiovolt.com.br/">Grade Notícias</a></li>
                    </ul>
                </nav>
            </div>';
        }
    }

}
