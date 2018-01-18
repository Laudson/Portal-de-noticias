<?php include_once '../seguranca/execVerificaCessao.php';?>
<?php include_once '../seguranca/execVerificaNivel.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edita usuário</title>
        <link href="css/estiloTelaCadastroUsuario.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="cabecalho">
            <div class="apresentacao">
                <?php include_once '../seguranca/execChamaApresentaUsuario.php';?>
            </div>
            <?php include_once '../seguranca/execGeraMenu.php';?>
        </div>
        <div class="conteudo">
            <h1>Edita usuário</h1>
            <form action="execEditaUsuario.php" method="POST">
                <?php include_once 'execEditaUsuario.php';?>
            </form>
            <div class="cancelar">
                <input type="submit" value="Cancelar" class="bnt" onclick="window.location = 'telaConsultaUsuario.php'"/>
            </div>
        </div>
    </body>
</html>
