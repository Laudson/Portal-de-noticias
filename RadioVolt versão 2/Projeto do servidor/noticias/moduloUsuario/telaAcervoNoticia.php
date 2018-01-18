<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/estiloTelaAcervoNoticia.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="jquery/scriptJquey.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="banner">
            <div class="campoConsulta">
                <form>
                    <input type="text" name="vlPesquisa" value="" placeholder="Filtro pelo titulo da notícia"/>
                    <div class="imagemBotaoConsulta">
                        <input name="excluir" type="image" src="../imagensSistema/lupa.jpg" width="24" height="24" alt="lupa">
                    </div>
                </form>
            </div>
        </div>
        <div class="selectedCategoria">
            <div class="selectedCategoriaCabecalho"><p>Filtro por categoría</p>
                <img src="../imagensSistema/setaBaixo.png" width="20" height="20" alt="setaBaixo"/>
            </div>
            <div class="contemMenu">
                <?php include_once '../moduloUsuario/execGeraMenu.php'; ?>
            </div>
            <div class="selectedCategoriaRodape">
                <img src="../imagensSistema/setaAlto.png" width="20" height="20" alt="setaAlto"/>
                <p>Fechar filtro</p>
            </div>
        </div>
        <div class="principal">
            <?php include_once '../moduloUsuario/execVariaveisSessaoNoticias.php'; ?>
        </div>
        <div class="divRodape">
            <div class="contemBotoes">
                <?php include_once '../moduloUsuario/execVariaveisSessaoPaginacao.php'; ?>
            </div>
        </div>
    </body>
</html>
