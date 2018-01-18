$(document).ready(function () {
    $(".contemMenu").hide();
    $(".selectedCategoriaRodape").hide();
//    $(".cabecalho").text("Categoria");
    $(".selectedCategoriaCabecalho").click(function () {
        $(".contemMenu").fadeIn();
        $(".selectedCategoriaRodape").fadeIn();
    });
     $(".selectedCategoriaRodape").click(function () {
        $(".contemMenu").hide();
        $(".selectedCategoriaRodape").hide();
    });
});