<html>
    <head>
        <meta charset="utf-8">
        <title>Tela de acesso</title>
        <link href="css/estiloTelaLogin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="cabecalho">
        </div>
        <div class="conteudo">
            <form action="execCriaCessao.php" method="POST">
            <h1>Autenticação</h1>
            <fieldset class="fildPrincipal">
                <legend class="princLegend">Entre com usuário e senha</legend>
                <fieldset class="fildInput">
                    <legend>Usuário</legend>
                    <input type="text" name="usuario" value="" />
                    </fieldset>
                <fieldset class="fildInput">
                    <legend>Senha</legend>
                    <input type="password" name="senha" value="" />
                    </fieldset>
                <input type="submit" value="Entrar" />
                <div class="divTrocaSenha"><a href="telaAlteraSenha.php">Alterar senha</a>
                    
                </div>
            </fieldset>
            </form>
        </div>
    </body>
</html>
