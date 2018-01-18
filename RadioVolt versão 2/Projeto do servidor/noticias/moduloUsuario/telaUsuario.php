
<html>
    <head>
        <meta charset="UTF-8">
        <title>Grade Notícias</title>
        <link href="css/estiloPagina.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="jquery/scriptJquey.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="principal">

            <div class="cabecalho">Notícias </div>

            <div class="contemNoticia"><?php include_once 'execGeraGradeNoticiaUsuario.php'; ?></div>

            <a href="telaAcervoNoticia.php" target=_blank><div class="rodape">Acesse nosso acervo de Noticias</div></a>

        </div>
    </body>
</html>
