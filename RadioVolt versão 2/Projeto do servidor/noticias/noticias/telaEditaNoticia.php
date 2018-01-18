<?php include_once '../seguranca/execVerificaCessao.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastra notícia</title>
        <script src="jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="tinymce/jscripts/tiny_mce/tiny_mce_src.js" type="text/javascript"></script>
        <script src="jquery/tinymce.js" type="text/javascript"></script>
        <link href="css/estiloTelaEditaNoticia.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="cabecalho">
            <div class="apresentacao">
                <?php include_once '../seguranca/execChamaApresentaUsuario.php';?>
            </div>
            <?php include_once '../seguranca/execGeraMenu.php';?>
        </div>
        <div class="conteudo">
            <form action="execEditaNoticia.php" enctype='multipart/form-data' method="POST" >
                <h1>Edição da notícia</h1>
                <?php include_once 'execEditaNoticia.php'; ?>
                <div class= divBnt>
                    <input type=submit value=Editar class=bnt cadas/><br>
                </div>
            </form>
            <div class="bntCancela">
            <input class="" type="submit" value="Cancelar" onclick="window.location = 'telaConsultaNoticia.php'" />
            </div>
        </div>
    </body>
</html>
