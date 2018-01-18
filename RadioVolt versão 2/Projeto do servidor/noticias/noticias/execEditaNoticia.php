<?php

if (isset($_GET['id'])) {
    include_once 'execEditaNoticia.php';
    $edit = new editar($_GET['id']);
} else {
    include_once 'execEditaNoticia.php';
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
                $comando = $pdo->query("SELECT * FROM cad_noticia WHERE id = " . $id);
                $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

                foreach ($listar as $list):

                    echo "<div class= divCodigo>Código: <input class=input name=codigo value=" . $list['id'] . " readonly=readonly /></div></br>
                        <fieldset class= fieldsetPrin fildTitulo>
            <legend class= princLegend>Título</legend>
            <textarea name=txtTitulo rows=4 cols=20>" . $list['titulo'] . "</textarea>
        </fieldset>
        <fieldset class= fieldsetPrin fildNoticia>
            <legend class= princLegend>Texto notícia</legend>
            <textarea name=txtNoticia rows=4 cols=20>" . $list['texto'] . "</textarea>
        </fieldset>
        <fieldset class= fieldsetPrin fildComplemento>
            <legend class= princLegend>Complementos</legend>
            <fieldset class= fildCategoria>
                <legend>Informe a categoria</legend>
                <select name=categoria>";
                    include_once 'execSelecionaCategoria.php';
                    echo "</select>
            </fieldset>
            <fieldset class= fildArquivo>
                <legend>Imagem notícia</legend>
                <input type=file name=arquivo value= />
            </fieldset>
            <div class= divImagem>
                <img src= ../imagensNoticias/" . $list['imagem'] . " width=148 height=148 alt=sort_both/>
                    <input class=input name=imagem value=" . $list['imagem'] . " readonly=readonly/>
            </div>
        </fieldset>";

                endforeach;

                $_SESSION['codigo'] = $id;
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        } else {

                try {

                    include('../conexaoDB/conexao.php');
                    $pdo = $conexao;
                    $edita = $pdo->prepare("CALL editar_noticia (?,?,?,?,?)");
                    $edita->bindValue(1, $_POST["txtTitulo"]);
                    $edita->bindValue(2, $_POST["txtNoticia"]);
                    $edita->bindValue(3, $this->trocaImagem());
                    $edita->bindValue(4, $_POST["categoria"]);
                    $edita->bindValue(5, $_SESSION['codigo']);
                    $edita->execute();

                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }

                echo "<script language=javascript>alert('Registro atualizado com sucesso!'); window.location= '../noticias/telaConsultaNoticia.php';</script>";
            }
        }
    }
