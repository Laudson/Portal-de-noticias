<html>
    <head>
        <meta charset="utf-8">
        <title>Alterar senha</title>
        <link href="css/estiloTelaTrocaSenha.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="cabecalho">
        </div>
        <div class="conteudo">
            <form action="execAlteraSenha.php" method="POST">
            <h1>Auterar senha</h1>
            <fieldset class="fildPrincipal">
                <legend class="princLegend">Entre com usuário e senha</legend>
                <fieldset class="fildInput">
                    <legend>Usuário</legend>
                    <input type="text" name="usuario" value="" placeholder="Nome de usuário não pode ser alterado"/>
                    </fieldset>
                <fieldset class="fildInput">
                    <legend>Senha</legend>
                    <input type="password" name="senha1" value="" placeholder="Digite a nova senha"/>
                    </fieldset>
                <fieldset class="fildInput">
                    <legend>Repita senha</legend>
                    <input type="password" name="senha2" value="" placeholder="Repita a senha informada no campo 'Senha'"/>
                    </fieldset>
                <input type="submit" value="Alterar" />
            </fieldset>
            </form>
            <div class="divCancelar">
                <input type="submit" value="Cancelar" onclick="window.location = 'telaLogin.php'"/>
            </div>
        </div>
    </body>
</html>
