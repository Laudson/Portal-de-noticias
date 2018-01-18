<?php include_once '../seguranca/execVerificaCessao.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastra notícia</title>
        <script src="jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
        <link href="css/estiloTelaCadastraNoticia.css" rel="stylesheet" type="text/css"/>
        <script src="tinymce/jscripts/tiny_mce/tiny_mce_src.js" type="text/javascript"></script>
        <script src="jquery/tinymce.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="cabecalho">
            <div class="apresentacao">
                <?php include_once '../seguranca/execChamaApresentaUsuario.php';?>
            </div>
            <?php include_once '../seguranca/execGeraMenu.php';?>
        </div>
        <div class="conteudo">
            <form action="execInsereNoticia.php" enctype='multipart/form-data' method="POST">
                <h1>Cadastro notícia</h1>
                <fieldset class="fieldsetPrin fildTitulo">
                    <legend class="princLegend">Título</legend>
                    <textarea name="txtTitulo" rows="4" cols="20"></textarea>
                </fieldset>
                <fieldset class="fieldsetPrin fildNoticia">
                    <legend class="princLegend">Texto notícia</legend>
                    <textarea name="txtNoticia" rows="4" cols="20"></textarea>
                </fieldset>
                <fieldset class="fieldsetPrin fildComplemento">
                    <legend class="princLegend">Complementos</legend>
                    <fieldset class="fildCategoria">
                        <legend>Informe a categoria</legend>
                        <select name="categoria">
                            <?php include_once 'execSelecionaCategoria.php';?>
                        </select>
                    </fieldset>
                    <fieldset class="fildArquivo">
                        <legend>Imagem notícia</legend>
                        <input type="file" name="arquivo" value="" />
                    </fieldset>
                </fieldset>
                <div class="divBnt">
                    <input type="submit" value="Cadastrar" class="bnt cadas"/><br>
                </div>
            </form>
            <div class="addCategoria">
                <input type="submit" value="Adicionar categoria" onclick="window.location = '../categoria/telaCadastraCategoria.php'"/>
            </div>
            <div class="cancelar">
            <input type="submit" value="Cancelar" class="bnt canc" onclick="window.location = 'telaConsultaNoticia.php'"/>
            </div>
        </div>
    </body>
</html>
