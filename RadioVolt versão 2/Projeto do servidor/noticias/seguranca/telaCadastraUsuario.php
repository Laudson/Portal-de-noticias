<?php include_once '../seguranca/execVerificaCessao.php';?>
<?php include_once '../seguranca/execVerificaNivel.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastra usuário</title>
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
            <h1>Cadastro usuário</h1>
            <form action="execInsereUsuario.php" method="POST">
                <fieldset class="fildPrincipal">
                    <legend class="princLegend">Informações do usuário</legend>
                    <fieldset class="fildInput">
                        <legend>Nome completo</legend>
                        <input type="text" name="nome" value="" />
                    </fieldset>
                    <fieldset class="fildInput">
                        <legend>Nome de acesso</legend>
                        <input type="text" name="usuario" value="" />
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
                        <select name="nivelUsu">
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
                    <input type="submit" value="Cadastrar" class="bnt"/>
                </div>
            </form>
            <div class="cancelar">
                <input type="submit" value="Cancelar" class="bnt" onclick="window.location = 'telaConsultaUsuario.php'"/>
            </div>
        </div>
    </body>
</html>
