<?php include_once '../seguranca/execVerificaCessao.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta notícia</title>
        <link href="css/estiloTelaConsultaNoticia.css" rel="stylesheet" type="text/css"/>
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
                    <p><?php include_once '../noticias/execInfoFiltroPesquisa.php';?></p>
                </div>
                <form>
                    <select name="colu">
                        <option value="id">Código</option>
                        <option value="titulo">Titulo</option>
                        <option value="categoria">Categoria</option>
                        <!--<option value="dt_cadastro">Data cadastro</option>-->
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
                    <input type="submit" name="excluir" value="Excluir filtro" onclick="window.location = 'telaConsultaNoticia.php?excluir=excluir'" />
                </div>
            </div>
            <div class="divTabela">
                <h1>Consulta Notícias</h1>
                <input class="chmNovaNoticia" type="submit" value="Nova notícia" onclick="window.location = 'telaCadastraNoticia.php'" />
                <?php include_once 'execFiltroPesquisaNoticia.php'; ?>
            </div>
        </div>
    </body>
</html>
