<?php

if (empty($_POST['txtTitulo']) || ( empty($_POST['txtNoticia']))) {

    echo "<script language=javascript>alert('Todos os campos devem ser preenchidos'); window.location= '../noticias/telaCadastraNoticia.php';</script>";
} else {
    $imagem = $_FILES['arquivo'];
    $imagemCarregada = $imagem['name'];

    if ($imagemCarregada == '') {

        echo "<script language=javascript>alert('Você deve inserir uma imagem'); window.location= '../noticias/telaCadastraNoticia.php';</script>";
    } else {
        if ($_POST['categoria'] == 'Favor cadastrar categoria') {

            echo "<script language=javascript>alert('Você deve cadastrar uma categoria'); window.location= '../cad_noticia/telaCadastro.php';</script>";
        } else {

            $insere = new insereNoticia();
            if($insere){
                
            echo "<script language=javascript>alert('Noticia cadastrada com sucesso'); window.location= '../noticias/telaConsultaNoticia.php';</script>";
            }else{
                
            echo "<script language=javascript>alert('Erro ao cadastrar notícia'); window.location= '../noticias/telaCadastraNoticia.php';</script>";
            }
        }
    }
}

class insereNoticia {

    public function insereNoticia() {

        $caminho = '../imagensNoticias/';
        include_once '../conexaoDB/conexao.php';
        include_once 'execClassUpload.php';

        $pdo = $conexao;

        try {

                $upload = new Upload($_FILES['arquivo'], 1000, 800, $caminho);
                //$titulo = filter_input(TEXTAREA_POST, 'titulo', FILTER_SANITIZE_STRING);
                //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
                $imagem = $upload->salvar();

                $insert = $pdo->prepare("CALL insere_noticia (?,?,?,?)");
                $insert->bindValue(1, $_POST['txtTitulo']);
                $insert->bindValue(2, $_POST['txtNoticia']);
                $insert->bindValue(3, $imagem);
                $insert->bindValue(4, $_POST['categoria']);
                $insert->execute();

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
