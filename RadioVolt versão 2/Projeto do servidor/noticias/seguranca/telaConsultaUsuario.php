<?php include_once '../seguranca/execVerificaCessao.php'; ?>
<?php include_once '../seguranca/execVerificaNivel.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta usuário</title>
        <link href="css/estiloTelaConsultaUsuario.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/scriptJquey.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="cabecalho">
            <div class="apresentacao">
                <?php include_once '../seguranca/execChamaApresentaUsuario.php';?>
            </div>
            <?php include_once '../seguranca/execGeraMenu.php'; ?>
        </div>
        <div class="conteudo">
            <div class="divFiltroPesquisa"> 
                <h1>Filtro Pesquisa</h1>
                <div class="infoFiltro">
                    <p><?php include_once 'execInfoFiltroPesquisa.php';?></p>
                </div>
                <form>
                    <select name="colu">
                        <option value="id">Código</option>
                        <option value="usuario">Nome usuário</option>
                        <option value="nome_usuario">Nome completo</option>
                        <!--<option value="nivel_usuario">Nivel acesso</option>-->
                        <option value="data_cadastro">Data cadastro</option>
                    </select>
                    <select name="sql">
                        <option>igual a</option>
                        <option>diferente de </option>
                        <option>maior que</option>
                        <option>menor que</option>
                        <option>contem expressão</option>
                        <option>Não contem expressão</option>
                    </select>
                    <input type="text" name="valorPesquisa" value="" /></br>
                    <input type="submit" value="Consultar" id="consultar" name="consultar"/>
                </form>
                <div class="divBntExcluir">
                    <input type="submit" name="excluir" value="Excluir filtro" onclick="window.location = '../seguranca/telaConsultaUsuario.php?excluir=excluir'" />
                </div>
            </div>
            <div class="divTabela">
                <h1>Consulta usuário</h1>
                <input class="chmNovaNoticia" type="submit" value="Novo usuário" onclick="window.location = 'telaCadastraUsuario.php'" />
                <?php include_once 'execFiltroPesquisaUsuario.php'; ?>
            </div>
        </div>
    </body>
</html>
