<?php include_once '../seguranca/execVerificaCessao.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro categoria</title>
        <link href="css/estiloTelaCadastroCategoria.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="cabecalho">
            <div class="apresentacao">
                <?php include_once '../seguranca/execChamaApresentaUsuario.php';?>
            </div>
            <?php include_once '../seguranca/execGeraMenu.php';?>
        </div>
        <div class="conteudo">
            <h1>Cadastro categoria</h1>
            <fieldset>
                <legend>Nome categoria</legend>
                <form action="execInsereCategoria.php" method="POST">
                    <input type="text" name="nome" value="" /><br>
                    <div>
                        <input type="submit" value="Salvar" />
                    </div>
                </form>
            </fieldset>
            <div class="bntCancela">
                <input type="submit" value="Cancelar" onclick="window.location = 'telaConsultaCategoria.php'" />
            </div>
        </div>
    </body>
</html>
